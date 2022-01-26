<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Soccer | Real Banani</title>
    <meta name="description" content="">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1">
    <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">
    <!-- Place favicon.ico in tde root directory -->
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
        <img src="{{asset('images/breadcrumbs/chelsea.jpg')}}" alt="Breadcrubs" />
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">Banani FC</h1>
                        <ul>
                            <li>
                                <a class="active" href="index.html">Home</a>
                            </li>
                            <li>Banani FC</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->


    <!-- Point Table Section Start -->
    <div class="champion-section-area sec-spacer">
        <div class="container">
            <div class="row pb-50">
                <div class="col-md-2 col-sm-3">
                    <div class="club-sidebar-top">
                        <div class="club-logo">
                            <img src="{{asset('images/upcoming/2.png')}}" alt="logo">
                            <div class="club-name">
                                <h2 class="title-bg">Banani FC</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-sm-9">
                    <div class="club-sidebar">
                        <div class="club-details">
                            <ul class="spsoccer-team-info-list spsoccer-ul-list">
                                <li>
                                    <strong>Former President</strong>
                                    <span>Arturo Vidal</span>
                                </li>
                                <li>
                                    <strong>Manager Name</strong>
                                    <span>Mahabub Alam</span>
                                </li>
                                <li>
                                    <strong>Past Coach </strong>
                                    <span>Abdur Roshid</span>
                                </li>
                                <li>
                                    <strong>Current Coach </strong>
                                    <span>Masud Rana</span>
                                </li>
                                <li>
                                    <strong>Location</strong>
                                    <span>spain</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="rs-count">

                            <!-- COUNTER-LIST START -->
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="rs-counter-list">
                                    <h2 class="rs-counter percent">950</h2>
                                    <h3>Established in</h3>
                                </div>
                            </div>
                            <!-- COUNTER-LIST END -->

                            <!-- COUNTER-LIST START -->
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="rs-counter-list">
                                    <h2 class="rs-counter percent">1840</h2>
                                    <h3>Champions</h3>
                                </div>
                            </div>
                            <!-- COUNTER-LIST END -->

                            <!-- COUNTER-LIST START -->
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="rs-counter-list">
                                    <h2 class="rs-counter">350</h2>
                                    <h3>Current Players</h3>
                                </div>
                            </div>
                            <!-- COUNTER-LIST END -->

                            <!-- COUNTER-LIST START -->
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="rs-counter-list">
                                    <h2 class="rs-counter">400</h2>
                                    <h3>Top Players</h3>
                                </div>
                            </div>
                            <!-- COUNTER-LIST END -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="title-bg">Club History</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                        their default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                        their infancy.</p>
                    <ul class="point-menu">
                        <li class="active"><a data-toggle="tab" href="#squad-list">Players</a></li>
                        {{-- <li><a data-toggle="tab" href="#champion">Champion</a></li> --}}
                        <li><a data-toggle="tab" href="#gallery">Gallery</a></li>
                        {{-- <li><a data-toggle="tab" href="#jersy">Jersy</a></li> --}}
                    </ul>
                    <div class="tab-content">
                        <div id="squad-list" class="tab-pane fade in active">
                            <!--Squad Style Start -->
                            <div class="squad-list">
                                <div class="list-item">
                                    <div class="image">
                                        <h2>Image</h2>
                                    </div>
                                    <div class="list-text">
                                        <div class="name">
                                            <h2>Name</h2>
                                        </div>
                                        <div class="designation">
                                            <h2>Designation</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="image">
                                        <img src="{{asset('images/team/5.jpg')}}" alt="">
                                    </div>
                                    <div class="list-text">
                                        <div class="name">
                                            <h4> <a href="team-single.html">Peter Thugs<i
                                                        class="fa fa-external-link-square"></i></a></h4>
                                        </div>
                                        <div class="designation">
                                            Goal Kepper
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="image">
                                        <img src="{{asset('images/team/6.jpg')}}" alt="">
                                    </div>
                                    <div class="list-text">
                                        <div class="name">
                                            <h4> <a href="team-single.html">Chris Morshal<i
                                                        class="fa fa-external-link-square"></i></a></h4>
                                        </div>
                                        <div class="designation">
                                            Midfilder
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="image">
                                        <img src="{{asset('images/team/7.jpg')}}" alt="">
                                    </div>
                                    <div class="list-text">
                                        <div class="name">
                                            <h4> <a href="team-single.html">John Sharp<i
                                                        class="fa fa-external-link-square"></i></a></h4>
                                        </div>
                                        <div class="designation">
                                            Goal Kepper
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="image">
                                        <img src="{{asset('images/team/8.jpg')}}" alt="">
                                    </div>
                                    <div class="list-text">
                                        <div class="name">
                                            <h4> <a href="team-single.html">Mike Flame<i
                                                        class="fa fa-external-link-square"></i></a></h4>
                                        </div>
                                        <div class="designation">
                                            Midfilder
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Squad Style End -->
                        </div>
                        {{-- <div id="champion" class="tab-pane fade">
                            <div class="row">
                                <div class="champion-inner">
                                    <div class="col-sm-2 col-xs-3">
                                        <div class="champion-logo">
                                            <img src="{{asset('images/logo/rm-best.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-xs-9">
                                        <div class="champion-details">
                                            <div class="champion-year">
                                                1
                                            </div>
                                            <div class="year-details">
                                                <h3>THE BEST CLUB OF THE 20TH CENTURY FIFA TROPHY</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="champion-inner">
                                    <div class="col-sm-2 col-xs-3">
                                        <div class="champion-logo">
                                            <img src="{{asset('images/logo/rm-eru.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-xs-9">
                                        <div class="champion-details">
                                            <div class="champion-year">
                                                12
                                            </div>
                                            <div class="year-details">
                                                <h3>EUROPEAN CUPS</h3>
                                                <span>1955-56 1956-57 1957-58 1958-59 1959-60 1965-66 1997-98 1999-00
                                                    2001-02 2013-14 2015-16 2016-17</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="champion-inner">
                                    <div class="col-sm-2 col-xs-3">
                                        <div class="champion-logo">
                                            <img src="{{asset('images/logo/rm-fifa.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-xs-9">
                                        <div class="champion-details">
                                            <div class="champion-year">
                                                6
                                            </div>
                                            <div class="year-details">
                                                <h3>FIFA CLUB WORLD CUPS</h3>
                                                <span>1960 1998 2002 2014 2016 2017</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="champion-inner">
                                    <div class="col-sm-2 col-xs-3">
                                        <div class="champion-logo">
                                            <img src="{{asset('images/logo/rm-eru2.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-xs-9">
                                        <div class="champion-details">
                                            <div class="champion-year">
                                                6
                                            </div>
                                            <div class="year-details">
                                                <h3>EUROPEAN SUPER CUPS</h3>
                                                <span>2002 2014 2016 2017</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div id="gallery" class="tab-pane fade">
                            <div class="gallery-section-page2 gallery-section-area">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <div class="single-gallery">
                                            <img src="{{asset('images/gallery2/a.jpg')}}" alt="">
                                            <div class="popup-icon">
                                                <a class="image-popup" href="images/gallery2/a.jpg')}}"><i
                                                        class="fa fa-arrows-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <div class="single-gallery">
                                            <img src="{{asset('images/gallery2/b.jpg')}}" alt="">
                                            <div class="popup-icon">
                                                <a class="image-popup" href="images/gallery2/b.jpg')}}"><i
                                                        class="fa fa-arrows-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <div class="single-gallery">
                                            <img src="{{asset('images/gallery2/c.jpg')}}" alt="">
                                            <div class="popup-icon">
                                                <a class="image-popup" href="images/gallery2/c.jpg')}}"><i
                                                        class="fa fa-arrows-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <div class="single-gallery">
                                            <img src="{{asset('images/gallery2/d.jpg')}}" alt="">
                                            <div class="popup-icon">
                                                <a class="image-popup" href="images/gallery2/d.jpg')}}"><i
                                                        class="fa fa-arrows-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <div class="single-gallery">
                                            <img src="{{asset('images/gallery2/e.jpg')}}" alt="">
                                            <div class="popup-icon">
                                                <a class="image-popup" href="images/gallery2/e.jpg')}}"><i
                                                        class="fa fa-arrows-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <div class="single-gallery">
                                            <img src="{{asset('images/gallery2/f.jpg')}}" alt="">
                                            <div class="popup-icon">
                                                <a class="image-popup" href="images/gallery2/f.jpg')}}"><i
                                                        class="fa fa-arrows-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <div class="single-gallery">
                                            <img src="{{asset('images/gallery2/g.jpg')}}" alt="">
                                            <div class="popup-icon">
                                                <a class="image-popup" href="images/gallery2/g.jpg')}}"><i
                                                        class="fa fa-arrows-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <div class="single-gallery">
                                            <img src="{{asset('images/gallery2/h.jpg')}}" alt="">
                                            <div class="popup-icon">
                                                <a class="image-popup" href="images/gallery2/h.jpg')}}"><i
                                                        class="fa fa-arrows-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div id="jersy" class="tab-pane fade">
                            <div class="row">
                                <div class="champion-inner">
                                    <div class="col-sm-2 col-xs-3">
                                        <div class="champion-logo">
                                            <img src="{{asset('images/logo/rm-hkit.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-xs-9">
                                        <div class="champion-details">
                                            <div class="year-details">
                                                <h3>Home Kit(2017-18)</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="champion-inner">
                                    <div class="col-sm-2 col-xs-3">
                                        <div class="champion-logo">
                                            <img src="{{asset('images/logo/rm-akit.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-xs-9">
                                        <div class="champion-details">
                                            <div class="year-details">
                                                <h3>Away Kit(2017-18)</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Point Table Section End -->


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
