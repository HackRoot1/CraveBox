<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.imjol.com/khadyo/khadyo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Oct 2024 18:00:11 GMT -->

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Page Title -->
    <title>Khadyo - HTML 5 Template</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="favicon.png" />
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/jquery-ui.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <!-- header -->
    <header>
        <!-- header-top -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div
                        class="
                col-lg-12 col-md-12 col-12
                d-flex
                flex-wrap
                justify-content-between
              ">
                        <div class="contact-box">
                            <span>
                                <a href="#"><i class="fas fa-phone-square-alt"></i> 123-58794069</a>
                            </span>
                            <span>
                                <a href="#"><i class="fas fa-envelope-open-text"></i>
                                    supportfoodkhan@.com</a></span>
                        </div>
                        <div class="social-box">
                            <span><a href="#"><i class="fab fa-twitter"></i></a></span>
                            <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                            <span><a href="#"><i class="fab fa-linkedin-in"></i></a></span>
                            <span><a href="#"><i class="fab fa-instagram"></i></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-bottom -->
        <div class="header-bottom margin-top-20">
            <div class="container position-relative">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/images/logo/logo.png" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <nav id="mobile-menu">
                            <ul class="main-menu">
                                <li>
                                    <a href="{{ route('home') }}">home</a>
                                </li>
                                <li><a href="about.html">about us</a></li>
                                <li><a href="{{ route('food.page') }}">menu</a></li>
                                <li>
                                    <a href="#">blog</a>
                                </li>
                                <li>
                                    <a href="#">pages <span><i class="fas fa-angle-down"></i></span></a>
                                    <ul class="submenu">
                                        <li><a href="{{ route('checkout') }}">checkout page</a></li>
                                        <li><a href="{{ route('food.page') }}">food page</a></li>
                                        <li><a href="{{ route('single.food') }}">single food page</a></li>
                                        <li><a href="#">gallery page</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">contact us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-4 col-md-9 col-8">
                        <div class="customer-area">
                            {{-- @if(Auth::guest())
                            <span>
                                <a href="{{ route('wishlist') }}"><i class="fas fa-heart"></i></a>
                            </span>
                            <span>
                                <a href="{{ route('profile') }}"><i class="fas fa-user"></i></a>
                            </span>
                            <span>
                                <a href="{{ route('shopping.cart') }}"><i class="fas fa-shopping-basket"></i></a>
                            </span>
                            @else
                            <a href="{{ route('login') }}" class="btn">login</a>
                            @endif --}}

                            @if(Auth::check())    
                                <span>
                                    <a href="{{ route('wishlist') }}"><i class="fas fa-heart"></i></a>
                                </span>
                                <span>
                                    <a href="{{ route('profile') }}"><i class="fas fa-user"></i></a>
                                </span>
                                <span>
                                    <a href="{{ route('shopping.cart') }}"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            @else
                                <a href="{{ route('login') }}" class="btn">login</a>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- mobile-menu -->
                <div class="mobile-menu"></div>
            </div>
        </div>
    </header>



    @yield('main-content')

    <!-- footer area-->
    <footer class="padding-top-40 padding-bottom-40">
        <div class="fo-shapes">
            <span class="fs-1"><img src="assets/images/gallery/26.png" alt="" /></span>
            <span class="fs-2 item-bounce"><img src="assets/images/shapes/25.png" alt="" /></span>
            <span class="fs-3 item-bounce"><img src="assets/images/shapes/26.png" alt="" /></span>
            <span class="fs-4 item-bounce"><img src="assets/images/shapes/27.png" alt="" /></span>
            <span class="fs-5 item-animateTwo"><img src="assets/images/shapes/3.png" alt="" /></span>
            <span class="fs-6"><img src="assets/images/shapes/22.png" alt="" /></span>
            <span class="fs-7"><img src="assets/images/shapes/30.png" alt="" /></span>
        </div>
        <div class="footer-top d-none d-md-block">
            <div class="container">
                <div
                    class="
              row
              align-items-center
              justify-content-between
              padding-bottom-25
            ">
                    <div class="col-lg-3 col-md-3">
                        <div class="f-logo">
                            <a href="index.html">
                                <img src="assets/images/logo/logo.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="f-title">
                            <h4>Feel Hunger! Order Your<span> Like Food.</span></h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <a href="shopping-cart.html" class="btn">order now</a>
                    </div>
                </div>
                <hr />
            </div>
        </div>
        <div class="footer-bottom padding-top-22 padding-bottom-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 margin-bottom-20">
                        <div class="widget">
                            <h6>address</h6>
                            <p>570 8th Ave,New York, NY 10018 United States</p>
                            <a href="#" class="f-link">view google map</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 margin-bottom-20">
                        <div class="widget">
                            <h6>book a table</h6>
                            <p>Dogfood och Sliders foodtruck. Under Om oss kan ni läsa</p>
                            <a href="#" class="f-link">make a call</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 margin-bottom-20">
                        <div class="widget">
                            <h6>opening hours</h6>
                            <p>
                                <span>monday-friday: 8am - 4pm</span> <br /><span>saturday: 9am - 5pm</span>
                            </p>

                            <a href="#" class="f-link">make a call</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 margin-bottom-20">
                        <div class="widget">
                            <h6>newsletter</h6>
                            <div class="newsletter d-flex">
                                <form action="#">
                                    <input type="email" placeholder="enter your email" />
                                    <button type="submit">
                                        <i class="fas fa-paper-plane"></i>
                                    </button>
                                </form>
                            </div>
                            <a href="#" class="f-link">subscribe now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area text-center">
            <p>Copyright © 2021 <a href="index.html">Khadyo</a></p>
        </div>
    </footer>

    <!-- ToTop Button -->
    <button class="scrollup"><i class="fas fa-angle-up"></i></button>

    <!-- Javascript Files -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery.meanmenu.min.js"></script>
    <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/counterup.min.js"></script>
    <script src="assets/js/vendor/countdown.js"></script>
    <script src="assets/js/vendor/waypoints.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.js"></script>
    <script src="assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="assets/js/vendor/easing.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from html.imjol.com/khadyo/khadyo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Oct 2024 18:00:49 GMT -->

</html>
