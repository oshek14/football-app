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
                            <!-- Drop Down -->
                            <li class="menu-item-has-children">
                                <a href="#">Club List</a>
                                <ul class="sub-menu">
                                    <li><a href="badda.html">Badda FC</a></li>
                                    <li><a href="banani.html">Banani FC</a></li>
                                    <li><a href="trisali.html">Trishal FC</a></li>
                                    <li><a href="dhoar.html">Dhoar FC</a></li>
                                    <li><a href="mirpur.html">Mirpur FC</a></li>
                                    <li><a href="Joypur.html">Joypur FC</a></li>
                                </ul>
                            </li>
                            <!-- Drop Down -->
                            <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="point-table.html">Point Table</a></li>
                                    <li><a href="world-cup.html">World Cup</a></li>
                                    <li class="menu-item-has-children"><a href="#">Team</a>
                                        <ul class="sub-menu">
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="team-single.html">Team Single</a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#">Gallery</a>
                                        <ul class="sub-menu">
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="gallery2.html">Gallery Two</a></li>
                                            <li><a href="gallery3.html">Gallery Three</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-single.html">Shop Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="error-404.html">Error 404</a></li>
                                </ul>
                            </li>
                            <!--End Icons -->

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
                            <li>
                                <a href="{{ route('news', ['locale' => Config::get('app.locale')]) }}">News</a>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
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
                            <li><a href="about.html">About</a></li>
                            <!-- Drop Down -->
                            <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="point-table.html">Point Table</a></li>
                                    <li><a href="world-cup.html">World Cup</a></li>

                                    <li class="menu-item-has-children">
                                        <a href="gallery.html">Gallery</a>
                                        <ul class="sub-menu">
                                            <li> <a href="gallery2.html">Gallery Two</a></li>
                                            <li><a href="gallery3.html">Gallery Three</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="testimonial.html">Testimonials</a></li>
                                    <li><a href="reservation.html">Reservation</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="shop.html">Shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop-single.html">Shop Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="error-404.html">Error 404</a></li>
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
                            <li>
                                <a href="{{ route('news', ['locale' => Config::get('app.locale')]) }}">News</a>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
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
