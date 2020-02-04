@extends('layouts.app')

@section('content')

<body class="further contact">

    <!-- SITE CONTENT -->

    <div id="site-content">

        @include('layouts.header')
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
                                <i class="livicon" data-n="globe" data-op="1" data-c="#C1C1C1" data-s="48"
                                    data-hc="false"></i>
                                <div class="title">
                                    <h4> Notre Adresse</h4>

                                </div>
                            </header>
                            <p>
                                Centre Commercial Mohamadia<br />
                                (El Mohammadia Mall<br />
                                4e étage, bureau 1163, Alger<br />
                            </p>
                        </div>
                    </div>
                    <div class="span-4 widget">
                        <div class="widget-content">
                            <header>
                                <i class="livicon" data-n="phone" data-op="1" data-c="#C1C1C1" data-s="48"
                                    data-hc="false"></i>
                                <div class="title">
                                    <h4>Entrer en contact</h4>

                                </div>
                            </header>
                            <ul>

                                <li><b><i class="fa fa-phone-square"></i>
                                        Téléphone:</b> <a href="tel:+213553752641">(213) 553 752
                                        641</a><br><a href="tel:+213666373152">(213) 553 752 641</a></li>
                                <li><b><i class="fa fa-envelope"></i> Email:</b> <a
                                        href="mailto:contact@sitando.com">contact@sitando.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="span-4 widget">
                        <div class="widget-content">
                            <header>
                                <i class="livicon" data-n="clock" data-op="1" data-c="#C1C1C1" data-s="48"
                                    data-hc="false"></i>
                                <div class="title">
                                    <h4>Horaires d'ouvertures</h4>

                                </div>
                            </header>
                            <ul>
                                <li>Samedi - Jeudi : 09:00 - 17:00</li>
                                <li>Lundi - jeudi: 09:00 - 14:30</li>
                                <li>Vacances: fermé</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="stripes" />
                <form class="h5-valid">
                    <fieldset>
                        <div class="form-element">
                            <input type="text" class="box" required>
                            <label>Nom </label>
                        </div>
                        <div class="form-element">
                            <input type="text" class="box">
                            <label>Prénom</label>
                        </div>
                        <div class="form-element">
                            <input type="tel" class="box">
                            <label>Téléphone</label>
                        </div>
                        <div class="form-element">
                            <input type="email" class="box" required>
                            <label> Adresse email</label>
                        </div>
                    </fieldset>
                    <div class="form-element">
                        <textarea class="box" placeholder="Votre message" required></textarea>
                    </div>
                    <button type="submit" class="button large full-width brand-1">Envoyer un message</button>
                </form>
            </div>
        </section>
        <div id="map"></div>

        <!-- Footer -->

        <footer class="app-footer">
            <div class="container footer-content">
                <div class="row">
                    <div class="span-3 footer-col">
                        <!-- Logo -->
                        <div class="logo">
                            <!-- image logo -->
                            <a href="/index" class="image-logo">
                                <img src="assets/images/logo.png" alt="Sitando" />
                            </a>
                            <!-- HTML logo -->
                            <a href="/index" class="html-logo"></i> Sitando</a>
                        </div>
                        <p>Commencez votre nouveau projet avec une nouvelle approche. Sitando est vraiment à la
                            pointe en termes
                            de conception et de performances; contactez-nous pour laisser à vos visiteurs une
                            expérience
                            inoubliable .</p>
                        <ul>
                            <li><b><i class="fa fa-globe"></i> Adresse:</b> (El Mohammadia Mall), 4e étage bureau
                                1163,Alger</li>
                            li><b><i class="fa fa-phone-square"></i>
                                Téléphone:</b> <a href="tel:+213553752641">(213) 553 752
                                641</a><br><a href="tel:+213666373152">(213) 553 752 641</a>li>
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



    </div>
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

    <!-- Google Map -->

    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9kOt-o-2NU7_pcjkGIj4f8cKPw_xinco&amp;sensor=false">
    </script>
    <script src="assets/js/google-map.js"></script>
</body>
@stop
