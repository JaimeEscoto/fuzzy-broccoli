<!DOCTYPE HTML>
<!--
   Snapshot by TEMPLATED
   templated.co @templatedco
   Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
   -->
<html>
   <head>
      <title>BestShot | The best from Instagram</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" href="assets/css/main.css" />
      <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
      <link rel="manifest" href="favicon/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">
      <style>
      @font-face {
    font-family: thePageFont;
    src: url(assets/fonts/gloucester.ttf);
      }
      div.bsfont {
       font-family: thePageFont;
     }
      </style>

      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-27162090-2"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-27162090-2');
      </script>


   </head>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

   <div id="fb-root"></div>
   <script>(function(d, s, id) {
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) return;
     js = d.createElement(s); js.id = id;
     js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.11';
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));</script>
   <body>
		 <script>
				function myFunction(link) {
					 window.location.href = link;
				}

				function downloadFunction(uri, name) {
					var link = document.createElement("a");
					link.download = name;
					link.href = uri;
					document.body.appendChild(link);
					link.click();
					document.body.removeChild(link);
					delete link;
				}
		 </script>
      <div class="page-wrap">
         <!-- Nav -->
         <nav id="nav">
            <ul>
               <li><a href="index.php"><span class="icon fa-home"></span></a></li>
               <li><a href="gallery.php" class="active"><span class="icon fa-camera-retro"></span></a></li>
               <!--<li><a href="generic.html"><span class="icon fa-file-text-o"></span></a></li> -->
            </ul>
         </nav>
         <!-- Main -->
         <section id="main">
            <!-- Header -->

              <section id="contact">
            <div class="column bsfont">
          <h2>This 📸's with ❤ for you</h2></div>

              <div class="social column">
                 <ul class="icons">
                    <li><a href="http://www.facebook.com/bestshot.tk" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
                    <li><a href="http://www.instagram.com/bestshot.tk" class="icon fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
                 </ul>
              </div>
              </section>

            <!-- Gallery -->
            <section id="galleries">
               <!-- Photo Galleries -->
               <div class="gallery">
                  <!-- Filters -->
                  <header>
<div class="bsfont">
  <h1>Gallery</h1>
