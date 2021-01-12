<!-- Header -->

<header class="app-header" id="app-header">
	<div class="container">
		<div class="header-wrapper">
			<!-- Logo -->
			<div class="logo" id="logo">
				<!-- image logo -->
				<a href="/" class="image-logo" style="display: inline;">
					Zidweb
				</a>
				<!-- HTML logo -->
				<a href="/" class="html-logo">Zidweb</a>
			</div>
			<!-- Main-Nav -->
			<nav class="main-nav">
				<ul>
					<li @if(request()->getPathInfo() === '/') class="active" @endif><a href="/">Accueil</a></li>
					<li @if(request()->getPathInfo() === '/about') class="active" @endif><a href="/about">À propos</a></li>
					{{-- <li @if(request()->getPathInfo() === '/services') class="active" @endif><a href="/services">Services</a></li> --}}
					{{-- <li @if(request()->getPathInfo() === '/portfolio') class="active" @endif><a href="/portfolio">Portfolio</a> --}}
					</li>
					<li @if(request()->getPathInfo() === '/contact') class="active" @endif><a href="/contact">Contact</a></li>
				</ul>
				{{-- <div class="icon-round-lrg-plain search-toggle">
					<i class="fa fa-search"></i>
				</div> --}}
			</nav>
		</div>
	</div>
</header>
