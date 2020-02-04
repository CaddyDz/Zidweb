@extends('layouts.app')

@section('content')

<body class="index parallax-title">

    <!-- SITE CONTENT -->

    <div id="site-content">

        @include('layouts.header')
        <!-- Hero -->

        <section class="hero inactive">
            <div class="hero-down">
                <a href="#s-welcome" class="mouse">
                    <div class="mouse-animations">
                        <div class="mouse-scroll-l"></div>
                        <div class="mouse-scroll-2"></div>
                        <div class="mouse-scroll-3"></div>
                    </div>
                </a>
            </div>
            <div class="container">
                <div class="title-wrapper">
                    <div class="hero-title">
                        <h2>Bienvenue chez Sitando</h2>
                        <h3>réalisation des sites modernes</h3>
                    </div>
                    <div class="meta">
                        <p class="blurb">Commencez votre nouveau projet avec une nouvelle approche. Sitando est vraiment
                            à la
                            pointe en termes de conception et de performances; contactez-nous pour laisser à vos
                            visiteurs une
                            expérience inoubliable <a href="/about" target="blank"></a>.</p>
                        <a href="/contact" target="blank" class="button round brand-1">Contactez Nous</a>
                        <a href="#s-welcome" class="button round border">À propos</a>
                    </div>
                </div>
            </div>
        </section>
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
                                <i class="livicon" data-n="desktop" data-op="1" data-c="#C1C1C1" data-s="48"
                                    data-hc="false"></i>
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
                                <i class="livicon" data-n="tablet" data-op="1" data-c="#C1C1C1" data-s="48"
                                    data-hc="false"></i>
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
                                <i class="livicon" data-n="image" data-op="1" data-c="#C1C1C1" data-s="48"
                                    data-hc="false"></i>
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
                                <i class="livicon" data-n="doc-portrait" data-op="1" data-c="#C1C1C1" data-s="48"
                                    data-hc="false"></i>
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
                                <i class="livicon" data-n="connect" data-op="1" data-c="#C1C1C1" data-s="48"
                                    data-hc="false"></i>
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
                                <i class="livicon" data-n="servers" data-op="1" data-c="#C1C1C1" data-s="48"
                                    data-hc="false"></i>
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


        @include('layouts.footer')
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
    <script src="assets/js/homepage.js"></script>
    <script src="assets/js/earth-slider.js"></script>

    <!-- Google Map -->

    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9kOt-o-2NU7_pcjkGIj4f8cKPw_xinco">
    </script>
    <script src="assets/js/google-map.js"></script>
</body>
@endsection
