@extends('layouts.app')

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
                        <img src="assets/images/stock7.jpg" alt="" />
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
                        <img src="assets/images/stock16.jpg" alt="" />
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
                        <img src="assets/images/stock10.jpg" alt="" />
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
                        <img src="assets/images/stock6.jpg" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <section class="section banner alt">
            <div class="container">
                <div class="content">
                    <h4>Start your <b>new project</b> with a <i>fresh</i> approach...</h4>
                    <p>leave your visitors with an experience to remember and <a
                            href="http://themeforest.net/item/nexus-responsive-multipurpose-html5-template/10789597"
                            target="blank">Purchase Nexus</a> now.</p>
                </div>
                <div class="meta">
                    <a href="http://themeforest.net/item/nexus-responsive-multipurpose-html5-template/10789597"
                        target="blank" class="button brand-1 round">Purchase Theme</a>
                    or <a href="#about">Learn More</a>
                </div>
            </div>
        </section>
        <!-- Footer -->

        <footer class="app-footer">
            <div class="container footer-content">
                <div class="row">
                    <div class="span-3 footer-col">
                        <!-- Logo -->
                        <div class="logo">
                            <!-- image logo -->
                            <a href="/index" class="image-logo">
                                Sitando
                            </a>
                            <!-- HTML logo -->
                            <a href="/index" class="html-logo"><i class="fa fa-square-o"></i> Sitando</a>
                        </div>
                        <p>Commencez votre nouveau projet avec une nouvelle approche. Sitando est vraiment à la
                            pointe en termes
                            de conception et de performances; contactez-nous pour laisser à vos visiteurs une
                            expérience
                            inoubliable .</p>
                        <ul>
                            <li><b><i class="fa fa-globe"></i> Adresse:</b> (El Mohammadia Mall), 4e étage bureau
                                1163,Alger</li>
                            <li><b><i class="fa fa-phone-square"></i>
                                    Téléphone:</b> <a href="tel:+213553752641">(213) 553 752
                                    641</a><br><a href="tel:+213666373152">(213) 553 752 641</a></li>
                            <li><b><i class="fa fa-envelope"></i> Email:</b> <a
                                    href="mailto:contact@sitando.com">contact@sitando.com</a></li>
                        </ul>
                    </div>
                    <div class="span-3 footer-col">
                        <h3>Newsletter</h3>
                        <h4>Sign up to our mailing list</h4>
                        <p>Suspendisse tempus sodales neque, eget eleifend turpis tristique eu.</p>
                        <form class="newsletter h5-valid">
                            <div class="form-element">
                                <input type="email" class="box" required="" placeholder="Enter your email address" />
                                <label>Email Address</label>
                                <button type="submit">
                                    <i class="fa fa-check"></i>
                                </button>
                            </div>
                        </form>
                        <div class="social-icons">
                            <a href="#" class="icon tooltip" data-tip="Dribbble">
                                <i class="fa fa-dribbble"></i>
                            </a>
                            <a href="#" class="icon tooltip" data-tip="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="icon tooltip" data-tip="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="icon tooltip" data-tip="LinkedIn">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a href="#" class="icon tooltip" data-tip="DeviantArt">
                                <i class="fa fa-deviantart"></i>
                            </a>
                            <a href="#" class="icon tooltip" data-tip="Behance">
                                <i class="fa fa-behance"></i>
                            </a>
                        </div>
                    </div>
                    <div class="span-3 footer-col">
                        <h3><i class="fa fa-twitter"></i> Twitter Feed</h3>
                        <h4>View our latest tweets</h4>
                        <div id="twitter-feed">
                            <div class="twitter-article">
                                <div class="twitter-pic">
                                    <a href="assets/images/twitter-pic.jpg" class="modal-image">
                                        <img width="50" height="50" src="assets/images/twitter-pic.jpg" alt="">
                                    </a>
                                    <div class="tweet-time"><a href="#">23 Sep</a></div>
                                </div>
                                <div class="twitter-text">
                                    <div class="tweetprofilelink">
                                        <strong><a href="#">Theme Forest</a></strong> <a href="#">@themeforest</a>
                                    </div>
                                    <p>Suspendisse tempus neque, eget eleifend turpis tristique eu.</p>
                                </div>
                            </div>
                            <div class="twitter-article">
                                <div class="twitter-pic">
                                    <a href="assets/images/twitter-pic.jpg" class="modal-image">
                                        <img width="50" height="50" src="assets/images/twitter-pic.jpg" alt="">
                                    </a>
                                    <div class="tweet-time"><a href="#">23 Sep</a></div>
                                </div>
                                <div class="twitter-text">
                                    <div class="tweetprofilelink">
                                        <strong><a href="#">Theme Forest</a></strong> <a href="#">@themeforest</a>
                                    </div>
                                    <p>Suspendisse tempus neque, eget eleifend turpis tristique eu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="span-3 footer-col">
                        <h3>Testimonials</h3>
                        <h4>See what our clients say</h4>
                        <div class="owl-carousel footer-testimonials">
                            <div class="testimonial">
                                <blockquote>
                                    <p>Aenean lobortis ante nunc. Integer justo ex. Curabitur at enim ac nisi...</p>
                                </blockquote>
                                <div class="cf">
                                    <span class="profile">
                                        <a href="assets/images/stock12.jpg" class="modal-image thumb">
                                            <img src="assets/images/stock12.jpg" alt="" />
                                        </a>
                                    </span>
                                    <cite>
                                        <strong>Sam Tho</strong>
                                        <i>Theme Forest</i>
                                    </cite>
                                </div>
                            </div>
                            <div class="testimonial">
                                <blockquote>
                                    <p>Aenean lobortis ante nunc. Integer justo ex. Curabitur at enim ac nisi...</p>
                                </blockquote>
                                <div class="cf">
                                    <span class="profile">
                                        <a href="assets/images/stock8.jpg" class="modal-image thumb">
                                            <img src="assets/images/stock8.jpg" alt="" />
                                        </a>
                                    </span>
                                    <cite>
                                        <strong>John Doe</strong>
                                        <i>Theme Forest</i>
                                    </cite>
                                </div>
                            </div>
                            <div class="testimonial">
                                <blockquote>
                                    <p>Aenean lobortis ante nunc. Integer justo ex. Curabitur at enim ac nisi...</p>
                                </blockquote>
                                <div class="cf">
                                    <span class="profile">
                                        <a href="assets/images/stock15.jpg" class="modal-image thumb">
                                            <img src="assets/images/stock15.jpg" alt="" />
                                        </a>
                                    </span>
                                    <cite>
                                        <strong>Jane Dough</strong>
                                        <i>Theme Forest</i>
                                    </cite>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-bar">
                <div class="container">
                    <div class="footer-wrapper">
                        <!-- Copyright Section -->
                        <div class="copyright" id="copyright">
                            © Sitando 2020
                        </div>
                        <!-- Footer Navigation -->
                        <nav class="footer-nav">
                            <ul>
                                <li>
                                    <a href="/about">
                                        À propos
                                    </a>
                                </li>
                                <li>
                                    <a href="/services">
                                        Services
                                    </a>
                                </li>
                                <li>
                                    <a href="/portfolio">
                                        Portfolio
                                    </a>
                                </li>
                                <li>

                                    </a>
                                </li>
                                <li>
                                    <a href="/contact">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </footer>
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
