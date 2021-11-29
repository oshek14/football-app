<div class="header-middle-area4 menu-sticky">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 hidden-xs hidden-sm">
                <div class="row margin">
                    <nav class="rs-menu rs-menu-left">
                        <ul class="nav-menu">
                            <!-- Home -->
                            <li class="{{ Request::routeIs('index') ? 'current_page_item' : '' }}">
                                <a href="{{ route('index', ['locale' => Config::get('app.locale')]) }}">Home</a>
                            </li>
                            <!-- About Us -->
                            <li class="{{ Request::routeIs('about') ? 'current_page_item' : '' }}">
                                <a href="{{ route('about', ['locale' => Config::get('app.locale')]) }}">About Us</a>
                            </li>
                            <!-- Drop Down -->
                            <li class="menu-item-has-children"
                                class="{{ Request::routeIs('club') ? 'current_page_item' : '' }}">
                                <a href="#">Clubs</a>
                                <ul class="sub-menu">
                                    <li class="{{isset($id) &&  $id == 1 ? 'current_page_item' : '' }}"><a
                                            href="{{ route('club', [ 'id' => '1', 'locale' => Config::get('app.locale')]) }}">Club
                                            1</a></li>
                                    <li class="{{isset($id) &&  $id == 2 ? 'current_page_item' : '' }}"><a
                                            href="{{ route('club', [ 'id' => '2', 'locale' => Config::get('app.locale')]) }}">Club
                                            2</a></li>
                                    <li class="{{isset($id) &&  $id == 3 ? 'current_page_item' : '' }}"><a
                                            href="{{ route('club', [ 'id' => '3', 'locale' => Config::get('app.locale')]) }}">Club
                                            3</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children"><a href="#">Result</a>
                                <ul class="sub-menu">
                                    <li><a href="result.html">Result</a></li>
                                    <li><a href="result-single.html">Result Single</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-2 col-sm-12">
                <div class="logo text-center">
                    <a href="{{ route('index', ['locale' => Config::get('app.locale')]) }}"><img
                            src="{{asset('images/logo.png')}}" alt="logo"></a>
                </div>
            </div>

            <div class="col-md-5 col-sm-12 hidden-xs hidden-sm">
                <div class="row margin">
                    <nav class="rs-menu rs-menu-right">
                        <ul class="nav-menu">
                            <li><a href="match-fixtures.html">Fixtures & Tickets</a></li>
                            <li class="{{ Request::routeIs('news') ? 'current_page_item' : '' }}">
                                <a href="{{ route('news', ['locale' => Config::get('app.locale')]) }}">News</a>
                            </li>
                            <li class="{{ Request::routeIs('contact') ? 'current_page_item' : '' }}">
                                <a href="{{ route('contact', ['locale' => Config::get('app.locale')]) }}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <!--Header Search Start  here-->
                    <div class="search">
                        <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i
                                class="fa fa-search"></i></a>
                    </div>
                    <!--Header Search End  here-->
                </div>
            </div>
            <!-- Mobile Menu -->
            <div class="col-sm-12 hidden-lg hidden-md mobile-menu">
                <div class="main-menu">
                    <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                    <nav class="rs-menu">
                        <ul class="nav-menu">
                            <!-- Home -->
                            <li class="{{ Request::routeIs('index') ? 'current_page_item' : '' }}">
                                <a href="{{ route('index', ['locale' => Config::get('app.locale')]) }}">Home</a>
                            </li>
                            <!-- End Home -->
                            <li class="{{ Request::routeIs('about') ? 'current_page_item' : '' }}">
                                <a href="{{ route('about', ['locale' => Config::get('app.locale')]) }}">About Us</a>
                            </li>
                            <!-- Drop Down -->
                            <li class="menu-item-has-children"
                                class="{{ Request::routeIs('club') ? 'current_page_item' : '' }}">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li class="{{ isset($id) && $id == 1 ? 'current_page_item' : '' }}"><a
                                            href="{{ route('club', [ 'id' => '1', 'locale' => Config::get('app.locale')]) }}">Club
                                            1</a></li>
                                    <li class="{{ isset($id) && $id == 2 ? 'current_page_item' : '' }}"><a
                                            href="{{ route('club', [ 'id' => '2', 'locale' => Config::get('app.locale')]) }}">Club
                                            2</a></li>
                                    <li class="{{ isset($id) && $id == 3 ? 'current_page_item' : '' }}"><a
                                            href="{{ route('club', [ 'id' => '3', 'locale' => Config::get('app.locale')]) }}">Club
                                            3</a></li>
                                </ul>
                            </li>
                            <!--End Icons -->
                            <li class="menu-item-has-children">
                                <a href="#">Team</a>
                                <ul class="sub-menu">
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="team-single.html">Team Single</a></li>
                                </ul>
                            </li>
                            <li><a href="match-fixtures.html">Fixtures & Tickets</a></li>
                            <li class="{{ Request::routeIs('news') ? 'current_page_item' : '' }}">
                                <a href="{{ route('news', ['locale' => Config::get('app.locale')]) }}">News</a>
                            </li>
                            <li class="{{ Request::routeIs('contact') ? 'current_page_item' : '' }}">
                                <a href="{{ route('contact', ['locale' => Config::get('app.locale')]) }}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <!--Header Search Start  here-->
                    <div class="search">
                        <a class="rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i
                                class="fa fa-search"></i></a>
                    </div>
                    <!--Header Search End  here-->
                </div>
            </div>
        </div>
    </div>
</div>
