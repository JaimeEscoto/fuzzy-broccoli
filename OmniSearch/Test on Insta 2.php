<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    function processURL($url)
       {
           $ch = curl_init();
           curl_setopt_array($ch, array(
           CURLOPT_URL => $url,
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_SSL_VERIFYPEER => false,
           CURLOPT_SSL_VERIFYHOST => 2
           ));

           $result = curl_exec($ch);
           curl_close($ch);
           return $result;
       }

       $tag = '99points';
       $client_id = "3ed3d1d.cb37b9125e0e4599a2ecc047add36e65";
       $url = 'https://api.instagram.com/v1/tags/'.$tag.'/media/recent?client_id='.$client_id;

       $all_result  = processURL($url);
       $decoded_results = json_decode($all_result, true);
      echo $url;
       // echo '<pre>';
       // print_r($decoded_results);
       // exit;

       //Now parse through the $results array to display your results...
       foreach($decoded_results['data'] as $item){
           $image_link = $item['images']['thumbnail']['url'];
           echo '<img src="'.$image_link.'" />';
       }
     ?>
  </body>
</html>
