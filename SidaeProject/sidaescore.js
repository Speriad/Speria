import axios from 'axios';
import cheerio from 'cheerio';
import pLimit from 'p-limit';

const limit = pLimit(70); // Adjust the concurrency limit as needed
const maxRetries = 3; // Number of retries for failed requests

async function fetchUrl(url, retries = 0) {
    try {
        const response = await axios.get(url, {
            headers: {
                'User-Agent': 'Mozilla/5.0'
            },
            timeout: 10000 // 10 seconds timeout
        });
        return response.data;
    } catch (error) {
        if (retries < maxRetries) {
            console.warn(`Retrying URL: ${url}, attempt: ${retries + 1}`);
            return fetchUrl(url, retries + 1);
        }
        console.error(`Error fetching URL after ${maxRetries} retries: ${url}`, error);
        return null;
    }
}

function hasClass(node, className) {
    return node.attribs && node.attribs.class && node.attribs.class.split(' ').includes(className);
}

function findTextWithClass($, node, className) {
    if (!node) return "";
    if (hasClass(node, className)) {
        return $(node).text().trim();
    }
    const children = $(node).children();
    for (let i = 0; i < children.length; i++) {
        const result = findTextWithClass($, children[i], className);
        if (result) return result;
    }
    return "";
}

async function fetchAndParse(websiteId) {
    const url = `https://www.scooling.co.kr/mobile_student/direct.php?ec=ec_202406010133&sc=${websiteId}`;
    const html = await fetchUrl(url);
    if (!html) return null;

    const $ = cheerio.load(html);
    const gradeExists = $('*').toArray().some(node => hasClass(node, 'Mpush_grade'));

    if (gradeExists) {
        const result = findTextWithClass($, $.root()[0], 'Mpush_top_txt01');
        if (result) {
            return { websiteId, result };
        }
    }
    return null;
}

async function main() {
    const websiteIds = [];
    for (let i = 1; i <= 9999; i++) {
        for (let j = 10; j <= 31; j++) {
            websiteIds.push(`${String(i).padStart(4, '0')}${String(j).padStart(3, '0')}`);
        }
    }

    const existingWebsites = [];
    const tasks = websiteIds.map(id => limit(() => fetchAndParse(id)));

    const results = await Promise.allSettled(tasks);

    results.forEach(result => {
        if (result.status === 'fulfilled' && result.value) {
            existingWebsites.push(result.value);
        }
    });

    if (existingWebsites.length > 0) {
        console.log("Websites with class 'Mpush_grade' exist with IDs and matched text:");
        for (const { websiteId, result } of existingWebsites) {
            console.log(`Website ID: ${websiteId}, Matched Text: ${result}`);
        }
    } else {
        console.log("No websites with class 'Mpush_grade' found.");
    }
}

main();
