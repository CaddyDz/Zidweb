<!DOCTYPE html>
<!--[if IE 8]>     <html class="ie ie8 lte9 lte8"> <![endif]-->
<!--[if IE 9]>     <html class="ie ie9 lte9"> <![endif]-->
<!--[if gt IE 9]>  <html> <![endif]-->
<!--[if !IE]><!-->
<html>
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Sitando | @yield('title')</title>
	<meta name="description" content="Home.">
	<meta name="viewport" content="width=device-width, initial-scale=0.85">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">

	<!-- Icons & favicons -->
	<link rel="apple-touch-icon" href="assets/images/apple-icon-touch.png">
	<link rel="icon" href="assets/images/favicon.png">
	<!--[if IE]>
        <link rel="shortcut icon" href="assets/images/favicon.ico">
    <![endif]-->

	<!-- Stylesheet -->
	<link rel="stylesheet" href="assets/styles/css/app.css">
	<link rel="stylesheet" class="color-switcher" href="assets/styles/css/app.css">

	<!-- Theme Options -->
	<link rel="stylesheet" href="assets/styles/css/theme-options.css">

	<!-- Modernizr -->
	<script src="assets/js/modernizr.min.js"></script>
</head>
@include('layouts.header')
@yield('content')
@include('layouts.footer')

</html>
