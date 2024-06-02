import asyncio
import http.client
from bs4 import BeautifulSoup

async def fetch_and_parse(website_id_str):
    url = f"https://www.scooling.co.kr/mobile_student/direct.php?ec=ec_20240601{website_id_str}&sc=0457016"
    loop = asyncio.get_event_loop()
    response = await loop.run_in_executor(None, get_response, url)
    if response and response.status == 200:
        html = response.read().decode('utf-8')
        soup = BeautifulSoup(html, 'html.parser')
        mpush_grade = soup.find(class_="Mpush_grade")
        if mpush_grade:
            mpush_top_txt01 = soup.find(class_="Mpush_top_txt01")
            if mpush_top_txt01:
                text = mpush_top_txt01.text.strip()  # Extract text and remove leading/trailing whitespace
                return (website_id_str, text)
    return None

def get_response(url):
    connection = http.client.HTTPSConnection("www.scooling.co.kr")
    connection.request("GET", url)
    return connection.getresponse()

async def find_websites_with_class():
    existing_websites = []
    website_ids = [
        f"{str(first_four_digits).zfill(2)}{str(last_three_digits).zfill(2)}"
        for first_four_digits in range(0, 2)
        for last_three_digits in range(1, 100)
    ]
    tasks = [fetch_and_parse(website_id) for website_id in website_ids]
    existing_websites = await asyncio.gather(*tasks)
    return [result for result in existing_websites if result is not None]

# Find websites with the specified class and print matched text
async def main():
    existing_data = await find_websites_with_class()
    print("Websites with class 'Mpush_grade' exist with IDs and matched text:")
    for website_id, text in existing_data:
        print(f"Website ID: {website_id}, Matched Text: {text}")

# Run the main function
asyncio.run(main())
