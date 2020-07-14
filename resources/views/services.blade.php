@extends('layouts.app')

@section('title', __('Services'))

@section('content')

<body class="further services">

    <!-- SITE CONTENT -->

    <div id="site-content">

        @include('layouts.header')
        <!-- Sub-Header -->

        <section class="hero sub-header">
            <div class="container inactive">
                <div class="sh-title-wrapper">
                    <h1>Nos Services</h1>


                </div>
            </div>
        </section>

        <!-- Main Content -->

        <section class="section services primary section-map" id="services">
            <div class="container">
                <header class="sep active">
                    <div class="section-title">
                        <h2>Nos <i>Services</i> sont de <strong>classe mondiale<i class="fa fa-trophy"></i></strong>
                        </h2>
                    </div>

                </header>
                <div class="row inactive">
                    <div class="span-4 widget service">
                        <div class="widget-content">
                            <header>
                                <i class="livicon" data-n="desktop" data-op="1" data-c="#C1C1C1" data-s="48"
                                    data-hc="false"></i>
                                <div class="title">
                                    <h4>Web Design</h4>
                                    <h5>Donec finibus fringilla purus</h5>
                                </div>
                            </header>
                            <p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Donec finibus fringilla purus. Integer libero justo.</p>
                        </div>
                    </div>
                    <div class="span-4 widget service">
                        <div class="widget-content">
                            <header>
                                <i class="livicon" data-n="tablet" data-op="1" data-c="#C1C1C1" data-s="48"
                                    data-hc="false"></i>
                                <div class="title">
                                    <h4>Mobile App Design</h4>
                                    <h5>Donec finibus fringilla purus</h5>
                                </div>
                            </header>
                            <p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Donec finibus fringilla purus. Integer libero justo.</p>
                        </div>
                    </div>
                    <div class="span-4 widget service">
                        <div class="widget-content">
                            <header>
                                <i class="livicon" data-n="image" data-op="1" data-c="#C1C1C1" data-s="48"
                                    data-hc="false"></i>
                                <div class="title">
                                    <h4>Graphic Design</h4>
                                    <h5>Donec finibus fringilla purus</h5>
                                </div>
                            </header>
                            <p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Donec finibus fringilla purus. Integer libero justo.</p>
                        </div>
                    </div>
                </div>
                <div class="row inactive">
                    <div class="span-4 widget service">
                        <div class="widget-content">
                            <header>
                                <i class="livicon" data-n="doc-portrait" data-op="1" data-c="#C1C1C1" data-s="48"
                                    data-hc="false"></i>
                                <div class="title">
                                    <h4>Posters & Flyers</h4>
                                    <h5>Donec finibus fringilla purus</h5>
                                </div>
                            </header>
                            <p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Donec finibus fringilla purus. Integer libero justo.</p>
                        </div>
                    </div>
                    <div class="span-4 widget service">
                        <div class="widget-content">
                            <header>
                                <i class="livicon" data-n="connect" data-op="1" data-c="#C1C1C1" data-s="48"
                                    data-hc="false"></i>
                                <div class="title">
                                    <h4>Social Media</h4>
                                    <h5>Donec finibus fringilla purus</h5>
                                </div>
                            </header>
                            <p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Donec finibus fringilla purus. Integer libero justo.</p>
                        </div>
                    </div>
                    <div class="span-4 widget service">
                        <div class="widget-content">
                            <header>
                                <i class="livicon" data-n="servers" data-op="1" data-c="#C1C1C1" data-s="48"
                                    data-hc="false"></i>
                                <div class="title">
                                    <h4>Web Hosting</h4>
                                    <h5>Donec finibus fringilla purus</h5>
                                </div>
                            </header>
                            <p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Donec finibus fringilla purus. Integer libero justo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section quote">
            <div class="container">
                <blockquote class="active">
                    <h4>nous pouvons prendre vos idées géniales et les transformer en <b>une réalité
                            passionnante</b></h4>
                </blockquote>
            </div>
        </section>

        <section class="section secondary testimonials">
            <div class="container">
                <div class="testimonials-slider owl-carousel">
                    <div class="testimonial">
                        <div class="profile">
                            <a href="assets/images/stock12.jpg" class="modal-image">
                                <img src="/assets/images/stock12.jpg" alt="" />
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
                                <img src="/assets/images/stock15.jpg" alt="" />
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
                                <img src="/assets/images/stock8.jpg" alt="" />
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
        <section class="section primary latest-works" id="portfolio">
            <div class="container">
                <header class="sep active">
                    <div class="section-title">
                        <h2>Notre <a href="/portfolio">Portfolio</a></h2>
                        <h3>Certains de nos travaux récents</h3>
                    </div>

                </header>
                <div class="portfolio-items">
                    <div class="portfolio-item">
                        <div class="controls">
                            <a class="icon-round-border">
                                <i class="fa fa-link"></i>
                            </a>
                            <a href="assets/images/stock7.jpg" class="icon-round-border icon-view">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                        <h4><a>Lorem Ipsum</a></h4>
                        <p>Cras dictum erat id tortor ornare.</p>
                        <img src="/assets/images/stock7.jpg" alt="" />
                    </div>
                    <div class="portfolio-item">
                        <div class="controls">
                            <a class="icon-round-border">
                                <i class="fa fa-link"></i>
                            </a>
                            <a href="assets/images/stock16.jpg" class="icon-round-border icon-view">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                        <h4><a>Cras Facilisis</a></h4>
                        <p>Cras dictum erat id tortor ornare.</p>
                        <img src="/assets/images/stock16.jpg" alt="" />
                    </div>
                    <div class="portfolio-item">
                        <div class="controls">
                            <a class="icon-round-border">
                                <i class="fa fa-link"></i>
                            </a>
                            <a href="assets/images/stock10.jpg" class="icon-round-border icon-view">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                        <h4><a>Turpis Tristique</a></h4>
                        <p>Cras dictum erat id tortor ornare.</p>
                        <img src="/assets/images/stock10.jpg" alt="" />
                    </div>
                    <div class="portfolio-item max-bp2">
                        <div class="controls">
                            <a class="icon-round-border">
                                <i class="fa fa-link"></i>
                            </a>
                            <a href="assets/images/stock6.jpg" class="icon-round-border icon-view">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                        <h4><a>Lorem Ipsum</a></h4>
                        <p>Cras dictum erat id tortor ornare.</p>
                        <img src="/assets/images/stock6.jpg" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <section class="section banner alt">
            <div class="container">
                <div class="content">
                    <h4>Start your <b>new project</b> with a <i>fresh</i> approach...</h4>
                    <p>leave your visitors with an experience to remember and now.</p>
                </div>

            </div>
        </section>

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
        <input type="search" name="s" placeholder="Enter your query...">
        <button type="submit"><i class="fa fa-search"></i></button>
        <div class="button brand-1 search-close"><i class="fa fa-times"></i></div>
    </div>

    <!-- Site Overlay -->



    <!-- SCRIPTS -->

    <!-- jQuery -->
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
    <script src="assets/js/jquery.min.js"></script>

    <!-- LivIcons -->
    <script src="assets/js/raphael.min.js"></script>
    <script src="assets/js/livicons-custom.min.js"></script>

    <!--Plugins -->
    <script src="assets/js/owl-carousel.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <!-- Theme Options -->
    <!-- Cookie (for theme color-switcher) -->
    <script src="assets/js/cookie.js"></script>
    <!--[if IE 9]>     <script>$('.theme-options').hide();</script> <![endif]-->
    <!--[if gt IE 9]>  <script src="assets/js/theme-options.js"></script> <![endif]-->
    <!--[if !IE]><!-->
    <script src="assets/js/theme-options.js"></script>
    <!--<![endif]-->

    <!-- General -->

    <script src="assets/js/app.js"></script>

</body>
@endsection
