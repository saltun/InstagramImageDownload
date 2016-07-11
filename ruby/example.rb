=begin
 Author : Savaş Can ALTUN <savascanaltun@gmail.com>
 Web : savascanaltun.com.tr
 Apı : instagramresimindirme.net
 See : instagramresimindirme.net/developer.php
=end
require 'open-uri' #import open-uri
require 'json'  #import json
ImageUrl="https://www.instagram.com/p/BEgpP-zuPbN" #Instagram Image URL
json_object = JSON.parse(open("http://instagramresimindirme.net/api.php?url="+ImageUrl).read) #Read url and json parse



# Image Download URL
puts (json_object['url'])

# Image Description
puts (json_object['description'])

# Profile Username
puts (json_object['username'])

# Or Error
puts (json_object['error'])
