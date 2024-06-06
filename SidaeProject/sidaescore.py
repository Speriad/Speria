import asyncio
import aiohttp
from bs4 import BeautifulSoup
from aiohttp import ClientSession, ClientTimeout

async def fetch_and_parse(website_id_str, session):
    url = f"https://www.scooling.co.kr/mobile_student/direct.php?ec=ec_202406010133&sc={website_id_str}"
    try:
        async with session.get(url, timeout=ClientTimeout(total=30), headers={"User-Agent": "Mozilla/5.0"}) as response:
            if response.status == 200:
                html = await response.text()
                soup = BeautifulSoup(html, 'html.parser')
                mpush_grade = soup.find(class_="Mpush_grade")
                if mpush_grade:
                    mpush_top_txt01 = soup.find(class_="Mpush_top_txt01")
                    if mpush_top_txt01:
                        text = mpush_top_txt01.text.strip()
                        return (website_id_str, text)
                else:
                    print(f"No class 'Mpush_grade' found in website ID {website_id_str}")
            else:
                print(f"Error fetching website ID {website_id_str}: HTTP status {response.status}")
    except aiohttp.ClientError as ce:
        print(f"Client error fetching website ID {website_id_str}: {ce}")
    except asyncio.TimeoutError:
        print(f"Timeout fetching website ID {website_id_str}")
    except Exception as e:
        print(f"Error fetching/parsing website ID {website_id_str}: {e}")
    return None

async def find_websites_with_class():
    website_ids = [
        f"{str(first_four_digits).zfill(4)}{str(last_three_digits).zfill(3)}"
        for first_four_digits in range(457, 458)
        for last_three_digits in range(16, 32)
    ]

    async with ClientSession() as session:
        existing_websites = []
        for website_id in website_ids:
            result = await fetch_and_parse(website_id, session)
            if result:
                existing_websites.append(result)
    
    return existing_websites

async def main():
    existing_data = await find_websites_with_class()
    if existing_data:
        print("Websites with class 'Mpush_grade' exist with IDs and matched text:")
        for website_id, text in existing_data:
            print(f"Website ID: {website_id}, Matched Text: {text}")
    else:
        print("No websites with class 'Mpush_grade' found.")

# Run the main function
asyncio.run(main())
