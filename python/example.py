""""
 Author : Savaş Can ALTUN <savascanaltun@gmail.com>
 Web : savascanaltun.com.tr
 Apı : instagramresimindirme.net
 See : instagramresimindirme.net/developer.php
"""
import json
import urllib.request as url

InstagramImageURL = "https://www.instagram.com/p/BEgpP-zuPbN"

"""" Get JSON """
api = url.urlopen("http://instagramresimindirme.net/api.php?url="+InstagramImageURL)
getApi = api.read()

""" Decode Json """
get = json.loads(getApi.decode())

""" Image Download URL """
print (get['url'])

""" Image Description """
print (get['description'])


""" Profile Username """
print (get['username'])


""" Or Error """
print (get['error'])

