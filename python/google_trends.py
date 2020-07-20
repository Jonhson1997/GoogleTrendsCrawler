#!/usr/bin/env python
import requests
from bs4 import BeautifulSoup
import json
from datetime import datetime
import os
import sys
argvs = sys.argv[1]
argvs = argvs.split(',')
folderpath = r"C:/wamp64/www/jsbot/python/data/google_trends/"
today = datetime.now().strftime("%Y-%m-%d")
filepath = r"C:/wamp64/www/jsbot/python/data/google_trends/"
filename = today+".json"
def get_web_page(url):
    resp = requests.get(
        url=url,
    )
    if resp.status_code != 200:
        print('Invalid url:', resp.url)
        return None
    else:
        return resp.text
def html_result():
    soup = BeautifulSoup(html, 'html.parser')
    array = []
    items = soup.find_all('item')
    key = 1
    for item in items:
        if item.find('title'):
            i_title = item.find('title').text
        else:
            i_title = ''
        if item.find('ht:approx_traffic'):
            i_rank = item.find('ht:approx_traffic').text
        else:
            i_rank = ''
        if item.find('description'):
            i_description = item.find('description').text
        else:
            i_description = ''
        if item.find('link'):
            i_link = item.find('link').text
        else:
            i_link = ''
        if item.find('ht:picture'):
            i_pic = item.find('ht:picture').text
        else:
            i_pic = ''
        if item.find('ht:picture_source'):
            i_pic_source = item.find('ht:picture_source').text
        else:
            i_pic_source = ''
        data = {
            'id':key,
            'title':i_title,
            'rank':i_rank,
            'description':i_description,
            'link':i_link,
            'pubdate':datetime.strptime(item.find('pubdate').text, "%a, %d %b %Y %H:%M:%S %z").strftime("%Y-%m-%d %H:%M:%S"),
            'date':datetime.strptime(item.find('pubdate').text, "%a, %d %b %Y %H:%M:%S %z").strftime("%m/%d"),
            'pic':i_pic,
            'pic_source':i_pic_source,
            'news':[],
        }
        news = item.find_all('ht:news_item')
        for n in news:
            if n.find('ht:news_item_title'):
                n_title = n.find('ht:news_item_title').text
            else:
                n_title = ''
            if n.find('ht:news_item_snippet'):
                n_snippet = n.find('ht:news_item_snippet').text
            else:
                n_snippet = ''
            if n.find('ht:news_item_url'):
                n_url = n.find('ht:news_item_url').text
            else:
                n_url = ''
            if n.find('ht:news_item_source'):
                n_source = n.find('ht:news_item_source').text
            else:
                n_source = ''
            data['news'].append({
                    'title':n_title,
                    'snippet':n_snippet,
                    'url':n_url,
                    'source':n_source,
                })
        array.append(data)
        key+=1
    array = json.dumps(array)
    return array
def check_folder():
    if os.path.isdir(folderpath+argv):
        # print("資料夾存在。")
        return True
    else:
        try:
            os.makedirs(folderpath+argv)
            # print('資料夾已建立。')
            return True
        except FileExistsError:
            # print("資料夾已存在。")
            return False
        except PermissionError:
            # print("權限不足。")
            return False
def check_file():
    if os.path.isfile(filepath+argv+"/"+filename):
        print("檔案存在。")
        return True
    else:
        try:
            f = open(filepath+argv+"/"+filename, "w")
            print('檔案已建立。')
        except FileExistsError:
            print("檔案已存在。")
        except PermissionError:
            print("權限不足。")
def write_data(data):
    try:
        f = open(filepath+argv+"/"+filename, 'w')
        f.write(data)
        f.close()
        # print("寫入完成,path: "+filepath+argv+"/"+filename)
        return True
    except FileNotFoundError:
        # print("檔案不存在。")
        return False
    except IsADirectoryError:
        # print("該路徑為目錄")
        return False
    except IOError as e:
        # print("I/O error({0}): {1}".format(e.errno, e.strerror))
        return False
    except: #handle other exceptions such as attribute errors
        # print("Unexpected error:", sys.exc_info()[0])
        return False
if __name__ == '__main__':
    for argv in argvs:
        html = get_web_page('https://trends.google.com/trends/trendingsearches/daily/rss?geo='+argv)
        if html:
            data = html_result()
            check_folder()
            write_data(data)



