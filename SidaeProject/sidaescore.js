const axios = require('axios');
const cheerio = require('cheerio');

async function fetchUrl(url) {
    try {
        const response = await axios.get(url, {
            headers: {
                'User-Agent': 'Mozilla/5.0'
            }
        });
        return response.data;
    } catch (error) {
        console.error(`Error fetching URL: ${url}`, error);
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
    for (const id of websiteIds) {
        const result = await fetchAndParse(id);
        if (result) {
            existingWebsites.push(result);
        }
    }

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
