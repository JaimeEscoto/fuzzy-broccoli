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

   </head>
   <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      /** EXAMPLE
      <label class="tgl">
      <input type="checkbox" />
      <span data-on="1" data-off="0"></span>
      </label>
      **/
      .tgl {
      position: relative;
      outline: 0;
      display: inline-block;
      cursor: pointer;
      user-select: none;
      margin: 0 0 5px 0;
      }
      .tgl,
      .tgl:after,
      .tgl:before,
      .tgl *,
      .tgl *:after,
      .tgl *:before,
      .tgl + .tgl-btn {
      box-sizing: border-box;
      }
      .tgl::selection,
      .tgl:after::selection,
      .tgl:before::selection,
      .tgl *::selection,
      .tgl *:after::selection,
      .tgl *:before::selection,
      .tgl + .tgl-btn::selection {
      background: none;
      }
      .tgl span {
      position: relative;
      display: block;
      height: 1.8em;
      line-height: 1.2em;
      overflow: hidden;
      font-weight: normal;
      text-align: center;
      border-radius: 2em;
      padding: 0.2em 1em;
      border: 1px solid #fafafa;
      box-shadow: inset 0 2px 0 rgba(0, 0, 0, 0.2), 0 2px 0 rgba(255, 255, 255, 0.7);
      transition: color 0.3s ease, padding 0.3s ease-in-out, background 0.3s ease-in-out;
      }
      .tgl span:before {
      position: relative;
      display: block;
      line-height: 1.3em;
      padding: 0 0.2em;
      font-size: 1em;
      }
      .tgl span:after {
      position: absolute;
      display: block;
      content: '';
      border-radius: 2em;
      width: 1.3em;
      height: 1.3em;
      margin-left: -1.45em;
      top: 0.2em;
      background: #FFFFFF;
      transition: left 0.3s cubic-bezier(0.175, 0.885, 0.32, 0.97), background 0.3s ease-in-out;
      }
      .tgl input[type="checkbox"] {
      display: none !important;
      }
      .tgl input[type="checkbox"]:not(:checked) + span {
      background: #de474e;
      color: #FFFFFF;
      padding-left: 1.6em;
      padding-right: 0.4em;
      }
      .tgl input[type="checkbox"]:not(:checked) + span:before {
      content: attr(data-off);
      color: #FFFFFF;
      }
      .tgl input[type="checkbox"]:not(:checked) + span:after {
      background: #FFFFFF;
      left: 1.6em;
      }
      .tgl input[type="checkbox"]:checked + span {
      background: #86d993;
      color: #FFFFFF;
      padding-left: 0.4em;
      padding-right: 1.6em;
      }
      .tgl input[type="checkbox"]:checked + span:before {
      content: attr(data-on);
      }
      .tgl input[type="checkbox"]:checked + span:after {
      background: #FFFFFF;
      left: 100%;
      }
      .tgl input[type="checkbox"]:disabled,
      .tgl input[type="checkbox"]:disabled + span,
      .tgl input[type="checkbox"]:read-only,
      .tgl input[type="checkbox"]:read-only + span {
      cursor: not-allowed;
      }
      .tgl-gray input[type="checkbox"]:not(:checked) + span {
      background: #e3e3e3;
      color: #999999;
      }
      .tgl-gray input[type="checkbox"]:not(:checked) + span:before {
      color: #999999;
      }
      .tgl-gray input[type="checkbox"]:not(:checked) + span:after {
      background: #ffffff;
      }
      .tgl-inline {
      display: inline-block !important;
      vertical-align: top;
      }
      .tgl-inline.tgl {
      font-size: 16px;
      }
      .tgl-inline.tgl span {
      min-width: 50px;
      }
      .tgl-inline.tgl span:before {
      line-height: 1.4em;
      padding-left: 0.4em;
      padding-right: 0.4em;
      }
      .tgl-inline-label {
      display: inline-block !important;
      vertical-align: top;
      line-height: 26px;
      }
      body {
      background: url(http://subtlepatterns.com/patterns/billie_holiday.png);
      font-family: 'Source Sans Pro', Helvetica Neue, Helvetica, Arial, sans-serifsans !important;
      }
      .simple-toggle {
      position: absolute;
      left: 0;
      right: 0;
      top: 30px;
      text-align: center;
      margin: auto;
      }
      .title,
      .subtitle {
      display: block;
      -webkit-font-smoothing: antialiased !important;
      text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.004);
      }
      .title {
      font-size: 30px;
      line-height: 40px;
      font-weight: bold;
      color: #262626;
      }
      .subtitle {
      margin-bottom: 20px;
      opacity: 0.4;
      }
      .code {
      display: inline-block;
      color: grey;
      border-radius: 5px;
      border: 1px solid #c9c9c9;
      background-color: #d6d6d6 ;
      margin: 10px;
      text-align: left;
      padding: 10px 10px 0 0;
      line-height: 0.6em;
      max-width: 300px;
      }
      .footer {
      margin-top: 30px;
      font-size: 14px;
      opacity: 0.4;
      }
   </style>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
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
      <script type="text/javascript" src="https://ads.exdynsrv.com/ads.js"></script>
      <noscript><a href="https://main.exdynsrv.com/img-click.php?idzone=2833306" target="_blank"><img src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=2833306&output=img&type=468x60" width="468" height="60"></a></noscript>
      <script type="text/javascript" src="https://syndication.exdynsrv.com/splash.php?idzone=2833304"></script>
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <script>
         (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
      <div class="page-wrap">
         <!-- Nav -->
         <nav id="nav">
            <ul>
               <li><a href="index.php" class="active"><span class="icon fa-home"></span></a></li>
               <li><a href="gallery.html"><span class="icon fa-camera-retro"></span></a></li>
               <li><a href="generic.html"><span class="icon fa-file-text-o"></span></a></li>
            </ul>
         </nav>
         <!-- Main -->
         <section id="main">
            <!-- Banner -->
            <?php
            if (!isset($_GET["searchData"])) {

            ?>
            <section id="banner">
               <div class="inner">
                 <img src="BS-logo-nxn.png" alt="" height="200" width="200"  />
                  <h1>Welcome to BestShot Beta1.1</h1>
                  <p>The most updated <b>images</b> from Instagram</p>
                  <ul class="actions">
                     <li><a href="#galleries" class="button alt scrolly big">Continue</a></li>
                  </ul>
               </div>
            </section>
            <?php }
            else {

             ?>

            <section id="contact">
               <div class="column">
                  <h2>Searching: <?php echo $_GET["searchData"]; ?></h2>
               </div>
              </section>
              <?php } ?>
            <!-- Gallery -->
            <section id="galleries">
               <!-- Photo Galleries -->
               <div class="gallery">
                  <header class="special">
                     <form class="" action="index.php" method="get">
                        <h1>What's New?</h1>
                        <table border="0">
                           <tr>
                              <td colspan="2">
                                 <p align ="center">
                                    <label class="tgl" style="font-size:20px" >
                                    <input type="checkbox" name="searchUser" />
                                    <span data-on="@user" data-off="#hash"></span>
                                    </label>
                                 </p>
                              </td>
                           </tr>
                           <tr>
                              <td><input type="text" name="searchData" placeholder="Enter HashTag/User" value="">
                              </td>
                              <td><button type="submit" name="button">Search</button></td>
                           </tr>
                        </table>
                     </form>
                  </header>
                  <div class="content">
                     <?php
                        //Aca configuramos para que puedan obtener las publicaciones
                        if (isset($_GET["searchUser"])) {
                        $searchUser= $_GET["searchUser"];
                        }
                        else {
                        $searchUser= "OFF";
                        }
                        if (isset($_GET["searchData"])) {
                        $searchData = $_GET["searchData"];
                        }
                        else {
                        $searchData = "architecture";
                        }


                          //$photos = $_GET["photos"];
                        $photos = 1000;

                        if ($searchUser=="OFF") {
                        	 $url = "https://www.instagram.com/explore/tags/$searchData/?__a=1";
                        }
                        else {
                        	$url = "https://www.instagram.com/$searchData/?__a=1";
                        }


                          $ch = curl_init();

                          curl_setopt($ch, CURLOPT_URL, $url);
                          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                          curl_setopt($ch, CURLOPT_TIMEOUT, 20);


                          $result = curl_exec($ch);
                          curl_close($ch);

                          $result = json_decode($result);

                        $i = 0;
                        if($searchUser=="OFF")
                        {
                          $ultraResult=$result->tag->media->nodes;
                        }
                          else {
                            try {
                              $ultraResult=$result->user->media->nodes;
} catch (Exception $e) {
                $ultraResult=0;
}

                          }
                          if($ultraResult!=0)
                         foreach($ultraResult as $post): ?>
                     <div class="media">
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
                                    Go<img src="images/instagram.png" height="16" width="16">
                                    </button>
                                 </td>
                                 <td>
                                     <button type="submit" onclick="downloadFunction('<?php echo $post->display_src ?>','BestShot.jpg')">d!</button>
                                 </td>
                              </tr>
                           </table>
                        </div>
                     </div>
                     <!-- <a href="<?php echo "www.instagram.com/p/".$post->code ?>" class="icon fa-instagram"><span class="label">Instagram</a> -->
                     <?php
                        if ($i ==3) {
                        	?>
                     <div class="media">
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
                                    Go <img src="images/instagram.png" height="16" width="16">
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
                  </div>
                  <footer>
                  <a href="gallery.html" class="button big">Full Gallery</a>
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
                     <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                     <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                     <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                  </ul>
               </div>
               <!-- Form -->
               <div class="column">
                  <h3>Get in Touch</h3>
                  <form action="#" method="post">
                     <div class="field half first">
                        <label for="name">Name</label>
                        <input name="name" id="name" type="text" placeholder="Name">
                     </div>
                     <div class="field half">
                        <label for="email">Email</label>
                        <input name="email" id="email" type="email" placeholder="Email">
                     </div>
                     <div class="field">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
                     </div>
                     <ul class="actions">
                        <li><input value="Send Message" class="button" type="submit"></li>
                     </ul>
                  </form>
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
