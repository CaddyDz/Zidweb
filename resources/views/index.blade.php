@extends('layouts.app')

@section('title', __('Home'))

@section('body_classes', 'index parallax-title')

@section('content')
<!-- Hero -->
@include('partials.hero')
<!-- Main Content -->
@include('partials.globe')

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
							<h4>Création De Sites Web</h4>
							<h5>Sites Web sûrs et flexibles...</h5>
						</div>
					</header>
					<p>Vous voulez une place pour votre entreprise, pour votre équipe, pour vos produits ou pour vous-même sur Internet! Ne vous fatiguez plus, notre équipe est prête à transformer toutes vos idées et vos rêves en réalité!</p>
				</div>
			</div>
			<div class="widget service">
				<div class="widget-content">
					<header>
						<i class="livicon" data-n="tablet" data-op="1" data-c="#C1C1C1" data-s="48" data-hc="false"></i>
						<div class="title">
							<h4>Design Mobile Applications</h4>
							<h5>Applications simples et puissantes...</h5>
						</div>
					</header>
					<p>Les applications mobiles sont parmi les produits électroniques les plus populaires. Notre équipe met à disposition de ses clients des applications interactives et professionnelles et plus encore ...</p>
				</div>
			</div>
			<div class="widget service">
				<div class="widget-content">
					<header>
						<i class="livicon" data-n="image" data-op="1" data-c="#C1C1C1" data-s="48" data-hc="false"></i>
						<div class="title">
							<h4>Design Graphic</h4>
							<h5>Design élégant et attrayant...</h5>
						</div>
					</header>
					<p>Elle aime les designs et les graphiques cohérents et innovants.Nous vous fournissons des conceptions avancées selon les dernières méthodes et normes de conception.</p>
				</div>
			</div>
			<div class="widget service">
				<div class="widget-content">
					<header>
						<i class="livicon" data-n="doc-portrait" data-op="1" data-c="#C1C1C1" data-s="48" data-hc="false"></i>
						<div class="title">
							<h4>Affiches & Flyers</h4>
							<h5>Publicité significative et attrayante...</h5>
						</div>
					</header>
					<p>Obtenez des affiches et des publicités papier attrayantes et promotionnelles, faites la promotion de vos produits et de vos capacités. Qu'attendez-vous!</p>
				</div>
			</div>
			<div class="widget service">
				<div class="widget-content">
					<header>
						<i class="livicon" data-n="connect" data-op="1" data-c="#C1C1C1" data-s="48" data-hc="false"></i>
						<div class="title">
							<h4>Médias Sociaux</h4>
							<h5>Publiez vos produits...</h5>
						</div>
					</header>
					<p>Vous souhaitez commercialiser votre produit sur les plateformes de médias sociaux les plus populaires, ou faire une publicité ciblée et réussie en même temps, nous pouvons le faire et plus encore...</p>
				</div>
			</div>
			<div class="widget service">
				<div class="widget-content">
					<header>
						<i class="livicon" data-n="servers" data-op="1" data-c="#C1C1C1" data-s="48" data-hc="false"></i>
						<div class="title">
							<h4>Hébergement Web</h4>
							<h5>Publiez votre site web sur Internet...</h5>
						</div>
					</header>
					<p>Nous ne design pas que des sites Web! Dépêchez-vous de découvrir nos services, nous travaillons à la publication de votre site et veillons également à ce qu'il apparaisse à la pointe des résultats de recherche et plus encore ...</p>
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
@include('partials.latest_works', ['id' => 's-latest-works'])
<section class="section secondary testimonials">
	<div class="container">
		<div class="testimonials-slider owl-carousel">
			<div class="testimonial">
				<div class="profile">
					<a href="assets/images/salim.jpeg" class="modal-image">
						<img src="/assets/images/salim.jpeg" alt="" />
					</a>
				</div>
				<blockquote>
					<p><b>Salim</b> apporte l'expertise de <b><span>Laravel</span></b>. à la table backend - avec le sourire.</p>
					<h5><cite>Salim Djerbouh - Fondateur</cite></h5>
				</blockquote>
			</div>
			<div class="testimonial">
				<div class="profile">
					<a href="assets/images/hacene.jpeg" class="modal-image">
						<img src="/assets/images/hacene.jpeg" alt="" />
					</a>
				</div>
				<blockquote>
				<p>Le premier langage <b>Hacene</b> est <b><span>JavaScript</span></b>. tout est permis!</p>
					<h5><cite>Hacene Ouserir - Développeur web</cite></h5>
				</blockquote>
			</div>
			<div class="testimonial">
				<div class="profile">
					<a href="assets/images/mehdi.jpg" class="modal-image">
						<img src="/assets/images/mehdi.jpg" alt="" />
					</a>
				</div>
				<blockquote>
				<p><b>Mehdi</b> maintient essentiellement  <b><span>es affaires financières</span></b>. Que veux-tu mon ami de plus que ça?</p>
					<h5><cite>Mehdi Mansour - VC</cite></h5>
				</blockquote>
			</div>
			<div class="testimonial">
				<div class="profile">
					<a href="assets/images/lukas.jpg" class="modal-image">
						<img src="/assets/images/lukas.jpg" alt="" />
					</a>
				</div>
				<blockquote>
				<p>Qui a besoin d'un développeur <b>Android</b>. lorsque vous avez <b><span>Lukas</span></b>!</p>
					<h5><cite>Lukas Owen - Développeur Android</cite></h5>
				</blockquote>
			</div>
			<div class="testimonial">
				<div class="profile">
					<a href="assets/images/oussama.jpg" class="modal-image">
						<img src="/assets/images/oussama.jpg" alt="" />
					</a>
				</div>
				<blockquote>
				<p><b>Oussama</b> est vraiment classé <b><span>Marketer</span></b>. Jetez n'importe quoi à ce gars et il vous le rendra comme une publicité!</p>
				<h5><cite>Oussama Menoukate - Marketer</cite></h5>
				</blockquote>
			</div>
			<div class="testimonial">
				<div class="profile">
					<a href="assets/images/widad.jpg" class="modal-image">
						<img src="/assets/images/widad.jpg" alt="" />
					</a>
				</div>
				<blockquote>
				<p><b>Widad</b> sait écrire <b><span>Laravel</span></b>. Et elle peut aussi parler aux humains!</p>
					<h5><cite>Widad Lai - Développeur web</cite></h5>
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
