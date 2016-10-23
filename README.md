## Turkish
İnstagram İmage Download API

**Api adresi =>** http://instagramresimindirme.net/api.php  
**Gelmesi gereken parametre =>** _url_  
**Gönderim methodu =>** GET  
**Limit ( Maximum Request )** => _Limitsiz / Unlimited_  
**Örnek =>** http://instagramresimindirme.net/api.php?url=https://www.instagram.com/p/BEgpP-zuPbN  

## Geri Dönüş ( Callback )

Geri dönüşler json formatta olmaktadır hata oluşur ise ( resim okunamaz yada adres hatalı ise ) **error** parametresinde size geri dönüş sağlanır burada hatanın detayı bulunur örnek resim adresi bulunamaz ise ;

<pre>{"error":"\u0130mage not found or private"}</pre>

veya resim adresi yok ise örnek

<pre>{"error":"Image url empty. Plase DOC => http:\/\/instagramresimindirme.net\/developer.php"}</pre>

başarılı bir sorgudan geri dönecek json şu şekildedir ;

<pre>{"url":"http:\/\/instagramresimindirme.net\/download.php?url=https:\/\/scontent.cdninstagram.com\/t51.2885-15\/s640x640\/sh0.08\/e35\/12599183_1739880949622714_1733724901_n.jpg","description":"Punisher \ud83d\ude0e #turkey #istanbul","username":"savascanaltun"}
									</pre>


## Örnekler 

* [PHP](https://github.com/saltun/InstagramImageDownload/tree/master/php)
* [Python](https://github.com/saltun/InstagramImageDownload/tree/master/python)
* [Ruby](https://github.com/saltun/InstagramImageDownload/tree/master/ruby)

 Developer and Creator - [Savaş Can ALTUN](http://savascanaltun.com.tr "Savaş Can ALTUN")

 
