@extends('layouts.app')

@section('title', __('Contact'))

@section('content')

<body class="further contact">
	<!-- SITE CONTENT -->
	<div id="site-content">
		@include('layouts.header')
		<!-- Sub-Header -->
		<section class="hero sub-header">
			<div class="container inactive">
				<div class="sh-title-wrapper">
					<h1>Nos contacts</h1>
				</div>
			</div>
		</section>
		<!-- Main Content -->
		<section class="section primary contact" id="s-contact">
			<div class="container">
				<div class="row contact-widgets">
					<div class="span-4 widget">
						<div class="widget-content">
							<header>
								<i class="livicon" data-n="globe" data-op="1" data-c="#C1C1C1" data-s="48" data-hc="false"></i>
								<div class="title">
									<h4>Notre Adresse</h4>
								</div>
							</header>
							<p>
								Centre Commercial Mohamadia<br />
								(El Mohammadia Mall<br />
								4e étage, bureau 1163, Alger<br />
							</p>
						</div>
					</div>
					<div class="span-4 widget">
						<div class="widget-content">
							<header>
								<i class="livicon" data-n="phone" data-op="1" data-c="#C1C1C1" data-s="48" data-hc="false"></i>
								<div class="title">
									<h4>Entrer en contact</h4>
								</div>
							</header>
							<ul>
								<li>
									<b>
										<i class="fa fa-phone-square"></i>
										Téléphone:
									</b>
									<a href="tel:+213553752641">(213) 553 752 641</a>
								</li>
								<li><b><i class="fa fa-envelope"></i> Email:</b> <a href="mailto:contact@sitando.com">contact@sitando.com</a></li>
							</ul>
						</div>
					</div>
					<div class="span-4 widget">
						<div class="widget-content">
							<header>
								<i class="livicon" data-n="clock" data-op="1" data-c="#C1C1C1" data-s="48" data-hc="false"></i>
								<div class="title">
									<h4>Horaires d'ouvertures</h4>
								</div>
							</header>
							<ul>
								<li>Samedi - Jeudi : 09:00 - 17:00</li>
								<li>Lundi - jeudi: 09:00 - 14:30</li>
								<li>Vacances: fermé</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div id="map"></div>

		<!-- Footer -->

	</div><!-- end #site-content -->

	<!-- TOOLS/UTILITIES -->

	<!-- Loading Spinner -->
	<div class="loading-wrapper active">
		<div class="spinner"></div>
	</div>

	<!-- Fixed header -->
	<div class="fixed-header-container" id="fixed-header"></div>

	<!-- Control Panel Nav Trigger -->
	<div class="icon-lrg nav-trigger cp-trigger" id="cp-trigger">
        <i class="fa fa-bars"></i>
    </div>

	<!-- Flyout Nav Trigger -->
    <span class="icon-lrg nav-trigger flyout-trigger" id="flyout-trigger">
        <i class="fa fa-bars"></i>
    </span>

	<!-- Control Panel Nav -->
	<nav class="cp-nav-container" id="cp-nav"></nav>

	<!-- Flyout Nav -->
	<nav class="flyout-nav-container" id="flyout-nav"></nav>

	<!-- Scroll-to-top Icon-->
	<a class="icon-lrg-border scroll-top" href="#site-content">
		<i class="fa fa-angle-up"></i>
	</a>

	<!-- Main Search -->
	<div class="main-search" id="search">
		<input type="search" name="s" placeholder="Entrez votre requête...">
		<button type="submit"><i class="fa fa-search"></i></button>
		<div class="button brand-1 search-close"><i class="fa fa-times"></i></div>
	</div>
	<!-- SCRIPTS -->

	<!-- jQuery -->
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
	<script src="/assets/js/jquery.min.js"></script>

	<!-- LivIcons -->
	<script src="/assets/js/raphael.min.js"></script>
	<script src="/assets/js/livicons-custom.min.js"></script>

	<!--Plugins -->
	<script src="/assets/js/owl-carousel.min.js"></script>
	<script src="/assets/js/magnific-popup.min.js"></script>
	<!-- Theme Options -->
	<!-- Cookie (for theme color-switcher) -->
	<script src="/assets/js/cookie.js"></script>
	<!--[if IE 9]>     <script>$('.theme-options').hide();</script> <![endif]-->
	<!--[if gt IE 9]>  <script src="/assets/js/theme-options.js"></script> <![endif]-->
	<!--[if !IE]><!-->
	<script src="/assets/js/theme-options.js"></script>
	<!--<![endif]-->

	<!-- General -->

	<script src="/assets/js/app.js"></script>

	<!-- Google Map -->

	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9kOt-o-2NU7_pcjkGIj4f8cKPw_xinco&amp;sensor=false">
	</script>
	<script src="/assets/js/google-map.js"></script>
</body>
@stop
