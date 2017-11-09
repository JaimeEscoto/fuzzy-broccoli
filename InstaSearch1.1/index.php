<!DOCTYPE HTML>
<!--
	Snapshot by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Snapshot by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<div class="page-wrap">

			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.html" class="active"><span class="icon fa-home"></span></a></li>
						<li><a href="gallery.html"><span class="icon fa-camera-retro"></span></a></li>
						<li><a href="generic.html"><span class="icon fa-file-text-o"></span></a></li>
					</ul>
				</nav>

			<!-- Main -->
				<section id="main">

					<!-- Banner -->
						<section id="banner">
							<div class="inner">
								<h1>Welcome to InstaSearch Beta1.1</h1>
								<p>Using a fully responsive gallery template by <a href="https://templated.co">TEMPLATED</a></p>
								<ul class="actions">
									<li><a href="#galleries" class="button alt scrolly big">Continue</a></li>
								</ul>
							</div>
						</section>

					<!-- Gallery -->
						<section id="galleries">

							<!-- Photo Galleries -->
								<div class="gallery">
									<header class="special">
										<form class="" action="index.php" method="get">
											<h1>What's New?</h1>
											<table>
												<tr>
													<td></td>
													<td><input type="text" name="hashTag" placeholder="Enter HashTag" value="">
													</td>
													<td><button type="submit" name="button">Search</button>
												</form></td>
												</tr>
											</table>
									</header>
									<script>
									function myFunction(link) {
									    window.location.href = link;
									}

									</script>
									<div class="content">
										<?php
										  //Aca configuramos para que puedan obtener las publicaciones
											if (isset($_GET["hashTag"])) {
												$hashTag = $_GET["hashTag"];
											}
											else {
												$hashTag = "art";
											}

										    //$photos = $_GET["photos"];
												$photos = 50;
										    $url = "https://www.instagram.com/explore/tags/$hashTag/?__a=1";

										    $ch = curl_init();

										    curl_setopt($ch, CURLOPT_URL, $url);
										    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
										    curl_setopt($ch, CURLOPT_TIMEOUT, 20);


										    $result = curl_exec($ch);
										    curl_close($ch);

										    $result = json_decode($result);
												$i = 0;
										?>
										<?php     foreach($result->tag->media->nodes as $post): ?>
											<div class="media">
									   <a href="<?php echo $post->display_src ?>" >
									       <img src="<?php echo $post->thumbnail_resources[2]->src ?>" alt=""
												 title="<?php echo $post->caption ?>"  />
									   </a>
										 <div class="social column">
										 <table>
										 	<tr>

										 		<td> <h5>	<?php echo "Comments: ".$post->comments->count; ?></h5></td>
												<td><?php echo "Likes: ".$post->likes->count; ?></td>
												<td>
													<!--
													<a href="<?php echo "www.instagram.com/p/".$post->code ?>" class="icon fa-instagram"><span class="label">Instagram</span></a>
													<a href="<?php echo "www.instagram.com/p/".$post->code ?>" target="_blank" >
													 <a href="Hello">	InstaLink </a>
													 <?php echo "www.instagram.com/p/".$post->code ?>

													 <a class="icon fa-instagram"><span class="label">Instagram</span></li>
													 <a id="myLink" onclick="myFunction('<?php echo "http://www.instagram.com/p/".$post->code;?>')">Visit Instagram Profile</a>
													 -->
													 <button type="submit" name="button" onclick="myFunction('<?php echo "http://www.instagram.com/p/".$post->code;?>')">
														 	Go to <img src="images/instagram.png" height="16" width="16">
													 </button>

												</td>
										 	</tr>
										 </table>

										 </div>
										 </div>

										<!-- <a href="<?php echo "www.instagram.com/p/".$post->code ?>" class="icon fa-instagram"><span class="label">Instagram</a> -->


									 <?php
									 if ($i%2 ==0) {
									 	?>
										<div class="media">
											<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
												<!-- InstaSerch_Beta_01 -->
												<ins class="adsbygoogle"
													 style="display:inline-block;width:336px;height:280px"
													 data-ad-client="ca-pub-2987567760800321"
													 data-ad-slot="4306167710"></ins>
												<script>
												(adsbygoogle = window.adsbygoogle || []).push({});
												</script>
										</div>
										<?php
									 }

									 if (++$i == $photos)
									 //Fin
									 break; endforeach ?>



									</div>
									<footer>
										<a href="gallery.html" class="button big">Full Gallery</a>
										<script>var adParams = {s: 1000321457, w: 300, h: 250, c: 2, blank: false}; </script><script src="//js.srcsmrtgs.com/js/ad.js"></script>
									</footer>
								</div>
						</section>

					<!-- Contact -->
						<section id="contact">
							<!-- Social -->
								<div class="social column">
									<h3>About Me</h3>
									<p>Mus sed interdum nunc dictum rutrum scelerisque erat a parturient condimentum potenti dapibus vestibulum condimentum per tristique porta. Torquent a ut consectetur a vel ullamcorper a commodo a mattis ipsum class quam sed eros vestibulum quisque a eu nulla scelerisque a elementum vestibulum.</p>
									<p>Aliquet dolor ultricies sem rhoncus dolor ullamcorper pharetra dis condimentum ullamcorper rutrum vehicula id nisi vel aptent orci litora hendrerit penatibus erat ad sit. In a semper velit eleifend a viverra adipiscing a phasellus urna praesent parturient integer ultrices montes parturient suscipit posuere quis aenean. Parturient euismod ultricies commodo arcu elementum suspendisse id dictumst at ut vestibulum conubia quisque a himenaeos dictum proin dis purus integer mollis parturient eros scelerisque dis libero parturient magnis.</p>
									<h3>Follow Me</h3>
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
								&copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a>. Images: <a href="https://unsplash.com/">Unsplash</a>.
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
