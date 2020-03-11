<!DOCTYPE HTML>
<html>
	<head>
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

	<!-- Modernizr JS -->
	<!--<script src="js/modernizr-2.6.2.min.js"></script>-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="num">Telephone: +33 6 59 36 80 31</p>
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
						<div id="fh5co-logo"><a href="index.html">Throows<span>.</span></a></div>
					</div>
					<div class="col-xs-11 text-right menu-1">
						<ul>
							<li class="active"><a href="index.php?page=accueil">Accueil</a></li>
							<li><a href="index.php?page=tutoriel">Tutoriels</a></li>
							<li><a href="index.php?page=boutique">Boutique</a></li>
							<li class="has-dropdown">
								<a href="index.php?page=blog">Blog</a>
								<ul class="dropdown">
									<li><a href="#">Web</a></li>
									<li><a href="#">Minecraft Dev</a></li>
									<li><a href="#">Game Engine Dev</a></li>
									<!--<li><a href="#">API</a></li>-->
								</ul>
							</li>
							<li><a href="index.php?page=contact">Contact</a></li>
							<li class="btn-cta"><a href="#"><span>Login</span></a></li>
							<li class="btn-cta"><a href="#"><span>Proposer un Tutoriel</span></a></li>
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
							<h1>La Programmation Accessible Pour Tous.</h1>
							<h2>Par La Communauté Pour la Communauté</h2>
							<p><a class="btn btn-primary btn-lg btn-learn" href="#">Je commence</a> <a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i> Qui sommes nous ?</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- ICI IL Y AURA LES PAGES -->
	<?= $content ?>

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
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script type="text/javascript" src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script type="text/javascript" src="js/main.js"></script>

	</body>
</html>