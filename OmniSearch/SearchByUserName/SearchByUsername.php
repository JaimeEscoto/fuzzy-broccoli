<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Instagram Search</title>
  </head>
  <body>
<h1>Search by Username</h1>
<h2>Beta</h2>


<?php
  //Aca configuramos para que puedan obtener las publicaciones

    $username = $_POST["username"];
    $photos = $_POST["photos"];
    $url = "https://www.instagram.com/$username/?__a=1";

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);


    $result = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($result);
//
//print_r($result->items->id);
//echo ($result->items->id);
 echo $result->items[0]->user->profile_picture;
//Esta variable servira como contador, asi podre limitar la cantidad de post que va a mostrar
$i = 0;
?>
<table border="2" align="center" >

<tr>

<td>
<a href="<?php echo $result->items[0]->user->profile_picture ?>" target="blank" title="<?php echo $result->items[0]->user->full_name ?>">
    <img src="<?php echo $result->items[0]->user->profile_picture?>" alt="<?php echo $result->items[0]->user->full_name ?>" />
</a>
<h2><?php echo $result->items[0]->user->full_name ?></h2>
</td>
</tr>
</table>

 <?php     foreach($result->items as $post): ?>
  <a href="<?php echo $post->images->standard_resolution->url ?>" target="blank" title="<?php echo $post->caption->text ?>">
      <img src="<?php echo $post->images->thumbnail->url ?>" alt="<?php echo $post->caption->text ?>" />
  </a>

<?php
//Si la cantidad de post alcanzo 8, ya no mostrar
if (++$i == $photos)


//Fin
break; endforeach ?>



  </body>
</html>
