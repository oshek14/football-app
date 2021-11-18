<div class="header-top-area drak-bg4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="header-top-left">
                    <ul>
                        <li><a href="mailto:support@rstheme.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                support@rstheme.com</a></li>
                        <li>
                            @if((Config::get('app.locale') == 'ge' ))
                                <img src="{{asset('images/logo/flag.png')}}" alt="">
                                <a href="{{ route(Route::currentRouteName(), 'ge') }}">
                                    ქართული
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul>
                                    <li>
                                        <img src="{{asset('images/logo/flag2.png')}}" alt="Logo">
                                        <a href="{{ route(Route::currentRouteName(), 'en') }}">
                                            English
                                        </a>
                                    </li>
                                </ul>
                            @else
                                <img src="{{asset('images/logo/flag2.png')}}" alt="">
                                <a href="{{ route(Route::currentRouteName(), 'en') }}">
                                    English
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul>
                                    <li>
                                        <img src="{{asset('images/logo/flag.png')}}" alt="Logo">
                                        <a href="{{ route(Route::currentRouteName(), 'ge') }}">
                                            ქართული
                                        </a>
                                    </li>
                                </ul>
                            @endif

                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="social-media-area">
                    <nav>
                        <ul>
                            <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
