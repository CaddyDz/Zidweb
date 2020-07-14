<!DOCTYPE html>
<!--[if IE 8]> <html class="ie ie8 lte9 lte8"> <![endif]-->
<!--[if IE 9]> <html class="ie ie9 lte9"> <![endif]-->
<!--[if gt IE 9]> <html> <![endif]-->
<!--[if !IE]><!-->
<html>
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Sitando | @yield('title')</title>
	<meta name="description" content="Web development agency">
	<meta name="viewport" content="width=device-width, initial-scale=0.85">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">

	<!-- Icons & favicons -->
	<link rel="apple-touch-icon" href="/assets/images/apple-icon-touch.png">
	<link rel="icon" href="/assets/images/favicon.png">
	<!--[if IE]>
		<link rel="shortcut icon" href="/assets/images/favicon.ico">
	<![endif]-->

	<!-- Stylesheet -->
	<link rel="stylesheet" href="/assets/styles/css/app.css">
	<link rel="stylesheet" class="color-switcher" href="/assets/styles/css/app.css">

	<!-- Theme Options -->
	<link rel="stylesheet" href="/assets/styles/css/theme-options.css">

	<!-- Modernizr -->
	<script src="/assets/js/modernizr.min.js"></script>
</head>
<body class="@yield('body_classes')">
<div id="site-content">
</div>
	@include('layouts.header')

	@yield('content')

	@include('layouts.footer')

	<!-- TOOLS/UTILITIES -->

	<!-- Loading Spinner -->
	<div class="loading-wrapper active">
		<div class="spinner"></div>
	</div>

	<!-- Fixed header -->
	<div class="fixed-header-container" id="fixed-header"></div>

	<!-- Control Panel Nav Trigger -->
	{{-- <div class="icon-lrg nav-trigger cp-trigger" id="cp-trigger">
		<i class="fa fa-bars"></i>
	</div> --}}

	<!-- Flyout Nav Trigger -->
	<span class="icon-lrg nav-trigger flyout-trigger" id="flyout-trigger">
		<i class="fa fa-bars"></i>
	</span>

	<!-- Control Panel Nav -->
	{{-- <nav class="cp-nav-container" id="cp-nav"></nav> --}}

	<!-- Flyout Nav -->
	<nav class="flyout-nav-container" id="flyout-nav"></nav>

	<!-- Scroll-to-top Icon-->
	<a class="icon-lrg-border scroll-top" href="#site-content">
		<i class="fa fa-angle-up"></i>
	</a>

	<!-- Main Search -->
	<div class="main-search" id="search">
		<input type="search" name="s" placeholder="Enter your query...">
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
	<script src="/assets/js/homepage.js"></script>
	<script src="/assets/js/earth-slider.js"></script>

	<!-- Google Map -->

	<script type="text/javascript"
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9kOt-o-2NU7_pcjkGIj4f8cKPw_xinco">
	</script>
	<script src="/assets/js/google-map.js"></script>
</body>
</html>
