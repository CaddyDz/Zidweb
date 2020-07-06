@extends('layouts.app')

@section('title', __('About'))

@section('body_classes', 'further about')

@section('content')
<!-- Sub-Header -->
<section class="hero sub-header">
	<div class="container inactive">
		<div class="sh-title-wrapper">
			<h1>À Propos De Nous:</h1>
		</div>
	</div>
</section>
<!-- Main Content -->
@include('partials.globe')
@include('partials.skills')
<section class="section primary why-choose-us section-map inactive" id="s-why-choose-us">
	<div class="container">
		<header class="sep active">
			<div class="section-title">
				<h2>Why <i>Choose Us</i></h2>
				<h3>Your Success is Our Success</h3>
			</div>
			<p>Suspendisse tempus sodales neque, eget eleifend <a href="#">turpis tristique</a> eu. Nullam a
				nisl maximus, ultrices est ut blandit nislr, elit in lobortis mattis.</p>
		</header>
		<div class="wcu-content">
			<div class="wcu-graphic">
				<img src="assets/images/desktop.png" alt="" />
			</div>
			<div class="wcu-features">
				<div class="widget wcu-feature wcu-left">
					<div class="widget-content">
						<i class="livicon" data-n="desktop" data-op="1" data-c="#C1C1C1" data-s="55" data-hc="false"></i>
						<div class="title">
							<h4>100% Responsive</h4>

						</div>

					</div>
				</div>
				<div class="widget wcu-feature wcu-left">
					<div class="widget-content">
						<i class="livicon" data-n="responsive" data-op="1" data-c="#C1C1C1" data-s="55" data-hc="false"></i>
						<div class="title">
							<h4>Mobile optimisé</h4>

						</div>

					</div>
				</div>
				<div class="widget wcu-feature wcu-right">
					<div class="widget-content">
						<i class="livicon" data-n="image" data-op="1" data-c="#C1C1C1" data-s="55" data-hc="false"></i>
						<div class="title">
							<h4>Pixel Perfect Design</h4>

						</div>

					</div>
				</div>
				<div class="widget wcu-feature wcu-right">
					<div class="widget-content">
						<i class="livicon" data-n="code" data-op="1" data-c="#C1C1C1" data-s="55" data-hc="false"></i>
						<div class="title">
							<h4>100% Valide Code</h4>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section banner alt">
	<div class="container">
		<div class="content">
			<h4>Commencez votre nouveau <b>projet</b> avec une <i>nouvelle</i> approche. ...</h4>
			<p>contactez-nous pour laisser à vos visiteurs une expérience inoubliable .<a </div> <div class="meta">
					<a href="/contact" or <a href="#contact">Notre
						contact</a>
		</div>
	</div>
</section>
<section class="section primary team" id="s-team">
	<div class="container">
		<header class="sep active">
			<div class="section-title">
				<h2>Notre<i> équipe</i></h2>
				<h3>RENCONTREZ NOTRE ÉQUIPE</h3>
			</div>

		</header>
		<div class="row bp2 team-members">
			<div class="span-4 team-member">
				<div class="team-pic">
					<div class="mask">
						<a href="assets/images/stock8.jpg" class="icon-lrg-border-round">
							<i class="fa fa-search"></i>
						</a>
					</div>
					<img src="assets/images/stock8.jpg" alt="" />
				</div>
				<h4>Djerbouh Salim</h4>
				<h5>Web Developer</h5>

				<div class="social-icons">
					<a href="#" class="icon-lrg tooltip" data-tip="Dribbble">
						<i class="fa fa-dribbble"></i>
					</a>
					<a href="#" class="icon-lrg tooltip" data-tip="Facebook">
						<i class="fa fa-facebook"></i>
					</a>
					<a href="#" class="icon-lrg tooltip" data-tip="Twitter">
						<i class="fa fa-twitter"></i>
					</a>
					<a href="#" class="icon-lrg tooltip" data-tip="LinkedIn">
						<i class="fa fa-linkedin"></i>
					</a>
					<a href="#" class="icon-lrg tooltip" data-tip="DeviantArt">
						<i class="fa fa-deviantart"></i>
					</a>
					<a href="#" class="icon-lrg tooltip" data-tip="Behance">
						<i class="fa fa-behance"></i>
					</a>
				</div>
			</div>
			<div class="span-4 team-member">
				<div class="team-pic">
					<div class="mask">
						<a href="assets/images/stock15.jpg" class="icon-lrg-border-round">
							<i class="fa fa-search"></i>
						</a>
					</div>
					<img src="assets/images/stock15.jpg" alt="" />
				</div>
				<h4>Sadoudi Mohamed Anis</h4>
				<h5>Web Designer</h5>

				<div class="social-icons">
					<a href="#" class="icon-lrg tooltip" data-tip="Dribbble">
						<i class="fa fa-dribbble"></i>
					</a>
					<a href="#" class="icon-lrg tooltip" data-tip="Twitter">
						<i class="fa fa-twitter"></i>
					</a>
					<a href="#" class="icon-lrg tooltip" data-tip="LinkedIn">
						<i class="fa fa-linkedin"></i>
					</a>
					<a href="#" class="icon-lrg tooltip" data-tip="DeviantArt">
						<i class="fa fa-deviantart"></i>
					</a>
					<a href="#" class="icon-lrg tooltip" data-tip="Behance">
						<i class="fa fa-behance"></i>
					</a>
				</div>
			</div>
			<div class="span-4 team-member">
				<div class="team-pic">
					<div class="mask">
						<a href="assets/images/stock12.jpg" class="icon-lrg-border-round">
							<i class="fa fa-search"></i>
						</a>
					</div>
					<img src="assets/images/stock12.jpg" alt="" />
				</div>
				<h4>Aissi Riad</h4>
				<h5>Manager</h5>

				<div class="social-icons">
					<a href="#" class="icon-lrg tooltip" data-tip="Dribbble">
						<i class="fa fa-dribbble"></i>
					</a>
					<a href="#" class="icon-lrg tooltip" data-tip="Facebook">
						<i class="fa fa-facebook"></i>
					</a>
					<a href="#" class="icon-lrg tooltip" data-tip="Twitter">
						<i class="fa fa-twitter"></i>
					</a>
					<a href="#" class="icon-lrg tooltip" data-tip="LinkedIn">
						<i class="fa fa-linkedin"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
@include('partials.clients')
<section class="stats row block-columns">
	<div class="stat span-3">
		<i class="livicon" data-n="code" data-c="#ffffff" data-op="1" data-s="68" data-hc="false"></i>
		<h4><span id="stat-1" data-val="14266">0</span></h4>
		<p>Lines of code</p>
	</div>
	<div class="stat span-3">
		<i class="livicon" data-n="rocket" data-c="#ffffff" data-op="1" data-s="68" data-hc="false"></i>
		<h4><span id="stat-2" data-val="136">0</span></h4>
		<p>Completed projects
	</div>
	<div class="stat span-3">
		<i class="livicon" data-n="users" data-c="#ffffff" data-op="1" data-s="68" data-hc="false"></i>
		<h4><span id="stat-4" data-val="28">0</span></h4>
		<p>Happy clients</p>
	</div>
	<div class="stat span-3">
		<i class="livicon" data-n="barchart" data-c="#ffffff" data-op="1" data-s="68" data-hc="false"></i>
		<h4><span id="stat-3" data-val="3254">0</span></h4>
		<p>Sales
	</div>
</section>
@include('partials.latest_works', ['id' => 'portfolio'])
<div id="map"></div>
@stop
