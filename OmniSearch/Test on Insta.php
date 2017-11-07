<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

$access_token = "1246475466.3ed3d1d.cb37b9125e0e4599a2ecc047add36e65"; //your client-id here
//$client_id = "3e72b5ca96814d889820728a595b502e"; //your client-id here
//1246475466.3ed3d1d.cb37b9125e0e4599a2ecc047add36e65
//3e72b5ca96814d889820728a595b502e
//$client_id = "1246475466.1677ed0.ad8eec524362413dadd1437d2668dc2d";


$tag = "dinnerwithmylove"; //your tag here

  $cachefile = "instagram_cache/$tag.cache";
  $urlGet="https://api.instagram.com/v1/tags/$tag/media/recent?access_token=$access_token";
  echo $urlGet;
  if (file_exists($cachefile) && time()-filemtime($cachefile)<3600) {
    $contents = file_get_contents($cachefile);
  } else {
    $contents = file_get_contents($urlGet);
    //$contents=file_get_contents("https://api.instagram.com/v1/tags/honduras/media/recent?access_token=1246475466.3ed3d1d.cb37b9125e0e4599a2ecc047add36e65");
    //file_put_contents($cachefile, $contents);
  }

  $json = json_decode($contents, true);

	$i = 0;
	foreach ($json["data"] as $value) {

    	echo echoimage($value);

    	if (++$i == 8) break;
	}

function echoimage($value) {

  $thumb = $value["images"]["thumbnail"]["url"];
  $link = $value["link"];
  $time = date("d/m/y", $value["created_time"]);
  $nick = $value["user"]["username"];
  $avatar = $value["user"]["profile_picture"];

  return "<div class=\"thumb\"><a href=\"$link\" target=\"_blank\"><img src=\"$thumb\"/></a></div>";

}

?>


<?php
  //Aca configuramos para que puedan obtener las publicaciones
    $userId = "1246475466";
    $accessToken = "1246475466.3ed3d1d.cb37b9125e0e4599a2ecc047add36e65";
    $url = "https://api.instagram.com/v1/users/$userId/media/recent/?access_token=$accessToken";

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);


    $result = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($result);
// print_r($result);

//Esta variable servira como contador, asi podre limitar la cantidad de post que va a mostrar
$i = 0;
 ?>


 <?php     foreach($result->data as $post): ?>
  <a href="<?php echo $post->images->standard_resolution->url ?>" target="blank" title="<?php echo $post->caption->text ?>">
      <img src="<?php echo $post->images->thumbnail->url ?>" alt="<?php echo $post->caption->text ?>" />
  </a>

<?php
//Si la cantidad de post alcanzo 8, ya no mostrar
if (++$i == 8)


//Fin
break; endforeach ?>
  </body>
</html>
