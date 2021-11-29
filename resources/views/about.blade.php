<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Soccer | About</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png')}}">
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
    <!-- Slick Theme css -->
    <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
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
        <img src="{{asset('images/breadcrumbs/about.jpg')}}" alt="Breadcrubs" />
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">About Us</h1>
                        <ul>
                            <li>
                                <a class="active" href="index.html">Home</a>
                            </li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Club Section Start -->
    <div class="rs-club sec-spacer">
        <div class="container">
            <h3 class="title-bg">About Our Club</h3>
            <div class="row">
                <div class="col-md-6 col-ms-12">
                    <div class="rs-club-text">
                        <p>Donec sed pellentesque purus, ut tempus odio. Etiam dapibus non orci vel sodales. Vestibulum
                            dignissim laoreet semper. Phasellus elit felis, vehicula vel porta quis, venenatis ac magna.
                            Sed dapibus placerat nisi nec tincidunt. Class aptent taciti sociosqu ad litora torquent per
                            conubia nostra, per inceptos himenaeos. Nam posuere ex at quam finibus, vitae bibendum nibh
                            mollis. Nunc et velit eget nibh rutrum fringilla eu vitae risus. Nulla in convallis nisl, a
                            ullamcorper nulla.</p>
                        <p>There are many variations of passages of Lorem Ipsum available, but they can majority have
                            suffered alteration in some form, by injected humour, or there randomised words which don't
                            look even slightly believable.and they useings The standard Lorem Ipsum passage, used since
                            the 1500s.</p>
                    </div>
                </div>
                <div class="col-md-6  col-ms-12">
                    <div class="rs-club-image">
                        <img src="{{asset('images/breadcrumbs/club.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Club Section End -->

    <!--RS History Section Start Here-->
    <div class="rs-history-area">
        <div class="container">
            <div class="row rs-vertical-bottom">
                <div class="col-md-3  col-sm-12">
                    <div class="rs-mission-image">
                        <img src="{{asset('images/breadcrumbs/mission.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="history-innner">
                        <ul class="tabs-menu">
                            <li class="active">
                                <a data-toggle="tab" href="#history">
                                    <i class="fa fa-history"></i>
                                    <span>History</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#mission">
                                    <i class="fa fa-futbol-o"></i>
                                    <span>Mission</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#vijsion">
                                    <i class="fa fa-eye-slash"></i>
                                    <span>Vision</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="history" class="tab-pane fade in active">
                                <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and
                                    praising pain was born and I will give you a complete account of the system, and
                                    expound the actual teachings of the great explorer of the truth, the master-builder
                                    of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it
                                    is pleasure, but because those who do not know how to pursue pleasure rationally ."
                                </p>
                            </div>
                            <div id="mission" class="tab-pane fade">
                                <p>"On the other hand, we denounce with righteous indignation and dislike men who are so
                                    beguiled and demoralized by the charms of pleasure of the moment, so blinded by
                                    desire, that they cannot foresee the pain and trouble that are bound to ensue; and
                                    equal blame belongs to those who fail in their duty through weakness of will, which
                                    is the same as saying through shrinking from toil and pain. "</p>
                            </div>
                            <div id="vijsion" class="tab-pane fade">
                                <p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti the atque corrupti quos dolores et quas molestias
                                    excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                                    officia deserunt mollitia animi, id est laborum et dolorum fuga.But in certain
                                    circumstances and owing to the claims of duty or the obligations of business it will
                                    frequently occur that pleasures."</p>
                            </div>
                        </div>
                        <div class="president-info">
                            <div class="position">
                                <h4>Meachel N.Jonshon <span>Club President</span></h4>
                            </div>
                            <div class="signature">
                                <img src="{{asset('images/sign.png')}}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--RS History Section End Here-->

    <!--Champion Section End Here-->
    <div class="champion-section-page sec-spacer">
        <div class="container">
            <h3 class="title-bg">champion awards</h3>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true"
                data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false"
                data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false"
                data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false"
                data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false"
                data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false"
                data-md-device-dots="false">
                <div class="champion-list">
                    <img src="{{asset('images/awards/1.png')}}" alt="" />
                    <div class="awards-content">
                        <h4 class="awards-title">Club 2017 champion</h4>
                    </div>
                </div>
                <div class="champion-list">
                    <img src="{{asset('images/awards/2.png')}}" alt="" />
                    <div class="awards-content">
                        <h4 class="awards-title">Club 2017 champion</h4>
                    </div>
                </div>
                <div class="champion-list">
                    <img src="{{asset('images/awards/3.png')}}" alt="" />
                    <div class="awards-content">
                        <h4 class="awards-title">Club 2017 champion</h4>
                    </div>
                </div>
                <div class="champion-list">
                    <img src="{{asset('images/awards/4.png')}}" alt="" />
                    <div class="awards-content">
                        <h4 class="awards-title">Club 2017 champion</h4>
                    </div>
                </div>
                <div class="champion-list">
                    <img src="{{asset('images/awards/3.png')}}" alt="" />
                    <div class="awards-content">
                        <h4 class="awards-title">Club 2017 champion</h4>
                    </div>
                </div>
                <div class="champion-list">
                    <img src="{{asset('images/awards/4.png')}}" alt="" />
                    <div class="awards-content">
                        <h4 class="awards-title">Club 2017 champion</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Champion Section End Here-->

    <!--Testimonils Section Start Here-->
    <div class="testimonil-section-page sec-spacer">
        <div class="overly-bg"></div>
        <div class="container">
            <h3 class="title-bg">Our Testimonils</h3>
            <div class="row">
                <div class="col-sm-12">
                    <div class="tesitmonial-inner">
                        <div class="single-testimonil text-center">
                            <div class="author-info">
                                <img src="{{asset('images/testimonial/1.jpg')}}" alt="Author" />
                                <h4>IstiaK Ahamed <span>Club President</span></h4>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so
                                    beguiled and demoralized by the charms of pleasure of the moment, so blinded by
                                    desire, that they cannot foresee the pain </p>
                            </div>
                        </div>
                        <div class="single-testimonil text-center">
                            <div class="author-info">
                                <img src="{{asset('images/testimonial/2.jpg')}}" alt="Author" />
                                <h4>Abdur Rashid <span>Club President</span></h4>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so
                                    beguiled and demoralized by the charms of pleasure of the moment, so blinded by
                                    desire, that they cannot foresee the pain </p>
                            </div>
                        </div>
                        <div class="single-testimonil text-center">
                            <div class="author-info">
                                <img src="{{asset('images/testimonial/3.jpg')}}" alt="Author" />
                                <h4>Mahabub Alam <span>Club President</span></h4>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so
                                    beguiled and demoralized by the charms of pleasure of the moment, so blinded by
                                    desire, that they cannot foresee the pain </p>
                            </div>
                        </div>
                        <div class="single-testimonil text-center">
                            <div class="author-info">
                                <img src="{{asset('images/testimonial/4.jpg')}}" alt="Author" />
                                <h4>Riaz Ahmed <span>Club President</span></h4>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so
                                    beguiled and demoralized by the charms of pleasure of the moment, so blinded by
                                    desire, that they cannot foresee the pain </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Testimonils Section End Here-->

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
    <!-- main js -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
