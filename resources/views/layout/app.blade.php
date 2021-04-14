<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

    <!-- Page Title -->
    @yield('title')

    <!-- Mobile Specific-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- [if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
 <![endif] -->

    <!-- Bootstrap Css-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- Fontawesome Css -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css" />

    <!-- Flaticon Css-->
    <link rel="stylesheet" type="text/css" href="css/flaticon.min.css">

    <!-- Animate Css -->
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">

    <!-- Owl Carousel Css -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">

    <!-- Bootstrap Select Css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">

    <!-- Magnific Popup Css -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css">

    <!-- Loader Css-->
    <link rel="stylesheet" type="text/css" href="css/loader.min.css">

    <!-- Main Style Css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Color Theme Change Css -->
    <link rel="stylesheet" class="skin" type="text/css" href="css/skin/skin-1.css">

    <!-- Custom Css-->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!-- Side Switcher Css-->
    <link rel="stylesheet" type="text/css" href="css/switcher.css">

    <!-- Revolution Slider Css -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">

    <!-- Revolution Slider Css -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">



</head>

<body>

    <div class="page-wraper">

        <!-- HEADER START -->
        <header class="site-header header-style-6">

            <div class="top-bar top-bar-liner bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="mt-topbar-right clearfix">
                            <ul class="list-unstyled pull-right tb-info-liner">
                                <li><i class="text-primary"></i>Your Trusted 24 Hours Service Provider!</li>
                            </ul>
                            <ul class="list-inline pull-right tb-social-liner">
                                <li><a href="https://www.facebook.com/openroadlimited/" class="fa fa-facebook"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Search Link -->

            <div class="main-bar header-middle bg-white">
                <div class="container" style="padding-left: 0px ; padding-right: 0px">
                    <div class="logo-header" style="background-color: rgb(1, 14, 42);">
                        <a href="/Best-Parking-and-Warehousing-Company-in-Nairobi">
                            {{-- <img src="images/logo-1.png" width="300" height="37" alt="" /> --}}
                             <div class="tp-caption BigBold-Title   tp-resizeme"
                            style="
                            text-transform:uppercase;
                            color:#ff5e14;
                            font-size: 60%;
                            width: auto;
                            font-weight: 700;
                            margin-right: 10%;
                            ">Openroad Limited Entreprises.
                            </div>
                        </a>
                    </div>
                    <div class="header-info">
                        <ul>
                            <li>
                                <div>
                                    <div class="icon-sm">
                                        <span class="icon-cell  text-primary"><i class="iconmoon-smartphone"></i></span>
                                    </div>
                                    <div class="icon-content">
                                        <strong>Phone Number</strong>
                                        <span>+254 794 263292</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div class="icon-sm">
                                        <span class="icon-cell  text-primary"><i class="iconmoon-envelope"></i></span>
                                    </div>
                                    <div class="icon-content">
                                        <strong>Email Address</strong>
                                        <span>info@openroad.co.ke</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="sticky-header main-bar-wraper">
                <div class="main-bar header-botton nav-bg-primary">
                    <div class="container">
                        <!-- NAV Toggle Button -->
                        <button data-target=".header-nav" data-toggle="collapse" type="button"
                            class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- ETRA Nav -->
                        {{-- <div class="extra-nav">
                            <div class="extra-cell">
                                <a href="javascript:;" class="mt-cart cart-btn" title="Your Cart">
                                    <span class="link-inner">
                                        <span class="woo-cart-total"> </span>
                                        <span class="woo-cart-count">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="shopping-bag wcmenucart-count ">2</span>
                                        </span>
                                    </span>
                                </a>

                                  <div class="cart-dropdown-item-wraper clearfix">
                                    <div class="nav-cart-content">

                                        <div class="nav-cart-items p-a10">
                                            <div class="nav-cart-item clearfix">
                                                <div class="nav-cart-item-image">
                                                    <a href="#"><img src="images/cart/pic-1.jpg" alt="p-1"></a>
                                                </div>
                                                <div class="nav-cart-item-desc">
                                                    <a href="#">Air Fright</a>
                                                    <span class="nav-cart-item-price"><strong>2</strong> x $9.50</span>
                                                    <a href="#" class="nav-cart-item-quantity">x</a>
                                                </div>
                                            </div>
                                            <div class="nav-cart-item clearfix">
                                                <div class="nav-cart-item-image">
                                                    <a href="#"><img src="images/cart/pic-2.jpg" alt="p-2"></a>
                                                </div>
                                                <div class="nav-cart-item-desc">
                                                    <a href="#">Transport Item</a>
                                                    <span class="nav-cart-item-price"><strong>1</strong> x $24.50</span>
                                                    <a href="#" class="nav-cart-item-quantity">x</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nav-cart-title p-a15 clearfix">
                                            <h4  class="pull-left m-a0">Subtotal:</h4>
                                            <h5 class="pull-right m-a0">$43.50</h5>
                                        </div>
                                        <div class="nav-cart-action">
                                            <button class="site-button" type="button">View Cart</button>
                                            <button class="site-button-secondry center-block" type="button">Checkout </button>
                                        </div>
                                    </div>
                                  </div>

                            </div>
                            <div class="extra-cell">
                                <a href="#search" class="site-search-btn"><i class="fa fa-search"></i></a>
                            </div>

                         </div>
                        <!-- SITE Search -->
                        <div id="search">
                            <span class="close"></span>
                            <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
                                <div class="input-group">
                                    <input value="" name="q" type="search" placeholder="Type to search"/>
                                    <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search"></i></button></span>
                                </div>
                            </form>
                        </div> --}}

                        <!-- MAIN Vav -->
                        <div class="header-nav navbar-collapse collapse ">
                            <ul class=" nav navbar-nav">
                                <li class="active">
                                    <a href="/Best-Parking-and-Warehousing-Company-in-Nairobi">Home<i class=""></i></a>
                                </li>
                                <li>
                                    <a href="#about-the-Best-Parking-and-Warehousing-Company-in-Nairobi">About<i class=""></i></a>
                                </li>
                                <li>
                                    <a href="#testimonials-of-the-Best-Parking-and-Warehousing-Company-in-Nairobi">Testimony<i class=""></i></a>
                                </li>
                                <li>
                                    <a href="#contact-the-Best-Parking-and-Warehousing-Company-in-Nairobi">Contact Us<i class=""></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </header>

       @yield('content')
        <!-- Footer Part-->
        <footer class="site-footer footer-dark">
            <!-- Footer Top Part -->
            <div class="footer-top overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container">
                    <div class="row">
                        <!-- About -->
                        <div class="col-md-4 col-sm-6">
                            <div class="widget widget_about text-white">
                                <h4 class="widget-title">About Company</h4>
                                <div class="logo-footer clearfix p-15">
                                    {{-- <a href="index.html"><img src="images/footer-logo.png" width="171" height="49"
                                            alt="" /></a> --}}
                                            <div class="tp-caption BigBold-Title   tp-resizeme"
                                            style="
                                            text-transform:uppercase;
                                            color:#ff5e14;
                                            font-size: 60%;
                                            width: auto;
                                            font-weight: 700;
                                            margin-right: 10%;
                                            ">Openroad Limited Entreprises.
                                            </div>
                                </div>

                                <ul>
                                    <li> <i class="fa fa-phone text-primary"></i> <b class="p-lr5 text-uppercase">Tel
                                            :</b> +254 794 263292</li>
                                    <li><i class="fa fa-envelope text-primary"></i> <b
                                            class="p-lr5 text-uppercase">Email : </b>info@openroad.co.ke</li>
                                    <li><i class="fa fa-location-arrow text-primary"></i> <b
                                            class="p-lr5 text-uppercase">Location :511-00600, Nairobi</b></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Useful Links -->
                        <div class="col-md-4 col-sm-6">
                            <div class="widget widget_services text-white">
                                <h4 class="widget-title">Useful links</h4>
                                <ul>
                                    <li><a href="#about-the-Best-Parking-and-Warehousing-Company-in-Nairobi">About</a></li>
                                    <li><a href="#contact-the-Best-Parking-and-Warehousing-Company-in-Nairobi">Contact Us</a></li>
                                    <li><a href="https://goo.gl/maps/2EjQJqATRCj88q2R6">Google Map Location</a></li>
                                </ul>
                            </div>
                        </div>
<!-- Footer Copyright Part -->
                        <div class="col-md-4 col-sm-6">
                    <div class="mt-footer-bot-center">
                        <span class="copyrights-text">© 2021 OpenRoad Entreprises Limited.</span>
                        <br>
                        <span class="copyrights-text"> All Rights Reserved.</span>
                    </div>

                </div>
        </footer>

        <!-- Scroll Top Button -->
        <button class="scroltop"><span class="fa fa-space-shuttle relative" id="btn-vibrate"></span></button>
    </div>
    <!-- Loading Div ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="loading_progress-container">
                <div class="loading_progress">
                    <div class="loading_progress-bar">
                        <div class="loading_progress-shadow"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Loading Div ====== -->

    <!-- JAVASCRIPT  FILES ========================================= -->

    <!-- JQUERY.MIN JS -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <!-- BOOTSTRAP.MIN JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- FORM JS -->
    <script src="js/bootstrap-select.min.js"></script>
    <!-- FORM JS -->
    <script src="js/jquery.bootstrap-touchspin.min.js"></script>
    <!-- MAGNIFIC-POPUP JS -->
    <script src="js/magnific-popup.min.js"></script>
    <!-- WAYPOINTS JS -->
    <script src="js/waypoints.min.js"></script>
    <!-- COUNTERUP JS -->
    <script src="js/counterup.min.js"></script>
    <!-- COUNTERUP JS -->
    <script src="js/waypoints-sticky.min.js"></script>
    <!-- MASONRY  -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- OWL  SLIDER  -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- OWL  SLIDER  -->
    <script src="js/jquery.owl-filter.js"></script>
    <!-- PARALLAX BG IMAGE   -->
    <script src="js/stellar.min.js"></script>
    <!-- ON SCROLL CONTENT ANIMTE   -->
    <script src="js/scrolla.min.js"></script>
    <!-- CUSTOM FUCTIONS  -->
    <script src="js/custom.js"></script>
    <!-- SHORTCODE FUCTIONS  -->
    <script src="js/shortcode.js"></script>
    <!-- SWITCHER FUCTIONS  -->
    <script src="js/switcher.js"></script>
    <!-- BACKGROUND SCROLL -->
    <script src="js/jquery.bgscroll.js"></script>

    <!-- SLIDER REVOLUTION -->
    <script src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>
    <!-- REVOLUTION SLIDER SCRIPT -->
    <script src="js/rev-script-3.js"></script>

    <!-- STYLE SWITCHER  ======= -->
    {{-- <div class="styleswitcher">

        <div class="switcher-btn-bx">
            <a class="switch-btn">
                <span class="fa fa-cog fa-spin"></span>
            </a>
        </div>

        <div class="styleswitcher-inner">

            <h6 class="switcher-title">Color Skin</h6>
            <ul class="color-skins">
                <li><a class="theme-skin skin-1" href="?theme=css/skin/skin-1" title="default Theme"></a></li>
                <li><a class="theme-skin skin-2" href="?theme=css/skin/skin-2" title="pink Theme"></a></li>
                <li><a class="theme-skin skin-3" href="?theme=css/skin/skin-3" title="sky Theme"></a></li>
                <li><a class="theme-skin skin-4" href="?theme=css/skin/skin-4" title="green Theme"></a></li>
                <li><a class="theme-skin skin-5" href="?theme=css/skin/skin-5" title="red Theme"></a></li>
                <li><a class="theme-skin skin-6" href="?theme=css/skin/skin-6" title="orange Theme"></a></li>
                <li><a class="theme-skin skin-7" href="?theme=css/skin/skin-7" title="purple Theme"></a></li>
                <li><a class="theme-skin skin-8" href="?theme=css/skin/skin-8" title="blue Theme"></a></li>
            </ul>

        </div>
    </div> --}}
    <!-- STYLE SWITCHER END ==== -->

</body>

</html>
