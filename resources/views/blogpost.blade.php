<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog Single | Soccer</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <!-- Place favicon.ico in the root directory -->
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
    <!-- Slick css -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <!-- Slick Theme css -->
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
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
        <img src="{{ asset('images/breadcrumbs/blog-left.jpg') }}" alt="Breadcrubs-image" />
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">News Single</h1>
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

    <!-- Blog Single Start Here -->
    <div class="single-blog-details sec-spacer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="single-image">
                        <div class="blog-image-place"
                            style="background:url({{ asset('app_images/' . $blogpost->image) }})"></div>
                    </div>
                    <h3>{!! $blogpost->title !!}</h3>
                    <p>
                        {!! $blogpost->description !!}
                    </p>
                    <div class="share-section">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12 life-style">
                                <span class="date">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    {{ \Carbon\Carbon::parse($blogpost->created_at)->format('d/m/Y') }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="share-section2">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <span> You Can Share It : </span>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <ul class="share-link">
                                    <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <!-- Blog Single Sidebar Start Here -->
                    <div class="sidebar-area">
                        <div class="recent-post-area">
                            <span class="title"> Recent Post</span>
                            <ul class="news-post">

                                @foreach ($blogposts as $blogpost)
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                                <div class="item-post">
                                                    <div class="row">
                                                        <div
                                                            class="col-lg-12 col-md-12 col-sm-4 col-xs-4 paddimg-right-none">
                                                            <div class="blog-image-place"
                                                                style="background:url({{ asset('app_images/' . $blogpost->image) }})">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                                            <h4><a
                                                                    href="{{ route('blogpost', ['id' => $blogpost->id, 'locale' => Config::get('app.locale')]) }}">{{ \Illuminate\Support\Str::limit($blogpost->title, 20, $end = '...') }}</a>
                                                            </h4>
                                                            <span class="date"><i class="fa fa-calendar"
                                                                    aria-hidden="true"></i>{{ \Carbon\Carbon::parse($blogpost->created_at)->format('d/m/Y') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Single End Here -->

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


{{-- https://www.nicesnippets.com/blog/how-to-use-wysihtml5-editor-in-laravel --}}
