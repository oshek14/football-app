<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog | Soccer</title>
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
        <img src="{{asset('images/breadcrumbs/blog.jpg')}}" alt="Breadcrubs" />
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">News</h1>
                        <ul>
                            <li>
                                <a class="active" href="index.html">Home</a>
                            </li>
                            <li>News</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Home Blog Start Here -->
    <div id="rs-blog" class="rs-blog sec-spacer">
        <div class="container">
            <div class="row">

                @foreach ($blogposts as $blogpost)
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="single-blog-slide">
                        <div class="images">
                            <a href="{{ route('blogpost', [ 'id' => $blogpost->id, 'locale' => Config::get('app.locale')]) }}"><img
                                    src="{{asset('images/blog/1.jpg')}}" alt="Blog Image"></a>
                        </div>
                        <div class="blog-details">
                            <span class="date"><i class="fa fa-calendar-check-o"></i> 11 Apr 2017</span>
                            <h3><a
                                    href="{{ route('blogpost', [ 'id' => $blogpost->id, 'locale' => Config::get('app.locale')]) }}">
                                    {{ $blogpost->title }}
                                </a>
                            </h3>
                            <p>
                                {{ $blogpost->short_description }}
                            </p>
                            <div class="read-more">
                                <a
                                    href="{{ route('blogpost', [ 'id' => $blogpost->id, 'locale' => Config::get('app.locale')]) }}">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-sm-12 news-pagination-numbers">
                    {{$blogposts->links("pagination::bootstrap-4")}}
                </div>
            </div>
        </div>
    </div>
    <!-- Home Blog End Here -->

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
