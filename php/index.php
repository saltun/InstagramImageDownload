<?php 
/**
* Instagram Image Download API PHP Example
* @author Savaş Can ALTUN <savascanaltun@gmail.com>
* @see [TR] => http://instagramresimindirme.net/developer.php
*/

/**
* Instagram Image URL
*/
$url="https://www.instagram.com/p/BEgpP-zuPbN/"; // example url 


/**
* Get API 
*/
$api="http://instagramresimindirme.net/api.php?url=";


/**
* Get JSON
*/
$json=file_get_contents($api.$url);


/**
* Decode Json
*/
$json=json_decode($json);

/* Image Download URL */
echo $json->url;


/* Image Description */
echo $json->description;

/* Profile Username */
echo $json->username;

/**
* Or Error 
*/
echo $json->error;



