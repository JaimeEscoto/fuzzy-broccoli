<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Instagram Search</title>
  </head>
  <body>
<h1>Search by HashTag</h1>
<h2>Beta</h2>


<?php
  //Aca configuramos para que puedan obtener las publicaciones

    $hashTag = $_POST["hashTag"];
    $photos = $_POST["photos"];
    $url = "https://www.instagram.com/explore/tags/$hashTag/?__a=1";

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

//Esta variable servira como contador, asi podre limitar la cantidad de post que va a mostrar
$i = 0;
?>
<table border="2" align="center" >

<tr>

<td>

<h1><?php echo $result->tag->name ?></h1>
</td>
</tr>
</table>

 <?php     foreach($result->tag->media->nodes as $post): ?>
  <a href="<?php echo $post->display_src ?>" target="blank" title="<?php echo $post->caption ?>">
      <img src="<?php echo $post->display_src ?>" alt="<?php echo $post->caption ?>" height="600" width="600" />
  </a>

<?php
//Si la cantidad de post alcanzo 8, ya no mostrar
if (++$i == $photos)


//Fin
break; endforeach ?>



  </body>
</html>
