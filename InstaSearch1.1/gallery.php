<!DOCTYPE HTML>
<!--
	Snapshot by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Gallery - Snapshot by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<div class="page-wrap">

			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.php"><span class="icon fa-home"></span></a></li>
						<li><a href="gallery.php" class="active"><span class="icon fa-camera-retro"></span></a></li>
						<li><a href="generic.html"><span class="icon fa-file-text-o"></span></a></li>
					</ul>
				</nav>

			<!-- Main -->
				<section id="main">

					<!-- Header -->
						<header id="header">
							<div>Snapshot <span>by TEMPLATED</span></div>
						</header>

					<!-- Gallery -->
						<section id="galleries">

							<!-- Photo Galleries -->
								<div class="gallery">

									<!-- Filters -->
										<header>
											<h1>Gallery</h1>
											<ul class="tabs">
												<li><a href="#" data-tag="all" class="button active">All</a></li>
												<li><a href="#" data-tag="people" class="button">People</a></li>
												<li><a href="#" data-tag="place" class="button">Places</a></li>
												<li><a href="#" data-tag="thing" class="button">Things</a></li>
												<li><a href="#" data-tag="featured" class="button">Featured</a></li>
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
		                     <div class="media all featured">
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


											<div class="media all people">
												<a href="images/fulls/01.jpg"><img src="images/thumbs/01.jpg" alt="" title="This right here is a caption." /></a>
											</div>
											<div class="media all place">
												<a href="images/fulls/05.jpg"><img src="images/thumbs/05.jpg" alt="" title="This right here is a caption." /></a>
											</div>
											<div class="media all thing">
												<a href="images/fulls/09.jpg"><img src="images/thumbs/09.jpg" alt="" title="This right here is a caption." /></a>
											</div>
											<div class="media all people">
												<a href="images/fulls/02.jpg"><img src="images/thumbs/02.jpg" alt="" title="This right here is a caption." /></a>
											</div>
											<div class="media all place">
												<a href="images/fulls/06.jpg"><img src="images/thumbs/06.jpg" alt="" title="This right here is a caption." /></a>
											</div>
											<div class="media all thing">
												<a href="images/fulls/10.jpg"><img src="images/thumbs/10.jpg" alt="" title="This right here is a caption." /></a>
											</div>
											<div class="media all people">
												<a href="images/fulls/03.jpg"><img src="images/thumbs/03.jpg" alt="" title="This right here is a caption." /></a>
											</div>
											<div class="media all place">
												<a href="images/fulls/07.jpg"><img src="images/thumbs/07.jpg" alt="" title="This right here is a caption." /></a>
											</div>
											<div class="media all thing">
												<a href="images/fulls/11.jpg"><img src="images/thumbs/11.jpg" alt="" title="This right here is a caption." /></a>
											</div>
											<div class="media all people">
												<a href="images/fulls/04.jpg"><img src="images/thumbs/04.jpg" alt="" title="This right here is a caption." /></a>
											</div>
											<div class="media all place">
												<a href="images/fulls/08.jpg"><img src="images/thumbs/08.jpg" alt="" title="This right here is a caption." /></a>
											</div>
											<div class="media all thing">
												<a href="images/fulls/12.jpg"><img src="images/thumbs/12.jpg" alt="" title="This right here is a caption." /></a>
											</div>
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
