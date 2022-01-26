<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Soccer | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
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
    <!-- Flexslider css -->
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
    <!-- Slick css -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
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

    <!--Header top area start here-->
    @include('layout.header')
    <!--Header top area End here-->

    <div class="fullwidth-section4">
        <!--Header middle area Start here-->
        @include('layout.main-navigation')
        <!--Header Middle area End here-->

        <!--  Slider Section Start Here -->
        <div class="slider-sections-area3">
            <div id="slider-images" class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="{{ asset('images/full-slider/5.jpg') }}" alt="" />
                        <div class="single-slide text-center">
                            <div class="container">
                                <div class="dsc">
                                    <h1>
                                        <span class="heading1">Badda stay third</span><br>
                                        <span class="heading2">in hislop's power rankings</span>
                                    </h1>
                                </div>
                                <div class="button">
                                    <a href="#" class="white-btn">Read More</a>
                                    <a href="#" class="primary-btn">book a ticket</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('images/full-slider/6.jpg') }}" alt="" />
                        <div class="single-slide text-center">
                            <div class="container">
                                <div class="dsc">
                                    <h1>
                                        <span class="heading1">Bramma are the reigning</span><br>
                                        <span class="heading2">spanish and european</span>
                                    </h1>
                                </div>
                                <div class="button">
                                    <a href="#" class="white-btn">Read More</a>
                                    <a href="#" class="primary-btn">book a ticket</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('images/full-slider/7.jpg') }}" alt="" />
                        <div class="single-slide text-center">
                            <div class="container">
                                <div class="dsc">
                                    <h1>
                                        <span class="heading1">Mirpur stay third</span>
                                        <span class="heading2">in hislop's power rankings</span>
                                    </h1>
                                </div>
                                <div class="button">
                                    <a href="#" class="white-btn">Read More</a>
                                    <a href="#" class="primary-btn">book a ticket</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="slider-carousel" class="flexslider">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="slides">
                                <li>
                                    <img src="{{ asset('images/full-slider/small1.jpg') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('images/full-slider/small2.jpg') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('images/full-slider/small3.jpg') }}" alt="" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Slider Section End Here -->
    </div>
    <!-- Upcoming Match Section end Here-->

    <!-- Our Team Start Here-->
    <div class="our-team-section pt-150 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-bg">Our clubs</h3>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
                        data-autoplay="true" data-autoplay-timeout="7000" data-smart-speed="2000" data-dots="false"
                        data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false"
                        data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false"
                        data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false"
                        data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false"
                        data-md-device-dots="false">
                        <div class="our-team">
                            <img src="{{ asset('images/team/2.jpg') }}" alt="" />
                            <div class="person-details">
                                <div class="overly-bg"></div>
                                <a href="team-single.html">
                                    <h5 class="person-name">Eyamin Hossain</h5>
                                </a>
                                <table class="person-info">
                                    <tbody>
                                        <tr>
                                            <td>Born</td>
                                            <td>sep 31, 1988</td>
                                        </tr>
                                        <tr>
                                            <td>Position</td>
                                            <td>Forward</td>
                                        </tr>
                                        <tr>
                                            <td>Squad number</td>
                                            <td>11</td>
                                        </tr>
                                        <tr>
                                            <td>Previous Club</td>
                                            <td>Badda</td>
                                        </tr>
                                        <tr>
                                            <td>Fallow us on</td>
                                            <td>
                                                <ul class="person-social-icons">
                                                    <li><a href="#" class="active"><i
                                                                class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"
                                                                aria-hidden="true"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="our-team">
                            <img src="{{ asset('images/team/3.jpg') }}" alt="" />
                            <div class="person-details">
                                <div class="overly-bg"></div>
                                <a href="team-single.html">
                                    <h5 class="person-name">Istiak Ahmed</h5>
                                </a>
                                <table class="person-info">
                                    <tbody>
                                        <tr>
                                            <td>Born</td>
                                            <td>sep 31, 1988</td>
                                        </tr>
                                        <tr>
                                            <td>Position</td>
                                            <td>Goalkeeper</td>
                                        </tr>
                                        <tr>
                                            <td>Squad number</td>
                                            <td>11</td>
                                        </tr>
                                        <tr>
                                            <td>Previous Club</td>
                                            <td>Badda</td>
                                        </tr>
                                        <tr>
                                            <td>Fallow us on</td>
                                            <td>
                                                <ul class="person-social-icons">
                                                    <li><a href="#" class="active"><i
                                                                class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"
                                                                aria-hidden="true"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="our-team">
                            <img src="{{ asset('images/team/1.jpg') }}" alt="" />
                            <div class="person-details">
                                <div class="overly-bg"></div>
                                <a href="team-single.html">
                                    <h5 class="person-name">Masud Rana</h5>
                                </a>
                                <table class="person-info">
                                    <tbody>
                                        <tr>
                                            <td>Born</td>
                                            <td>July 21, 1994</td>
                                        </tr>
                                        <tr>
                                            <td>Position</td>
                                            <td>striker</td>
                                        </tr>
                                        <tr>
                                            <td>Squad number</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>Previous Club</td>
                                            <td>Badda</td>
                                        </tr>
                                        <tr>
                                            <td>Fallow us on</td>
                                            <td>
                                                <ul class="person-social-icons">
                                                    <li><a href="#" class="active"><i
                                                                class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"
                                                                aria-hidden="true"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Team end Here-->

    <!-- Video Sections Start Here-->
    <div class="video-section-area sec-spacer">
        <div class="overly-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="video-inner text-center">
                        <div class="videos-icon">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=t17O6JoU2Ew">
                                <i class="fa fa-play" aria-hidden="true"></i>
                            </a>
                        </div>
                        <h2>We develop student-athletes who are committed to personal excellence and team success </h2>
                        <div class="overly-border"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Sections end Here-->


    <!-- All news area Start Here-->
    <div class="all-news-area sec-spacer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-bg">Latest News</h3>
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="latest-news-slider">
                                @foreach ($blogposts as $blogpost)
                                    <div>
                                        <div class="news-normal-block">
                                            <div class="news-img">
                                                <a
                                                    href="{{ route('blogpost', ['id' => $blogpost->id, 'locale' => Config::get('app.locale')]) }}">
                                                    <div class="blog-image-place"
                                                        style="background:url({{ asset('app_images/' . $blogpost->image) }})">
                                                    </div>
                                                </a>
                                            </div>
                                            <h4 class="news-title"><a
                                                    href="{{ route('blogpost', ['id' => $blogpost->id, 'locale' => Config::get('app.locale')]) }}">{{ \Illuminate\Support\Str::limit($blogpost->title, 20, $end = '...') }}</a>
                                            </h4>
                                            <div class="news-desc">
                                                <p>
                                                    {{ \Illuminate\Support\Str::limit($blogpost->short_description, 45, $end = '...') }}
                                                </p>
                                            </div>
                                            <div class="news-btn">
                                                <a class="primary-btn"
                                                    href="{{ route('blogpost', ['id' => $blogpost->id, 'locale' => Config::get('app.locale')]) }}">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="latest-news-nav">
                                @foreach ($blogposts as $blogpost)
                                    <div>
                                        <div class="blog-image-place"
                                            style="background:url({{ asset('app_images/' . $blogpost->image) }})">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                </div>
            </div>
        </div>
    </div>
    <!-- All news area end Here-->

    <!-- Champion Awards Start Here-->
    <div class="gallery-section2 sec-spacer">
        <div class="overly-bg"></div>
        <div class="gallery-section-area">
            <div class="container">
                <h3 class="title-bg">match gallery</h3>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="single-gallery">
                            <img src="{{ asset('images/gallery2/1.jpg') }}" alt="">
                            <div class="heading-conent">
                                <ul class="media-icons">
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="image-popup" href="images/gallery2/1.jpg')}}"><i
                                                class="fa fa-power-off"></i></a></li>
                                </ul>
                                <h4>Photo Title Here</h4>
                                <div class="bottom-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="single-gallery">
                            <img src="{{ asset('images/gallery2/2.jpg') }}" alt="">
                            <div class="heading-conent">
                                <ul class="media-icons">
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="image-popup" href="images/gallery2/2.jpg')}}"><i
                                                class="fa fa-power-off"></i></a></li>
                                </ul>
                                <h4>Photo Title Here</h4>
                                <div class="bottom-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="single-gallery">
                            <img src="{{ asset('images/gallery2/3.jpg') }}" alt="">
                            <div class="heading-conent">
                                <ul class="media-icons">
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="image-popup" href="images/gallery2/3.jpg')}}"><i
                                                class="fa fa-power-off"></i></a></li>
                                </ul>
                                <h4>Photo Title Here</h4>
                                <div class="bottom-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="single-gallery">
                            <img src="{{ asset('images/gallery2/4.jpg') }}" alt="">
                            <div class="heading-conent">
                                <ul class="media-icons">
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="image-popup" href="images/gallery2/4.jpg')}}"><i
                                                class="fa fa-power-off"></i></a></li>
                                </ul>
                                <h4>Photo Title Here</h4>
                                <div class="bottom-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="single-gallery">
                            <img src="{{ asset('images/gallery2/5.jpg') }}" alt="">
                            <div class="heading-conent">
                                <ul class="media-icons">
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="image-popup" href="images/gallery2/5.jpg')}}"><i
                                                class="fa fa-power-off"></i></a></li>
                                </ul>
                                <h4>Photo Title Here</h4>
                                <div class="bottom-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="single-gallery">
                            <img src="{{ asset('images/gallery2/6.jpg') }}" alt="">
                            <div class="heading-conent">
                                <ul class="media-icons">
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="image-popup" href="images/gallery2/6.jpg')}}"><i
                                                class="fa fa-power-off"></i></a></li>
                                </ul>
                                <h4>Photo Title Here</h4>
                                <div class="bottom-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="single-gallery">
                            <img src="{{ asset('images/gallery2/7.jpg') }}" alt="">
                            <div class="heading-conent">
                                <ul class="media-icons">
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="image-popup" href="images/gallery2/7.jpg')}}"><i
                                                class="fa fa-power-off"></i></a></li>
                                </ul>
                                <h4>Photo Title Here</h4>
                                <div class="bottom-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="single-gallery">
                            <img src="{{ asset('images/gallery2/8.jpg') }}" alt="">
                            <div class="heading-conent">
                                <ul class="media-icons">
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="image-popup" href="images/gallery2/8.jpg')}}"><i
                                                class="fa fa-power-off"></i></a></li>
                                </ul>
                                <h4>Photo Title Here</h4>
                                <div class="bottom-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Champion Awards end Here-->

    <div class="testimonial-section pt-100 pb-100">
        <div class="container">
            <h3 class="title-bg">Testimonials</h3>
            <div class="row">
                <div class="col-md-12">
                    <div id="testimonial-slider" class="rs-carousel owl-carousel" data-loop="true" data-items="1"
                        data-margin="0" data-autoplay="true" data-autoplay-timeout="6000" data-smart-speed="2000"
                        data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1"
                        data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1"
                        data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1"
                        data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1"
                        data-md-device-nav="false" data-md-device-dots="false">
                        <div class="testimonial">
                            <div class="testimonial-profile">
                                <a href="#"><img src="{{ asset('images/testimonial/tom.jpg') }}" alt="tom"></a>
                            </div>
                            <div class="testimonial-content">
                                <h3 class="testimonial-title">Tom Williamson</h3>
                                <span class="testimonial-post">Office Manager</span>
                                <div class="client-rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                        aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                                        class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o"
                                        aria-hidden="true"></i>
                                </div>
                                <p class="testimonial-description">
                                    Praesent condimentum augue lorem, id commodo ex aliquet vel. Donec mi quam, mattis
                                    in dolor non, volutpat placerat ipsum. Donec varius ex non nulla hendrerit, a
                                    posuere lectus semper
                                </p>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-profile">
                                <a href="#"><img src="{{ asset('images/testimonial/peter.jpg') }}" alt=""></a>
                            </div>
                            <div class="testimonial-content">
                                <h3 class="testimonial-title">William Peter</h3>
                                <span class="testimonial-post">CEO Founder </span>
                                <div class="client-rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                        aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                                        class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o"
                                        aria-hidden="true"></i>
                                </div>
                                <p class="testimonial-description">
                                    Etiam et dolor venenatis, suscipit ex a, interdum augue. Maecenas in lectus sapien.
                                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                    himenaeos.
                                </p>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-profile">
                                <a href="#"><img src="{{ asset('images/testimonial/lan.jpg') }}" alt="Ian"></a>
                            </div>
                            <div class="testimonial-content">
                                <h3 class="testimonial-title">Ian Kristian</h3>
                                <span class="testimonial-post">Office Manager</span>
                                <div class="client-rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                        aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                                        class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o"
                                        aria-hidden="true"></i>
                                </div>
                                <p class="testimonial-description">
                                    Sed condimentum viverra tellus, at cursus massa. Praesent tristique gravida elit, in
                                    fermentum ligula varius id. Vivamus commodo malesuada elit. Cras non iaculis enim.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonials Sections End Here-->

    <!-- Client Logo Section Start Here-->
    <div class="clicent-logo-section sec-spacer pt-100 pb-100">
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
                        <a href="#"><img src="{{ asset('images/logo/1.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="item">
                    <div class="single-logo">
                        <a href="#"><img src="{{ asset('images/logo/2.png') }}" alt=""></a>
                    </div>
                </div>

                <div class="item">
                    <div class="single-logo">
                        <a href="#"><img src="{{ asset('images/logo/3.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="item">
                    <div class="single-logo">
                        <a href="#"><img src="{{ asset('images/logo/4.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Client Logo Section End Here-->

    <!-- Footer Start -->
    @include('layout.footer')
    <!-- Footer End -->

    <!-- Search Modal Start -->
    @include('layout.search')
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
    <!-- Flexslider js -->
    <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
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
