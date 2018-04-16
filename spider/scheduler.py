import datetime
import json
import threading
from time import sleep
from lxml.etree import HTML
from lxml import etree

import re
from spider.download import Download
from spider.db import MysqlClient
from spider.config import *

class Scheduler(object):
    def __init__(self):
        self.download = Download()
        self.db = MysqlClient()
        # self.user_url_list = []
        # self.threads = []

    def run(self):
        # self.get_yiparts_parts()
        # self.get_yiparts_detail()
        # self.get_car()
        # self.get_partid()
        self.get_items()

    def get_yiparts_parts(self):
        url = 'http://www.yiparts.com/parts/'
        response = self.download.get_html(url)
        doc = HTML(response)
        names = doc.xpath('//div[@id="sort"]/div/ul/li/a/text()')
        name_ens = doc.xpath('//div[@id="sort"]/div/ul/li/a/@href')
        for name, name_en in zip(names,name_ens):
            item_name = name.strip()
            item_name_en = name_en[7:-1]
            sql = 'insert into yiparts(yiparts_name,yiparts_name_en) VALUES ("{item_name}","{item_name_en}")'.format(item_name=item_name, item_name_en=item_name_en)
            print(sql)
            self.db.save(sql)

    def get_yiparts_detail(self):
        sql = 'select * from yiparts'
        results = self.db.find_all(sql)
        for res in results:
            url = 'http://www.yiparts.com/parts/{yiparts_name_en}/'.format(yiparts_name_en=res[2])
            print(url)
            response = self.download.get_html(url)
            doc = HTML(response)
            names = doc.xpath('//div[@id="sort2"]/div/div/a/span[2]/text()')
            name_ens = doc.xpath('//div[@id="sort2"]/div/div/a/@href')
            imgs = doc.xpath('//div[@id="sort2"]/div/div/a/span[1]/img/@src')
            for name, name_en, img in zip(names, name_ens, imgs):
                item_name = name.strip()
                item_name_en = name_en[11:-1]
                item_img = img
                sql = 'insert into yiparts_detail(pid, detail_name, detail_name_en, detail_img) VALUES ("{pid}", "{detail_name}", "{detail_name_en}", "{detail_img}")'.format(
                    pid=res[0], detail_name=item_name, detail_name_en=item_name_en, detail_img=item_img)
                print(sql)
                self.db.save(sql)

    def get_car(self):
        url = 'http://www.yiparts.com/Car/AjaxBrand/'
        response = self.download.get_html(url)
        jsonobj = json.loads(response)
        for res in jsonobj:
            # sql = 'insert into car(valid, pinyin, car_name) VALUES ("{valid}", "{pinyin}", "{car_name}")'.format(
            #     valid=res['id'], pinyin=res['initial'], car_name=res['name'])
            # print(sql)
            # self.db.save(sql)

            url_level1 = 'http://www.yiparts.com/Car/AjaxModel?level=1&bid={bid}'.format(bid=res['id'])
            response =self.download.get_html(url_level1)
            # print(url_level1)
            doc = HTML(response)
            m1ids = doc.xpath('//ul[@class="M1List"]/li/@m1id')
            names1 = doc.xpath('//ul[@class="M1List"]/li/a/text()')
            # for m1id, name in zip(m1ids, names1):
            #     level1_sql = 'insert into car_level1(level1_bid, level1_m1id, level1_name) VALUES ("{level1_bid}", "{level1_m1id}", "{level1_name}")'.format(
            #         level1_bid=res['id'], level1_m1id=m1id, level1_name=name)
            #     print(level1_sql)
            #     self.db.save(level1_sql)

            for m1id in m1ids:
                level2_url = 'http://www.yiparts.com/Car/AjaxModel?level=2&m1id={m1id}'.format(m1id=m1id)
                response = self.download.get_html(level2_url)
                doc = HTML(response)
                m2ids = doc.xpath('//ul[@class="M2List MenuSwitch"]/li/@m2id')
                names2 = doc.xpath('//ul[@class="M2List MenuSwitch"]/li/a/text()')
                # for m2id, name in zip(m2ids, names2):
                #     if m2id[:2] == 'm1':
                #         continue
                #     else:
                #         level2_sql = 'insert into car_level2(level2_m1id, level2_m2id, level2_name) VALUES ("{level2_m1id}", "{level2_m2id}", "{level2_name}")'.format(level2_m1id=m1id, level2_m2id=m2id, level2_name=name)
                #         print(level2_sql)
                #         self.db.save(level2_sql)

                for m2id in m2ids:
                    if m2id[:2] == 'm1':
                        continue
                    level3_url = 'http://www.yiparts.com/Car/AjaxModel?level=3&m2id={m2id}'.format(m2id=m2id)
                    response = self.download.get_html(level3_url)
                    print(level3_url)
                    doc = HTML(response)
                    m3_info = doc.xpath('string(//table[@class="table2"]/tbody/tr/td[1]/a/@onclick)')
                    print(m3_info)
                    if len(m3_info)>0:
                        m3_info = m3_info.split('\'')
                        m3id = m3_info[1]
                        ypc_m3id = m3_info[3]
                    else:
                        m3id =''
                        ypc_m3id = ''
                    chexing = doc.xpath('string(//table[@class="table2"]/tbody/tr/td[1])')
                    nianfen = doc.xpath('string(//table[@class="table2"]/tbody/tr/td[2])')
                    fadongji = doc.xpath('string(//table[@class="table2"]/tbody/tr/td[3])')
                    gonglv = doc.xpath('string(//table[@class="table2"]/tbody/tr/td[4])')
                    pailiang = doc.xpath('string(//table[@class="table2"]/tbody/tr/td[5])')
                    biansuqi = doc.xpath('string(//table[@class="table2"]/tbody/tr/td[6])')
                    ranliao = doc.xpath('string(//table[@class="table2"]/tbody/tr/td[7])')
                    cheshen = doc.xpath('string(//table[@class="table2"]/tbody/tr/td[8])')
                    qianzhidong = doc.xpath('string(//table[@class="table2"]/tbody/tr/td[9])')
                    houzhidong = doc.xpath('string(//table[@class="table2"]/tbody/tr/td[10])')
                    zhuchezhidong = doc.xpath('string(//table[@class="table2"]/tbody/tr/td[11])')
                    qudongfangshi = doc.xpath('string(//table[@class="table2"]/tbody/tr/td[11])')

                    level3_sql = 'insert into car_level3(level3_m2id, level3_m3id, ypc_m3id, chexing, nianfen, fadongji, gonglv, pailiang, biansuqi, ranliao, cheshen, qianzhidong, houzhidong, zhuchezhidong, qudongfangshi) ' \
                                 'VALUES ("{level3_m2id}", "{level3_m3id}", "{ypc_m3id}","{chexing}","{nianfen}","{fadongji}","{gonglv}","{pailiang}","{biansuqi}","{ranliao}","{cheshen}","{qianzhidong}","{houzhidong}","{zhuchezhidong}","{qudongfangshi}")'\
                        .format(level3_m2id=m2id, level3_m3id=m3id, ypc_m3id=ypc_m3id,chexing=chexing,nianfen=nianfen,fadongji=fadongji,gonglv=gonglv,pailiang=pailiang,biansuqi=biansuqi,ranliao=ranliao,cheshen=cheshen,qianzhidong=qianzhidong,houzhidong=houzhidong,zhuchezhidong=zhuchezhidong,qudongfangshi=qudongfangshi)
                    print(level3_sql)
                    self.db.save(level3_sql)


    def get_partid(self):
        url = 'http://www.yiparts.com/Vin/GetPartByM3Id?M3Id=60290&oem=&ypc_m3id=9543'
        response = self.download.get_html(url)
        doc = HTML(response)
        partids = doc.xpath('//div[@class="PartTree"]/ul/li/@part')
        part_names = doc.xpath('//div[@class="PartTree"]/ul/li//text()')
        for partid, part_name in zip(partids,part_names):
            sql = 'insert into partid(partid,part_name) values("{partid}","{part_name}")'.format(partid=partid, part_name=part_name)
            print(sql)
            self.db.save(sql)

    def get_items(self):
        #找出所有要查询的具体车型，m3id
        find_sql = 'select * from car_level3'
        results = self.db.find_all(find_sql)
        for res in results:
            m3id = res[2]
            ypc_m3id = res[3]
            if m3id!='' and ypc_m3id!='' and m3id!='0':
                #遍历该车型的所有零件
                part_url = 'http://www.yiparts.com/Vin/GetPartByM3Id?M3Id={m3id}&oem=&ypc_m3id={ypc_m3id}'.format(m3id=m3id, ypc_m3id=ypc_m3id)
                part_response = self.download.get_html(part_url)
                part_doc = HTML(part_response)
                if part_doc:
                    item_urls = part_doc.xpath('//div[@class="PartTree"]/ul/li/a/@href | //div[@class="PartTree cye-lm-tag"]/ul/li/a/@href')
                    for item_url in item_urls:
                        item_response = self.download.get_html(HOST_URL + item_url)
                        #不做翻页处理

                        item_partid = item_url.split('=')[-1]

                        item_doc = HTML(item_response)
                        if item_doc:
                            trs = item_doc.xpath('//div[@id="yipartsdata"]//tr[@class="content"]')
                            for tr in trs:
                                item_detail = etree.tostring(tr)
                                item_detail_doc = HTML(item_detail)

                                item_img = item_detail_doc.xpath('string(//td[1]/a/img/@src)')
                                item_OE = item_detail_doc.xpath('string(//td[2]/a//li[3] | //td[2]//a/li)')
                                item_arg1 = item_detail_doc.xpath('string(//td[3]//li[1])')
                                item_arg2 = item_detail_doc.xpath('string(//td[3]//li[2])')
                                item_arg3 = item_detail_doc.xpath('string(//td[3]//li[3])')
                                item_arg4 = item_detail_doc.xpath('string(//td[3]//li[4])')
                                item_arg5 = item_detail_doc.xpath('string(//td[3]//li[5])')

                                item_sql = 'insert into yiparts_items(item_m3id,item_partid,item_img,item_OE,item_arg1,item_arg2,item_arg3,item_arg4,item_arg5) ' \
                                           'values("{item_m3id}","{item_partid}","{item_img}","{item_OE}","{item_arg1}","{item_arg2}","{item_arg3}","{item_arg4}","{item_arg5}")'\
                                    .format(item_m3id=m3id,item_partid=item_partid,item_img=item_img,item_OE=item_OE,item_arg1=item_arg1,item_arg2=item_arg2,item_arg3=item_arg3,item_arg4=item_arg4,item_arg5=item_arg5)
                                print(item_sql)
                                self.db.save(item_sql)
