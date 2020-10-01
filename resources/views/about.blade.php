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
				<h2>Pourquoi <i> Choose Us</i></h2>
				<h3>Votre succès est notre succès</h3>
			</div>
			<pre>Satisfaire nos clients est un objectif précieux.. 
			nous nous efforçons de l'atteindre...</pre>	
		</header>
		<div class="wcu-content">
			<div class="wcu-graphic">
				<img src="/assets/images/desktop.png" alt="" />
			</div>
			<div class="wcu-features">
				<div class="widget wcu-feature wcu-left">
					<div class="widget-content">
						<i class="livicon" data-n="desktop" data-op="1" data-c="#C1C1C1" data-s="55" data-hc="false"></i>
						<div class="title">
							<h4>100% réactif</h4>

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
							<h4>Conception parfaite du pixel</h4>

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
			<h4>Commencez votre nouveau <b>projet</b> avec une <i>nouvelle</i> approche.</h4>
			<p>contactez-nous pour laisser à vos visiteurs une expérience inoubliable.
				<div class="meta">
					<a href="/contact" >Notre contact</a>
		</div>
	</div>
</section>

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
@stop
