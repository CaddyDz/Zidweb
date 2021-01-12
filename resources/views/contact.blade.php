@extends('layouts.app')

@section('title', __('Contact'))

@section('body_classes', 'further contact')

@section('content')
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
						Akid Lotfi Bir El Djir<br>
						St 25, PCF6+5P Oran <br>
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
							<a href="tel:+213551081911">(+213) 551 081 911</a>
						</li>
						<li><b><i class="fa fa-envelope"></i> Email:</b> <a href="mailto:contact@zidweb.com">contact@zidweb.com</a></li>
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
						<li>Lundi - Samedi : 09:00 - 17:00</li>
						<li>Vacances: fermé</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<div id="map"></div>

<!-- Footer -->
@stop
