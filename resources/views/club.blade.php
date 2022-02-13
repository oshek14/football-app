<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Soccer | Real Banani</title>
    <meta name="description" content="">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <!-- Place favicon.ico in tde root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/fav.png') }}">
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{ asset('css/rsmenu-main.css') }}">
    <!-- rsmenu transitions css -->
    <link rel="stylesheet" href="{{ asset('css/rsmenu-transitions.css') }}">
    <!-- hover-min css -->
    <link rel="stylesheet" href="{{ asset('css/hover-min.css') }}">
    <!-- magnific-popup css -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- modernizr js -->
    <script src="{{ asset('js/modernizr-2.8.3.min.js') }}"></script>
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
        <img src="{{ asset('images/breadcrumbs/chelsea.jpg') }}" alt="Breadcrubs" />
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">{{ $club->name }}</h1>
                        <ul>
                            <li>
                                <a class="active" href="index.html">Home</a>
                            </li>
                            <li>{{ $club->name }}</li>
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
                            @if ($club->logo)
                                <div class="image club-image-place"
                                    style="background:url({{ asset('app_images/' . $club->logo) }})">
                                </div>
                            @else
                                <div class="image club-image-place"
                                    style="background:url({{ asset('app_images/club-placeholder.png') }})">
                                </div>
                            @endif

                            <div class="club-name" style="text-align: center">
                                <h2 class="title-bg">{{ $club->name }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-sm-9">
                    <div class="row">
                        <div class="rs-count" style="padding: 15px">
                            <h3 class="title-bg">Club History</h3>
                            <p>{{ $club->description }}</p>
                        </div>
                    </div>
                    <div class="club-sidebar">
                        <div class="club-details">
                            <ul class="spsoccer-team-info-list spsoccer-ul-list" style="text-align: left">
                                <li>
                                    <strong>Manager</strong>
                                    <span>{{ $club->manager }}</span>
                                </li>
                                <li>
                                    <strong>Coach </strong>
                                    <span>{{ $club->coach }}</span>
                                </li>
                                <li>
                                    <strong>Location</strong>
                                    <span>{{ $club->location }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <ul class="point-menu">
                        <li class="active"><a data-toggle="tab" href="#squad-list">Players</a></li>
                        {{-- <li><a data-toggle="tab" href="#champion">Champion</a></li> --}}
                        {{-- <li><a data-toggle="tab" href="#gallery">Gallery</a></li> --}}
                        {{-- <li><a data-toggle="tab" href="#jersy">Jersy</a></li> --}}
                    </ul>
                    <div class="tab-content">
                        <div id="squad-list" class="tab-pane fade in active">
                            <!--Squad Style Start -->
                            <div class="squad-list">
                                @foreach ($club->players as $player)
                                    <div class="list-item">
                                        <div class="image player-image-container">
                                            @if ($player->image)
                                                <div class="image player-image-place"
                                                    style="background:url({{ asset('app_images/' . $player->image) }})">
                                                </div>
                                            @else
                                                <div class="image player-image-place"
                                                    style="background:url({{ asset('app_images/player-placeholder.png') }})">
                                                </div>
                                            @endif
                                        </div>
                                        <div class="list-text">
                                            <div class="name">
                                                <h4>{{ $player->name }}</h4>
                                            </div>
                                            <div class="designation">
                                                {!! $player->designation !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!--Squad Style End -->
                        </div>
                        {{-- <div id="gallery" class="tab-pane fade">
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
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Menu js -->
    <script src="{{ asset('js/rsmenu-main.js') }}"></script>
    <!-- jquery-ui js -->
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- meanmenu js -->
    <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- masonry js -->
    <script src="{{ asset('js/masonry.js') }}"></script>
    <!-- magnific-popup js -->
    <!-- owl.carousel js -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- magnific-popup js -->
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <!-- jquery.counterup js -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
