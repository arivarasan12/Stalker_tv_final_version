import requests
import json
cookies = {
    'mac': '00%3A1A%3A79%3AC9%3A8F%3A42', 
    'stb_lang': 'en',
    'timezone': 'Europe%2FParis',
}

headers = {
    'User-Agent': 'Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
    'Referrer': 'http://tv.tvzon.tv/stalker_portal/c/',
    'X-User-Agent': 'Model: MAG250; Link: WiFi',
    'Cache-Control': 'no-cache',
    'Host': 'tv.tvzon.tv',
    'Connection': 'Keep-Alive',
    'Accept-Encoding': 'gzip',
}

params = (
    ('type', 'stb'),
    ('action', 'handshake'),
    ('token', ''),
    ('JsHttpRequest', '1-xml'),
)

response = requests.get('http://tv.tvzon.tv/stalker_portal/server/load.php', headers=headers, params=params, cookies=cookies)
json_object = json.loads(response.text)
json_object2=json_object["js"]
token=json_object2["token"]
random=json_object2["random"]
# print(token,random)
Bearer=c='Bearer'+ " "+token
print((Bearer))
metrics='{"mac":"00:1A:79:2A:07:A3","sn":"","model":"MAG250","type":"STB","uid":"","random":"'+random+'"}'

headers = {
    'Accept': '/',
    'User-Agent': 'Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 4 rev: 2721 Mobile Safari/533.3',
    'Referer': 'http://tv.tvzon.tv/stalker_portal/c/',
    'Accept-Language': 'en-US,',
    'Accept-Charset': 'UTF-8,;q=0.8',
    'X-User-Agent': 'Model: MAG254; Link: WiFi',
    'Authorization': c,
    'Host': 'tv.tvzon.tv',
    'Connection': 'Keep-Alive',
    'Accept-Encoding': 'gzip',
}
params = (
    ('', ''),
    ('action', 'get_profile'),
    ('random', random),
    ('mac', '00:1A:79:2A:07:A3'),
    ('type', 'stb'),
    ('hd', '1'),
    ('sn', ''),
    ('stb_type', 'MAG250'),
    ('client_type', 'STB'),
    ('image_version', '218'),
    ('device_id', ''),
    ('hw_version', '1.7-BD-00'),
    ('hw_version_2', '1.7-BD-00'),
    ('auth_second_step', '1'),
    ('video_out', 'hdmi'),
    ('num_banks', '2'),
    ('metrics', metrics),
    ('ver', 'ImageDescription: 0.2.18-r14-pub-250; ImageDate: Fri Jan 15 15:20:44 EET 2016; PORTAL version: 5.6.1; API Version: JS API version: 328; STB API version: 134; Player Engine version: 0x566'),
)
response = requests.get('http://tv.tvzon.tv/stalker_portal/server/load.php', headers=headers, params=params, cookies=cookies)






cookies = {
    'mac': '00%3A1A%3A79%3A09%3AD2%3A41',
    'stb_lang': 'en',
    'timezone': 'Europe%2FParis',
}

# headers = {
#     'User-Agent': 'Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
#     'Referrer': 'http://tv.tvzon.tv/stalker_portal/c/',
#     'X-User-Agent': 'Model: MAG250; Link: WiFi',
#     'Cache-Control': 'no-cache',
#     'Authorization':Bearer,
#     'Host': 'tv.tvzon.tv',
#     # Requests sorts cookies= alphabetically
#     # 'Cookie': 'mac=00%3A1A%3A79%3A09%3AD2%3A41; stb_lang=en; timezone=Europe%2FParis',
#     'Connection': 'Keep-Alive',
#      'Accept-Encoding': 'gzip',
# }

params = {
    'type': 'vod',
    'action': 'get_categories',
}

response = requests.get('http://tv.tvzon.tv/stalker_portal/server/load.php', params=params, cookies=cookies, headers=headers)
print(response.text)


# headers = {
#     'User-Agent': 'Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
#     'Referrer': 'http://tv.tvzon.tv/stalker_portal/c/',
#     'X-User-Agent': 'Model: MAG250; Link: WiFi',
#     'Cache-Control': 'no-cache',
#     'Authorization': Bearer,
#     'Host': 'tv.tvzon.tv',
#     # Requests sorts cookies= alphabetically
#     # 'Cookie': 'mac=00%3A1A%3A79%3A09%3AD2%3A41; stb_lang=en; timezone=Europe%2FParis',
#     'Connection': 'Keep-Alive',
#     'Accept-Encoding': 'gzip',
# }

params = {
    'type': 'vod',
    'action': 'get_ordered_list',
    'category': '65',
    'movie_id': '0',
    'season_id': '0',
    'episode_id': '0',
    'p': '2',
    'sortby': 'added',
}

response = requests.get('http://tv.tvzon.tv/stalker_portal/server/load.php', params=params, cookies=cookies, headers=headers)
print(response.text)