<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Signup - HTML 5 Template</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
                    <div class="col-lg-12 col-md-12 col-12 d-flex flex-wrap justify-content-between">
                        <div class="contact-box">
                            <span> <a href="#"><i class="fas fa-phone-square-alt"></i> 123-58794069</a> </span>
                            <span> <a href="#"><i class="fas fa-envelope-open-text"></i> supportfoodkhan@.com</a></span>
                        </div>
                        <div class="social-box">
                            <span><a href="#"><i class="fab fa-facebook"></i></a></span>
                            <span><a href="#"><i class="fab fa-twitter"></i></a></span>
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
                            <a href="{{ route('login') }}"> <img src="assets/images/logo/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <nav id="mobile-menu">
                            <ul class="main-menu">
                                <li><a href="#">home <span><i class="fas fa-angle-down"></i></span></a>
                                    <ul class="submenu">
                                        <li><a href="index.html">home-1</a></li>
                                        <li><a href="homepage2.html">home-2</a></li>
                                        <li><a href="homepage3.html">home-3</a></li>
                                        <li><a href="homepage4.html">home-4</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">about us</a></li>
                                <li><a href="menu.html">menu</a></li>
                                <li><a href="#">blog <span><i class="fas fa-angle-down"></i></span></a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-single.html">single blog</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">pages <span><i class="fas fa-angle-down"></i></span></a>
                                    <ul class="submenu">
                                        <li><a href="checkout.html">checkout page</a></li>
                                        <li><a href="single-dish.html">single dish page</a></li>
                                        <li><a href="food-page.html">food page</a></li>
                                        <li><a href="food-page2.html">food page 2</a></li>
                                        <li>
                                            <a href="shopping-cart.html">shopping cart page</a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">wishlist page</a>
                                        </li>
                                        <li>
                                            <a href="profile.html">profile page</a>
                                        </li>
                                        <li><a href="single-food.html">single food page</a></li>
                                        <li><a href="gallery.html">gallery page</a></li>
                                        <li><a href="login.html">login page</a></li>
                                        <li><a href="signup.html">signup page</a></li>
                                        <li><a href="404.html">404 page</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">contact us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-4 col-md-9 col-8">
                        <div class="customer-area">
                            <span>
                                <a href="wishlist.html"><i class="fas fa-heart"></i></a>
                            </span>
                            <span>
                                <a href="profile.html"><i class="fas fa-user"></i></a>
                            </span>
                            <span>
                                <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                            </span>
                            <a href="{{ route('login') }}" class="btn">login</a>
                        </div>
                    </div>
                </div>
                <!-- mobile-menu -->
                <div class="mobile-menu"></div>
            </div>
        </div>
    </header>

    <!-- breadcrumb-area -->
    <div class="banner-area breadcrumb-area padding-top-120 padding-bottom-90">
        <div class="bread-shapes">
            <span class="b-shape-1 item-bounce"><img src="assets/images/img/5.png" alt=""></span>
            <span class="b-shape-2"><img src="assets/images/img/6.png" alt=""></span>
            <span class="b-shape-3"><img src="assets/images/img/7.png" alt=""></span>
            <span class="b-shape-4"><img src="assets/images/img/9.png" alt=""></span>
            <span class="b-shape-5"><img src="assets/images/shapes/18.png" alt=""></span>
            <span class="b-shape-6 item-animateOne"><img src="assets/images/img/7.png" alt=""></span>
        </div>
        <div class="container padding-top-120">
            <div class="row justify-content-center">
                <nav aria-label="breadcrumb">
                    <h2 class="page-title">Signup Page</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Signup Page</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- contact-form-area -->
    <section class="about-area about-area2 writeto-us login-area signup-area padding-top-120 padding-bottom-120">
        <div class="form-shapes">
            <span class="fs1 item-animateOne"><img src="assets/images/shapes/1.png" alt=""></span>
            <span class="fs2 item-bounce"><img src="assets/images/shapes/12.png" alt=""></span>
            <span class="fs3"><img src="assets/images/shapes/13.png" alt=""></span>
            <span class="fs4 item-bounce"><img src="assets/images/shapes/26.png" alt=""></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12  wow fadeInUp">
                    <div class="about-left">
                        <div class="about-l-shapes">
                            <span class="als-1"><img src="assets/images/shapes/2.png" alt=""></span>
                        </div>
                        <div class="row">
                            <div
                                class="col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-end justify-content-end margin-bottom-20">
                                <div class="about-gallery-1">
                                    <img src="assets/images/gallery/1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-8 margin-bottom-20">
                                <div class="about-gallery-2">
                                    <img src="assets/images/gallery/2.jpg" alt="">

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="about-gallery-3">
                                    <img src="assets/images/gallery/3.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-5 d-flex align-items-stretch ">
                                <div class="about-gallery-5 text-center">
                                    <img src="assets/images/gallery/5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInUp">
                    <div class="contact-form-area login-form-area signup-form-area">
                        <h3>Signup <span>now</span></h3>
                        
                        <form method="POST" action="{{ route('register.data') }}">
                            @csrf

                            <div class="google-button">
                                <a href="#" class="btn"><span><i class="fab fa-google"></i></span> google</a>
                            </div>
                            
                            <input type="text" name="fname" placeholder="First Name">
                            @error('fname')
                                {{ $message }}
                            @enderror

                            <input type="text" name="lname" placeholder="Last Name">
                            @error('lname')
                                {{ $message }}
                            @enderror

                            <input type="email" name="email" placeholder="Email">
                            @error('email')
                                {{ $message }}
                            @enderror

                            <input type="phone" name="phone" placeholder="Contact No">
                            @error('phone')
                                {{ $message }}
                            @enderror

                            <input type="text" name="username" placeholder="Username">
                            @error('username')
                                {{ $message }}
                            @enderror

                            <input type="password" name="password" placeholder="Password">
                            @error('password')
                                {{ $message }}
                            @enderror

                            <input type="password" name="password_confirmation" placeholder="Confirm Password">
                            @error('password_confirmation')
                                {{ $message }}
                            @enderror 

                            <div class="checkbox-area">
                                <div class="checkbox-part">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">remember me</label>
                                </div>
                                <div class="forgot-pas">
                                    <a href="#">forgot password?</a>
                                </div>
                            </div>
                            <div class="login-btn">
                                <button type="submit" class="btn">login account</button>
                                <span>already have an account? <a href="{{ route('login') }}">login</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer area -->
    <footer class="padding-top-40 padding-bottom-40">
        <div class="fo-shapes">
            <span class="fs-1"><img src="assets/images/gallery/26.png" alt=""></span>
            <span class="fs-2 item-animateTwo"><img src="assets/images/shapes/25.png" alt=""></span>
            <span class="fs-3 item-animateTwo"><img src="assets/images/shapes/26.png" alt=""></span>
            <span class="fs-4 item-animateOne"><img src="assets/images/shapes/27.png" alt=""></span>
            <span class="fs-5 item-bounce"><img src="assets/images/shapes/3.png" alt=""></span>
            <span class="fs-6"><img src="assets/images/shapes/22.png" alt=""></span>
            <span class="fs-7"><img src="assets/images/shapes/30.png" alt=""></span>
        </div>
        <div class="footer-top d-none d-md-block">
            <div class="container">
                <div class="row align-items-center justify-content-between padding-bottom-25">
                    <div class="col-lg-3 col-md-3">
                        <div class="f-logo">
                            <a href="index.html"> <img src="assets/images/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="f-title">
                            <h4>Feel Hunger! Order Your<span> Like Food.</span></h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <a href="#" class="btn">order now</a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="footer-bottom padding-top-22 padding-bottom-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 margin-bottom-20">
                        <div class="widget">
                            <h6>address</h6>
                            <p>570 8th Ave,New York, NY 10018
                                United States</p>
                            <a href="#" class="f-link">view google map</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 margin-bottom-20">
                        <div class="widget">
                            <h6>book a table</h6>
                            <p>Dogfood och Sliders foodtruck.
                                Under Om oss kan ni läsa</p>
                            <a href="#" class="f-link">make a call</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 margin-bottom-20">
                        <div class="widget">
                            <h6>opening hours</h6>
                            <p><span>monday-friday: 8am - 4pm</span>
                                <br><span>saturday: 9am - 5pm</span>
                            </p>

                            <a href="#" class="f-link">make a call</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 margin-bottom-20">
                        <div class="widget">
                            <h6>newsletter</h6>
                            <div class="newsletter d-flex">
                                <form action="#">
                                    <input type="email" placeholder="enter your email"> <button type="submit"><i
                                            class="fas fa-paper-plane"></i></button>
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


</html>