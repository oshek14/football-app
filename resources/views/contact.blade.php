<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Soccer | Contact</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/fav.png')}}">
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{asset('css/rsmenu-main.css')}}">
    <!-- rsmenu transitions css -->
    <link rel="stylesheet" href="{{asset('css/rsmenu-transitions.css')}}">
    <!-- hover-min css -->
    <link rel="stylesheet" href="{{asset('css/hover-min.css')}}">
    <!-- magnific-popup css -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <!-- Slick css -->
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- modernizr js -->
    <script src="{{asset('js/modernizr-2.8.3.min.js')}}"></script>
</head>

<body class="home-two">

    <!--Preloader start here-->
    @include('layout.preloader')
    <!--Preloader area end here-->

    <!--Header area start here-->
    <header class="header-inner-page">
        @include('layout.header')
        @include('layout.feature-navigation')
    </header>
    <!--Header area end here-->


    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs sec-color">
        <img src="{{asset('images/breadcrumbs/contact.jpg')}}" alt="Breadcrubs" />
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">Contact</h1>
                        <ul>
                            <li>
                                <a class="active" href="index.html">Home</a>
                            </li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->


    <!-- Contact Section Start -->
    <div class="contact-page-section sec-spacer">
        <div class="container">
            <div id="googleMap"></div>
            <div class="map-text">
                <h3>LOCATION</h3>
                <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum is has been the
                    industry’s stasn ndard dummy text ever since the 1500s, when an unknown printer took a galley of it
                    to make. Lorem Ipsum is the simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the indus try’s standard they dummy text ever since.</p>
            </div>
            <div class="row contact-address-section">
                <div class="col-md-4 contact-pd">
                    <div class="contact-address">
                        <i class="fa fa-map-marker"></i>
                        <h4>Address</h4>
                        <p>503 Old Buffalo Street</p>
                        <p>Northwest #205, New York-3087</p>
                    </div>
                </div>
                <div class="col-md-4 contact-pd">
                    <div class="contact-phone">
                        <i class="fa fa-phone"></i>
                        <h4>Phone Number</h4>
                        <a href="tel:+3453-909-6565">+3453-909-6565</a>
                        <a href="tel:+2390-875-2235">+2390-875-2235</a>
                    </div>
                </div>
                <div class="col-md-4 contact-pd">
                    <div class="contact-email">
                        <i class="fa fa-envelope"></i>
                        <h4>Email Address</h4>
                        <a href="mailto:infoname@gmail.com">
                            <p>infoname@gmail.com</p>
                        </a>
                        <a href="#">
                            <p>www.yourname.com</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-comment-section">
                <h3>Contact Form</h3>
                <div id="form-message"></div>
                <form id="contact-form" method="post" action="mailer.php">
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>First Name*</label>
                                    <input name="fname" id="fname" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>Last Name*</label>
                                    <input name="lname" id="lname" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>Email*</label>
                                    <input name="email" id="email" class="form-control" type="email">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>Subject *</label>
                                    <input name="subject" id="subject" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Message *</label>
                                    <textarea cols="40" rows="10" id="message" name="message"
                                        class="textarea form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group mb-0">
                                    <input class="btn-send" type="submit" value="Submit Now">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->


    <!-- Client Logo Section Start Here-->
    <div class="clicent-logo-section sec-spacer">
        <div class="overly-bg"></div>
        <div class="container">
            <div id="upcoming" class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="20"
                data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false"
                data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false"
                data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false"
                data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false"
                data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false"
                data-md-device-dots="false">
                <div class="item">
                    <div class="single-logo">
                        <a href="#"><img src="{{asset('images/logo/1.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="item">
                    <div class="single-logo">
                        <a href="#"><img src="{{asset('images/logo/2.png')}}" alt=""></a>
                    </div>
                </div>

                <div class="item">
                    <div class="single-logo">
                        <a href="#"><img src="{{asset('images/logo/3.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="item">
                    <div class="single-logo">
                        <a href="#"><img src="{{asset('images/logo/4.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Client Logo Section End Here-->

    <!-- Footer Start -->
    @include('layout.footer')
    <!-- Footer End -->

    <!-- Search Modal Start Here -->
    @include('layout.search')
    <!-- Search Modal End Here -->

    <!-- Start scrollUp  -->
    @include('layout.scrolltop')
    <!-- End scrollUp  -->


    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Menu js -->
    <script src="{{asset('js/rsmenu-main.js')}}"></script>
    <!-- jquery-ui js -->
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- meanmenu js -->
    <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
    <!-- wow js -->
    <script src="{{asset('js/wow.min.js')}}"></script>
    <!-- Slick js -->
    <script src="{{asset('js/slick.min.js')}}"></script>
    <!-- masonry js -->
    <script src="{{asset('js/masonry.js')}}"></script>
    <!-- magnific-popup js -->
    <!-- owl.carousel js -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- magnific-popup js -->
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <!-- jquery.counterup js -->
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <!-- moogle map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgC6ZapXdUzFdeQOFhdm_wucwlDMMQ8CQ"></script>
    <!-- contact popup form js -->
    <script src="{{asset('js/contact.form.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
