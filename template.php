<?php require('MODELS/template.php'); ?>
<!DOCTYPE HTML>
<html>
	<head>
	<!-- <base href="/throows-dev/"> -->
	<base href="/">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Throows &mdash; Community Website</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="La Programmation accessible Pour Tous. Par La Communauté Pour la Communauté" />
	<meta name="keywords" content="Programmation, commmunauté, blog, tutoriel, cpp, java, web, apprentdre, css3" />
	<meta name="author" content="Throows" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/OwnStyle.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-right">
							<p class="num">Email: throowsdev@gmail.com</p>
							<ul class="fh5co-social">
								<li><a href="https://twitter.com/Throows" target="_blank"><i class="icon-twitter"></i></a></li>
								<li><a href="https://www.instagram.com/throows/?hl=fr" target="_blank"><i class="icon-instagram"></i></a></li>
								<li><a href="https://github.com/Throows" target="_blank"><i class="icon-github"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-1">
							<div id="fh5co-logo"><a href="index.php">Throows<span>.</span></a></div>
						</div>
						<div class="col-xs-11 text-right menu-1">
							<ul>
								<li class="<?= isActivePage("accueil"); ?>"><a href="accueil">Accueil</a></li>
								<li class="<?= isActivePage("tutoriel"); ?>"><a href="tutoriel">Tutoriels</a></li>
								<li class="<?= isActivePage("boutique"); ?>"><a href="boutique">Boutique</a></li>
								<li class="has-dropdown <?= isActivePage("blog"); ?>">
									<a href="blog">Blog</a>
									<ul class="dropdown">
										<li><a href="blog?web">Web</a></li>
										<li><a href="blog?mc-dev">Minecraft Dev</a></li>
										<li><a href="blog?game-engine-dev">Game Engine Dev</a></li>
										<!--<li><a href="#">API</a></li>-->
									</ul>
								</li>
								<li class="<?= isActivePage("contact"); ?>"><a href="contact">Contact</a></li>
								<?= loginPage(); ?>
								<li class="btn-cta"><a href="tutoriel?create"><span>Proposer un Tutoriel</span></a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</nav>

		<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/code-index.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1>La Programmation accessible à Tous.</h1>
								<h2>Par La Communauté Pour la Communauté</h2>
								<p><a class="btn btn-primary btn-lg btn-learn" href="#">Je commence</a> <a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i> Qui sommes nous ?</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

	<!-- ICI IL Y AURA LES PAGES -->
	<?= $content; ?>

		<div id="fh5co-started" style="background-image:url(images/img_bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Alors qu'attendez vous !</h2>
						<p>Commencez dès à présent votre cours et agrandissez la communauté.</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center">
						<p><a href="#" class="btn btn-default btn-lg">je crée mon tutoriel !</a></p>
					</div>
				</div>
			</div>
		</div>

		<footer id="fh5co-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 fh5co-widget">
						<h4>A Propos de Nous</h4>
						<p>Nous sommes une petite entreprise. Notre seul objectif : Rendre la population accros à la Programmation. C'est pour cela nous mobilisons Developpeurs et motivés pour mener a bien ce projet.</p>
					</div>
					<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
						<h4>Apprendre</h4>
						<ul class="fh5co-footer-links">
							<li><a href="#">Tutoriels</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">A Propos de Nous</a></li>
							<li><a href="#">Meet up</a></li>
						</ul>
					</div>

					<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
						<h4>Pour &amp; Par la Communauté</h4>
						<ul class="fh5co-footer-links">
							<li><a href="#">Blog</a></li>
							<li><a href="#">Privacy</a></li>
							<li><a href="#">Testimonials</a></li>
							<li><a href="#">Handbook</a></li>
							<li><a href="#">Held Desk</a></li>
						</ul>
					</div>

					<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
						<h4>Aide nous</h4>
						<ul class="fh5co-footer-links">
							<li><a href="#">Developpeurs</a></li>
							<li><a href="#">Bénévole</a></li>
							<li><a href="#">Creer un Tutoriel</a></li>
							<li><a href="#">Partage</a></li>
						</ul>
					</div>

					<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
						<h4>Legal</h4>
						<ul class="fh5co-footer-links">
							<!--<li><a href="#">Find Designers</a></li>
							<li><a href="#">Find Developers</a></li>-->
							<li><a href="#">Équipe</a></li>
							<li><a href="#">Partage</a></li>
							<li><a href="#">API</a></li>
						</ul>
					</div>
				</div>

				<div class="row copyright">
					<div class="col-md-12 text-center">
						<p>
							<small class="block">&copy; 2020 By Throows. All Rights Reserved.</small> 
							<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> (Merci)</small>
						</p>
						<p>
							<ul class="fh5co-social-icons">
								<li><a href="https://twitter.com/Throows" target="_blank"><i class="icon-twitter"></i></a></li>
								<li><a href="https://www.instagram.com/throows/?hl=fr" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="https://github.com/Throows" target="_blank"><i class="icon-github"></i></a></li>
								<li><a href="https://www.youtube.com/channel/UC-rgnfHi-DrIVVum31lQDvQ?view_as=subscriber" target="_blank"><i class="icon-youtube"></i></a></li>
								<li><a href="https://www.youtube.com/channel/UC-rgnfHi-DrIVVum31lQDvQ?view_as=subscriber" target="_blank"><i class="icon-google"></i></a></li>
							</ul>
						</p>
					</div>
				</div>

			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>