</div>

                     <ul class="tabs">
                        <li><a href="#" data-tag="All" class="button active">All</a></li>
                        <li><a href="#" data-tag="BestShotPost" class="button">BestShotPost</a></li>
                        <li><a href="#" data-tag="Love" class="button">Love</a></li>
                        <li><a href="#" data-tag="SunSet" class="button">Sunset</a></li>
                        <li><a href="#" data-tag="Beach" class="button">Beach</a></li>
                        <li><a href="#" data-tag="Sky" class="button">Sky</a></li>
                        <li><a href="#" data-tag="Space" class="button">Space</a></li>
                        <li><a href="#" data-tag="People" class="button">People</a></li>
                     </ul>
                  </header>
                  <div class="content">
                     <?php
                        //Aca configuramos para que puedan obtener las publicaciones
                        $photos = 1000;
                         $url = "https://www.instagram.com/explore/tags/BestShotPost/?__a=1";
                          $ch = curl_init();
                          curl_setopt($ch, CURLOPT_URL, $url);
                          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                          curl_setopt($ch, CURLOPT_TIMEOUT, 20);
                          $result = curl_exec($ch);
                          curl_close($ch);
                          $result = json_decode($result);
                          $ultraResult=$result->tag->media->nodes;
                        $i = 0;
                         foreach($ultraResult as $post): ?>
                     <div class="media All BestShotPost">
                        <a href="<?php echo $post->display_src ?>">
                        <img src="<?php echo $post->thumbnail_resources[2]->src ?>" alt=""
                           title="<?php echo $post->caption ?>"  />
                        </a>
                        <div class="social column">
                          <table>
                             <tr>
                                <td>
                                   <h5><img src="images/comment.png" height="16" width="16"><?php echo ": ".$post->comments->count; ?></h5>
                                </td>
                                <td><h5><img src="images/love.png" height="16" width="16"><?php echo ": ".$post->likes->count; ?></h5></td>
                                <td>
                                   <button type="submit" name="button" onclick="myFunction('<?php echo "http://www.instagram.com/p/".$post->code;?>')">
                                   <img src="images/instagram.png" height="16" width="16">
                                   </button>
                                </td>
                                <td>
                                    <button type="submit" onclick="downloadFunction('<?php echo $post->display_src ?>','BestShot.jpg')">

                                      <img src="images/download.png" height="16" width="16">

                                    </button>
                                </td>
                             </tr>
                          </table>
                        </div>
                     </div>
                     <?php
                        if ($i ==3) {
                        	?>
                     <div class="media All">
                        <!-- InstaSerch_Beta_01 -->
                        <ins class="adsbygoogle"
                           style="display:inline-block;width:220px;height:220px"
                           data-ad-client="ca-pub-2987567760800321"
                           data-ad-slot="4306167710"></ins>
                        <div class="social column">
                           <table>
                              <tr>
                                 <td>
                                    <h5><img src="images/comment.png" height="16" width="16"><?php echo ": ".rand(1,80); ?></h5>
                                 </td>
                                 <td>
                                    <h5><img src="images/love.png" height="16" width="16"><?php echo ": ".rand(1,80); ?></h5>
                                 </td>
                                 <td>
                                    <button type="submit" name="button" onclick="myFunction('<?php echo "http://www.instagram.com/p/";?>')">
                                     <img src="images/instagram.png" height="16" width="16">
                                    </button>
                                 </td>
                              </tr>
                           </table>
                        </div>
                     </div>
                     <?php
                        }

                        if (++$i == $photos)
                        //Fin
                        break; endforeach;
                        ?>


                        <!-- -->

                        <?php
                           //Aca configuramos para que puedan obtener las publicaciones
                           $photos = 1000;
                            $url = "https://www.instagram.com/explore/tags/Love/?__a=1";
                             $ch = curl_init();
                             curl_setopt($ch, CURLOPT_URL, $url);
                             curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                             curl_setopt($ch, CURLOPT_TIMEOUT, 20);
                             $result = curl_exec($ch);
                             curl_close($ch);
                             $result = json_decode($result);
                             $ultraResult=$result->tag->media->nodes;
                           $i = 0;
                            foreach($ultraResult as $post): ?>
                        <div class="media All Love">
                           <a href="<?php echo $post->display_src ?>">
                           <img src="<?php echo $post->thumbnail_resources[2]->src ?>" alt=""
                              title="<?php echo $post->caption ?>"  />
                           </a>
                           <div class="social column">
                             <table>
                                <tr>
                                   <td>
                                      <h5><img src="images/comment.png" height="16" width="16"><?php echo ": ".$post->comments->count; ?></h5>
                                   </td>
                                   <td><h5><img src="images/love.png" height="16" width="16"><?php echo ": ".$post->likes->count; ?></h5></td>
                                   <td>
                                      <button type="submit" name="button" onclick="myFunction('<?php echo "http://www.instagram.com/p/".$post->code;?>')">
                                      <img src="images/instagram.png" height="16" width="16">
                                      </button>
                                   </td>
                                   <td>
                                       <button type="submit" onclick="downloadFunction('<?php echo $post->display_src ?>','BestShot.jpg')">

                                         <img src="images/download.png" height="16" width="16">

                                       </button>
                                   </td>
                                </tr>
                             </table>
                           </div>
                        </div>
                        <?php


                           if (++$i == $photos)
                           //Fin
                           break; endforeach;
                           ?>


                  </div>
               </div>
            </section>
            <!-- Contact -->
            <section id="contact">
               <!-- Social -->
               <div class="social column">
                  <h3>About Us</h3>
                  <p>
                     We are a website capable of collecting the most recent photos that are published on Instagram, we create community and we believe that creativity is a reason for success.
                     We are developing the site, if you find something that can be improved, send us a message.
                     We love comments.
                  </p>
                  <h3>Follow Us</h3>
                  <ul class="icons">
                    <!--
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    -->
                     <li><a href="www.facebook.com/bestshot.tk" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                     <li><a href="www.instagram.com/bestshot.tk" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                  </ul>
               </div>
               <!-- Form -->
               <div class="column">
                 <div class="fb-page" data-href="https://www.facebook.com/BESTSHOT.tk" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/BESTSHOT.tk" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/BESTSHOT.tk">BestShot</a></blockquote></div>
               </div>
            </section>
            <!-- Footer -->
            <footer id="footer">
               <div class="copyright">
                  &copy; BestShot | Templated design by: <a href="https://templated.co/">TEMPLATED</a> | Coded by: <a href="#">HonduGadgetsDev </a>
               </div>
            </footer>
         </section>
      </div>
      <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.poptrox.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>
   </body>
</html>
