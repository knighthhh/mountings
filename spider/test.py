#
# import requests
# from lxml.etree import  HTML
# header = {
#     'User-Agent': 'Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.122 Safari/537.36 SE 2.X MetaSr 1.0',
#     "Accept": "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8",
#     "Accept-Language": "en-gb;q=1, en;q=1, zh-CN;q=0.8,zh;q=0.8",
#     "Cache-Control": "max-age=0",
#     "Connection": "keep-alive",
#     "Upgrade-Insecure-Requests": "1"
# }
#
# url = 'https://www.napaonline.com/en/search?text=NEW%2BELECTRICAL&ref=most-popular'
#
# res = requests.get(url, headers=header, timeout=60)
# res.encoding = "utf-8"
# print(res.text)
# doc = HTML(res.text)
# lis = doc.xpath('string(//ul[@class="navigation-panel-list columnflex"]/li/a)')
# title = []
# for li in lis :
#     # mytitle = li.xpath("//a/text()")
#     title.append(li)
# print(title)


string = "ShowM3Parts(this, '50727', '6130', '', '')"
ob = string.split('\'')
print(ob[1],ob[3])