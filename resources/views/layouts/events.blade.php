<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>SMK ASSALAAM || @yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

	<header id="header">
		<div class="container">
			<a href="/" id="logo" title="SMK ASSALAAM || GALLERY">SMK ASSALAAM || </a>
			<div class="menu-trigger"></div>
			<nav id="menu">
				<ul>
					<li><a href="/">Home</a></li>
					<li><a href="/murid">Students</a></li>
					<li class="current"><a href="/event">Events</a></li>
 				</ul>
				<ul>
					<li><a href="/guru">Teachers</a></li>
					<li><a href="/galeri">Gallery</a></li>
					<li><a href="#fancy" class="get-contact">Contact</a></li>
   				</ul>
			</nav>
			<!-- / navigation -->
		</div>
		<!-- / container -->
	
	</header>
	<!-- / header -->
	
	@yield('content')

	<footer id="footer">
		<div class="container">
			<section>
				<article class="col-1">
					<h3>Contact</h3>
					<ul>
						<li class="address"><a href="#">Jl. Situtarate - terusan cibaduyut,<br>Kab. Bandung - Jawa barat</a></li>
						<li class="mail"><a href="#">info@smkassalaambandung.sch.id</a></li>
						<li class="phone last"><a href="#">022 5420 220</a></li>
					</ul>
				</article>
				<article class="col-2">
					<!-- <h3>Forum topics</h3>
					<ul>
						<li><a href="#">Omnis iste natus error sit</a></li>
						<li><a href="#">Nam libero tempore cum soluta</a></li>
						<li><a href="#">Totam rem aperiam eaque </a></li>
						<li><a href="#">Ipsa quae ab illo inventore veritatis </a></li>
						<li class="last"><a href="#">Architecto beatae vitae dicta sunt </a></li>
					</ul> -->
					<p></p>
				</article>
				<article class="col-4">
					<!-- <h3>Newsletter</h3>
					<p>Assumenda est omnis dolor repellendus temporibus autem quibusdam.</p>
					<form action="#">
						<input placeholder="Email address..." type="text">
						<button type="submit">Subscribe</button>
					</form>
					<ul>
						<li><a href="#"></a></li>
					</ul> -->
					<p></p>
				</article>
				<article class="col-3">
					<h3>Social media</h3>
					<p>Temporibus autem quibusdam et aut debitis aut rerum necessitatibus saepe.</p>
					<ul>
						<li class="facebook"><a href="#">Facebook</a></li>
						<li class="google-plus"><a href="#">Google+</a></li>
						<li class="twitter"><a href="#">Twitter</a></li>
						<li class="pinterest"><a href="#">Pinterest</a></li>
					</ul>
				</article>
				
			</section>
			<p class="copy">Copyright 2014 Harrison High School. Designed by <a href="http://www.vandelaydesign.com/" title="Designed by Vandelay Design" target="_blank">Vandelay Design</a>. All rights reserved.</p>
		</div>
		<!-- / container -->
	</footer>
	<!-- / footer -->

	<div id="fancy">
		<h2>Informasi permintaan</h2>
		<form action="#">
			<div class="left">
				<fieldset class="mail"><input placeholder="Email address..." type="text"></fieldset>
				<fieldset class="name"><input placeholder="Nama..." type="text"></fieldset>
				<fieldset class="subject"><input type="text" placeholder="Subject..." name="subject"></fieldset>
			</div>
			<div class="right">
				<fieldset class="question"><textarea placeholder="Pertanyaan..."></textarea></fieldset>
			</div>
			<div class="btn-holder">
				<button class="btn blue" type="submit">Kirim permintaan</button>
			</div>
		</form>
	</div>

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</body>
</html>