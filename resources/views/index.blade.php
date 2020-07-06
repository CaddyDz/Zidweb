@extends('layouts.app')

@section('title', __('Home'))

@section('body_classes', 'index parallax-title')

@section('content')
<!-- Hero -->
@include('partials.hero')
<!-- Main Content -->
@include('partials.globe')
@include('partials.skills')
<section class="section services primary section-map inactive" id="s-services">
	<div class="container">
		<header class="sep active">
			<div class="section-title">
				<h2>Nos <i>Services</i> sont <strong>Classe mondiale <i class="fa fa-trophy"></i></strong></h2>
			</div>

		</header>
		<div class="owl-carousel services-slider">
			<div class="widget service">
				<div class="widget-content">
					<header>
						<i class="livicon" data-n="desktop" data-op="1" data-c="#C1C1C1" data-s="48" data-hc="false"></i>
						<div class="title">
							<h4>Web Design</h4>
							<h5>Donec finibus fringilla purus</h5>
						</div>
					</header>
					<p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
						Donec finibus fringilla purus. Integer libero justo, mattis et magna eget.</p>
				</div>
			</div>
			<div class="widget service">
				<div class="widget-content">
					<header>
						<i class="livicon" data-n="tablet" data-op="1" data-c="#C1C1C1" data-s="48" data-hc="false"></i>
						<div class="title">
							<h4>Mobile App Design</h4>
							<h5>Donec finibus fringilla purus</h5>
						</div>
					</header>
					<p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
						Donec finibus fringilla purus. Integer libero justo, mattis et magna eget.</p>
				</div>
			</div>
			<div class="widget service">
				<div class="widget-content">
					<header>
						<i class="livicon" data-n="image" data-op="1" data-c="#C1C1C1" data-s="48" data-hc="false"></i>
						<div class="title">
							<h4>Graphic Design</h4>
							<h5>Donec finibus fringilla purus</h5>
						</div>
					</header>
					<p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
						Donec finibus fringilla purus. Integer libero justo, mattis et magna eget.</p>
				</div>
			</div>
			<div class="widget service">
				<div class="widget-content">
					<header>
						<i class="livicon" data-n="doc-portrait" data-op="1" data-c="#C1C1C1" data-s="48" data-hc="false"></i>
						<div class="title">
							<h4>Posters & Flyers</h4>
							<h5>Donec finibus fringilla purus</h5>
						</div>
					</header>
					<p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
						Donec finibus fringilla purus. Integer libero justo, mattis et magna eget.</p>
				</div>
			</div>
			<div class="widget service">
				<div class="widget-content">
					<header>
						<i class="livicon" data-n="connect" data-op="1" data-c="#C1C1C1" data-s="48" data-hc="false"></i>
						<div class="title">
							<h4>Social Media</h4>
							<h5>Donec finibus fringilla purus</h5>
						</div>
					</header>
					<p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
						Donec finibus fringilla purus. Integer libero justo, mattis et magna eget.</p>
				</div>
			</div>
			<div class="widget service">
				<div class="widget-content">
					<header>
						<i class="livicon" data-n="servers" data-op="1" data-c="#C1C1C1" data-s="48" data-hc="false"></i>
						<div class="title">
							<h4>Web Hosting</h4>
							<h5>Donec finibus fringilla purus</h5>
						</div>
					</header>
					<p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
						Donec finibus fringilla purus. Integer libero justo, mattis et magna eget.</p>
				</div>
			</div>
		</div>
		<div class="nav-carousel">
			<div class="icon-round-border-lrg nav-prev">
				<i class="fa fa-angle-left"></i>
			</div>
			<div class="icon-round-border-lrg nav-next">
				<i class="fa fa-angle-right"></i>
			</div>
		</div>
	</div>
</section>
<section class="section quote">
	<div class="container">
		<blockquote class="active">
			<h4>Nous pouvons prendre vos idées géniales et les transformer en une <b>réalité passionnante</b>...
			</h4>
		</blockquote>
	</div>
</section>
@include('partials.clients')
@include('partials.latest_works', ['id' => 's-latest-works'])
<section class="section secondary testimonials">
	<div class="container">
		<div class="testimonials-slider owl-carousel">
			<div class="testimonial">
				<div class="profile">
					<a href="assets/images/stock12.jpg" class="modal-image">
						<img src="assets/images/stock12.jpg" alt="" />
					</a>
				</div>
				<blockquote>
					<p>Suspendisse tempus sodales neque, eget eleifend <b>turpis tristique</b> eu. Nullam a nisl
						maximus, <b><span>ultrices est</span></b> ut blandit nislr, elit in lobortis mattis.</p>
					<h5><cite>John Doe - Theme Forest</cite></h5>
				</blockquote>
			</div>
			<div class="testimonial">
				<div class="profile">
					<a href="assets/images/stock15.jpg" class="modal-image">
						<img src="assets/images/stock15.jpg" alt="" />
					</a>
				</div>
				<blockquote>
					<p>Suspendisse tempus sodales neque, eget eleifend <b>turpis tristique</b> eu. Nullam a nisl
						maximus, <b><span>ultrices est</span></b> ut blandit nislr, elit in lobortis mattis.</p>
					<h5><cite>John Doe - Theme Forest</cite></h5>
				</blockquote>
			</div>
			<div class="testimonial">
				<div class="profile">
					<a href="assets/images/stock8.jpg" class="modal-image">
						<img src="assets/images/stock8.jpg" alt="" />
					</a>
				</div>
				<blockquote>
					<p>Suspendisse tempus sodales neque, eget eleifend <b>turpis tristique</b> eu. Nullam a nisl
						maximus, <b><span>ultrices est</span></b> ut blandit nislr, elit in lobortis mattis.</p>
					<h5><cite>John Doe - Theme Forest</cite></h5>
				</blockquote>
			</div>
		</div>
		<div class="nav-carousel">
			<div class="icon-round-border-lrg nav-prev">
				<i class="fa fa-angle-left"></i>
			</div>
			<div class="icon-round-border-lrg nav-next">
				<i class="fa fa-angle-right"></i>
			</div>
		</div>
	</div>
</section>
@endsection
