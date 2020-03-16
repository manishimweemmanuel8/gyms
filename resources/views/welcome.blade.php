
<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from radiustheme.com/demo/html/gymedge/one-page/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Mar 2020 05:35:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GymEdge | One Page 1</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('asset/web/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('asset/web/css/font-awesome.min.css')}}">
    <!-- Owl Caousel CSS 
        ============================================ -->
    <link rel="stylesheet" href="{{asset('asset/web/vendor/OwlCarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/web/vendor/OwlCarousel/owl.theme.default.min.css')}}">
    <!-- meanmenu CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('asset/web/css/meanmenu.min.css')}}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('asset/web/css/normalize.css')}}">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('asset/web/css/main.css')}}">
    <!-- nivo slider CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('asset/web/css/custom-slider/css/nivo-slider.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('asset/web/css/custom-slider/css/preview.css')}}" type="text/css" media="screen" />
    <!-- flaticon CSS
        ============================================ -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/web/css/flaticon.css')}}">
    <!-- Wow CSS
        ============================================ -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/web/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/web/css/site.css')}}">
    <!-- Switch Style CSS 
        ============================================ -->
    <link rel="stylesheet" href="{{asset('asset/web/css/hover-min.css')}}">
    <!-- Magic popup CSS 
        ============================================-->
    <link rel="stylesheet" href="{{asset('asset/web/css/magnific-popup.css')}}">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('asset/web/style.css')}}">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('asset/web/css/responsive.css')}}">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{asset('asset/web/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!-- Start wrapper -->
    <div class="wrapper">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Preloader Start Here -->
        <div id="preloader"></div>
        <!-- Preloader End Here -->
        <!-- Start Header area -->
        <header class="main-header header-style1" id="sticker">
            <!-- Start Header Top Area -->
            <div class="header-top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="logo-area">
                                <a href=""><img src="{{asset('asset/web/img/logo.png')}}" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-10">
                            <div class="main-menu">
                                <nav>
                                    <ul id="nav">
                                        <li class="current"><a href="">Home</a></li>
                                        <li><a href="#about">About</a></li>
                                        <li><a href="#classes">Classes</a></li>
                                        <li><a href="#schedule">Schedule</a></li>
                                        <li><a href="#trainers">Trainers</a></li>
                                        <li><a href="#price">Price</a></li>
                                        <li><a href="#gallery">gallery</a></li>
                                        <li><a href="#news">News</a></li>
                                        <li><a href="#contact">Contact</a></li>

                                        <li> <a class="nav-link" href="{{ route('receptionist.login') }}">{{ __('Login') }}</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 hidden-sm">
                            <div class="header-top-right">
                                <ul>
                                    <li>
                                        <div class="header-top-search search-box">
                                            <form>
                                                <input class="search-text" type="text" placeholder="Search Here...">
                                                <a class="search-button" href="#">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </form>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="cart-area floatright">
                                            <i class="fa fa-shopping-cart"></i><span>2</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <div class="cart-single-product">
                                                    <div class="media">
                                                        <div class="pull-left cart-product-img">
                                                            <a href="#">
                                                                <img class="media-object" src="{{asset('asset/web/img/product/cart-img.png')}}" alt="product">
                                                            </a>
                                                        </div>
                                                        <div class="media-body cart-content">
                                                            <h4 class="media-heading"><a href="#">Product Title Here</a></h4>
                                                            <a href="#" class="trash"><i class="fa fa-trash-o"></i></a>
                                                            <p>Quantity : 1</p>
                                                            <div class="cart-product-price">
                                                                <a href="#">$49</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart-single-product">
                                                    <div class="media">
                                                        <div class="pull-left cart-product-img">
                                                            <a href="#">
                                                                <img class="media-object" src="{{asset('asset/web/img/product/cart-img.png')}}" alt="product">
                                                            </a>
                                                        </div>
                                                        <div class="media-body cart-content">
                                                            <h4 class="media-heading"><a href="#">Product Title Here</a></h4>
                                                            <a href="#" class="trash"><i class="fa fa-trash-o"></i></a>
                                                            <p>Quantity : 1</p>
                                                            <div class="cart-product-price">
                                                                <a href="#">$99</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><a href="http://www.radiustheme.com/demo/html/gymedge/one-page/checkout.html" class="checkout-button">Checkout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End header Top Area -->
            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li class="current"><a href="">Home</a></li>
                                        <li><a href="#about">About</a></li>
                                        <li><a href="#classes">Classes</a></li>
                                        <li><a href="#schedule">Schedule</a></li>
                                        <li><a href="#trainers">Trainers</a></li>
                                        <li><a href="#price">Price</a></li>
                                        <li><a href="#news">News</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->
        </header>
        <!-- End Header area -->
        <!-- Start slider area  -->
        <div class="slider-area slider-top-space-header1 slider1-caption">
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="slides">
                    <img src="{{asset('asset/web/img/slides/slide1.jpg')}}" alt="image" title="#slider-direction-1" />
                    <img src="{{asset('asset/web/img/slides/slide2.jpg')}}" alt="image" title="#slider-direction-1" />
                    <img src="{{asset('asset/web/img/slides/slide1.jpg')}}" alt="image" title="#slider-direction-1" />
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <!-- <div class="slider-progress"></div> -->
                    <div class="slider-content t-cn s-tb slider-1">
                        <div class="title-container s-tb-c title-compress">
                            <div data-wow-delay="0.1s" data-wow-duration="1s" class="tp-caption big-title rs-title customin customout bg-sld-cp-primary ">Build <span>Your</span> Body <span>Strong</span>
                            </div>
                            <div data-wow-delay="0.2s" data-wow-duration="2s" class="tp-caption small-content customin customout rs-title-small bg-sld-cp-primary tp-resizeme rs-parallaxlevel-0 ">
                                Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the idustry's standard type specimen book. It has survived not only five centuries, bu
                            </div>
                            <div class="button">
                                <a href="#" class="btn custom-button" data-title="Join With Us">Join With Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End slider area-->
        <!-- Start About fitness area -->
        <div class="about-fitness-area" id="about">
            <div class="container-fluid">
                <div class="about-fitness-left">
                    <div class="about-left-img padding-space">
                        <img src="{{asset('asset/web/img/about-fitness-img.png')}}" alt="about-fitness-img">
                        <div class="overly">
                            <h3>All <span>About</span><br>Fitness</h3>
                        </div>
                    </div>
                </div>
                <div class="about-fitness-right padding-space">
                    <div class="about-single-service">
                        <div class="media service-item">
                            <div class="pull-left service-image">
                                <a href="#">
                                    <span class="flaticon-olympic-weightlifting"></span>
                                </a>
                            </div>
                            <div class="media-body service-content">
                                <h3 class="media-heading"><a href="#">Wight Lifting</a></h3>
                                <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummyy text of the printing and typesetting.</p>
                            </div>
                        </div>
                    </div>
                    <div class="about-single-service">
                        <div class="media service-item">
                            <div class="pull-left service-image">
                                <a href="#">
                                    <span class="flaticon-people"></span>
                                </a>
                            </div>
                            <div class="media-body service-content">
                                <h3 class="media-heading"><a href="#">Running</a></h3>
                                <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummyy text of the printing and typesetting.</p>
                            </div>
                        </div>
                    </div>
                    <div class="about-single-service">
                        <div class="media service-item last-item">
                            <div class="pull-left service-image">
                                <a href="#">
                                    <span class="flaticon-exercise"></span>
                                </a>
                            </div>
                            <div class="media-body service-content">
                                <h3 class="media-heading"><a href="#">Yoga</a></h3>
                                <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummyy text of the printing and typesetting.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About fitness area -->
        <!-- Start feature classes area -->
        <div class="feature-classes-area nav-on-hover" id="classes">
            <div class="container">
                <div class="section-title">
                    <h2>Featured Classes</h2>
                </div>
            </div>
            <div class="container">
                <div class="gym-carousel nav-control-top" data-loop="true" data-items="3" data-margin="15" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true" data-r-large-dots="false">
                    <div class="single-product-classes">
                        <div class="single-product">
                            <a href="#"><img class="img-responsive" src="{{asset('asset/web/img/feature1.jpg')}}" alt="product"></a>
                            <div class="overly">
                                <ul>
                                    <li>16 Dec</li>
                                    <li>06.AM</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="http://www.radiustheme.com/demo/html/gymedge/one-page/single-classes.html">Weight Lifting</a></h3>
                            <span class="author"><i class="fa fa-user"></i>Jhon Carry</span>
                        </div>
                    </div>
                    <div class="single-product-classes">
                        <div class="single-product">
                            <a href="#"><img class="img-responsive" src="{{asset('asset/web/img/feature2.jpg')}}" alt="product"></a>
                            <div class="overly">
                                <ul>
                                    <li>16 Dec</li>
                                    <li>06.AM</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="http://www.radiustheme.com/demo/html/gymedge/one-page/single-classes.html">Daily Yoga</a></h3>
                            <span class="author"><i class="fa fa-user"></i>Jhon Carry</span>
                        </div>
                    </div>
                    <div class="single-product-classes">
                        <div class="single-product">
                            <a href="#"><img class="img-responsive" src="{{asset('asset/web/img/feature3.jpg')}}" alt="product"></a>
                            <div class="overly">
                                <ul>
                                    <li>16 Dec</li>
                                    <li>06.AM</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="http://www.radiustheme.com/demo/html/gymedge/one-page/single-classes.html">Running Way</a></h3>
                            <span class="author"><i class="fa fa-user"></i>Jhon Carry</span>
                        </div>
                    </div>
                    <div class="single-product-classes">
                        <div class="single-product">
                            <a href="#"><img class="img-responsive" src="{{asset('asset/web/img/feature4.jpg')}}" alt="product"></a>
                            <div class="overly">
                                <ul>
                                    <li>16 Dec</li>
                                    <li>06.AM</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="http://www.radiustheme.com/demo/html/gymedge/one-page/single-classes.html">Free Hand</a></h3>
                            <span class="author"><i class="fa fa-user"></i>Jhon Carry</span>
                        </div>
                    </div>
                    <div class="single-product-classes">
                        <div class="single-product">
                            <a href="#"><img class="img-responsive" src="{{asset('asset/web/img/feature1.jpg')}}" alt="product"></a>
                            <div class="overly">
                                <ul>
                                    <li>16 Dec</li>
                                    <li>06.AM</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="http://www.radiustheme.com/demo/html/gymedge/one-page/single-classes.html">Weight Lifting</a></h3>
                            <span class="author"><i class="fa fa-user"></i>Jhon Carry</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End feature product area -->
        <!-- Start being body builder area -->
        <div class="being-body-builder  bg-secondary padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="being-left-img">
                            <img src="{{asset('asset/web/img/being-builder.png')}}" alt="being-builder">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="being-right-content">
                            <div class="being-content">
                                <h2>Being <span>Body</span></h2>
                                <p>Builders</p>
                                <a class="btn sign-button" href="#">Sign up!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End being body builder area -->
        <!-- Start class schedule area -->
        <div class="class-schedule" id="schedule">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="section-title">
                            <h2>Class ScheDule</h2>
                        </div>
                        <div class="class-schedule-wrap">
                            <!-- Tabs -->
                            <ul id="myTab" class="nav nav-tabs">
                                <li class="active"><a href="#monday" data-toggle="tab">Monday</a></li>
                                <li><a href="#tuesday" data-toggle="tab">Tuesday</a></li>
                                <li><a href="#wednesday" data-toggle="tab">Wednesday</a></li>
                                <li><a href="#thursday" data-toggle="tab">Thursday</a></li>
                                <li><a href="#friday" data-toggle="tab">Friday</a></li>
                                <li><a href="#saturday" data-toggle="tab">Saturday</a></li>
                                <li><a href="#sunday" data-toggle="tab">Sunday</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content class-schedule-tab">
                                <div class="tab-pane fade in active" id="monday">
                                    <ul class="odd">
                                        <li>Yoga</li>
                                        <li>10.00 am - 12.00 pm</li>
                                        <li>Robert Smith</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                    <ul class="even">
                                        <li>Running</li>
                                        <li>09.00 am - 12.00 pm</li>
                                        <li>Petter john</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                    <ul class="odd">
                                        <li>Gym</li>
                                        <li>10.00 am - 12.00 pm</li>
                                        <li>Kazi Fahim</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                    <ul class="even">
                                        <li>Free Hand</li>
                                        <li>09.00 am - 12.00 pm</li>
                                        <li>Jessy Reo</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                    <ul class="odd">
                                        <li>Weight Lifting</li>
                                        <li>10.00 am - 12.00 pm</li>
                                        <li>Zara Keron</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                    <ul class="even">
                                        <li>Fitness</li>
                                        <li>09.00 am - 12.00 pm</li>
                                        <li>Jack Sparrow</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="tuesday">
                                    <ul class="odd">
                                        <li>Yoga</li>
                                        <li>10.00 am - 12.00 pm</li>
                                        <li>Robert Smith</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                    <ul class="even">
                                        <li>Running</li>
                                        <li>09.00 am - 12.00 pm</li>
                                        <li>Petter john</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                    <ul class="odd">
                                        <li>Gym</li>
                                        <li>10.00 am - 12.00 pm</li>
                                        <li>Kazi Fahim</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                    <ul class="even">
                                        <li>Free Hand</li>
                                        <li>09.00 am - 12.00 pm</li>
                                        <li>Jessy Reo</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                    <ul class="odd">
                                        <li>Weight Lifting</li>
                                        <li>10.00 am - 12.00 pm</li>
                                        <li>Zara Keron</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="wednesday">
                                    <ul class="odd">
                                        <li>Yoga</li>
                                        <li>10.00 am - 12.00 pm</li>
                                        <li>Robert Smith</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                    <ul class="even">
                                        <li>Running</li>
                                        <li>09.00 am - 12.00 pm</li>
                                        <li>Petter john</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                    <ul class="odd">
                                        <li>Gym</li>
                                        <li>10.00 am - 12.00 pm</li>
                                        <li>Kazi Fahim</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                    <ul class="even">
                                        <li>Free Hand</li>
                                        <li>09.00 am - 12.00 pm</li>
                                        <li>Jessy Reo</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="thursday">
                                    <ul class="odd">
                                        <li>Yoga</li>
                                        <li>10.00 am - 12.00 pm</li>
                                        <li>Robert Smith</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                    <ul class="even">
                                        <li>Running</li>
                                        <li>09.00 am - 12.00 pm</li>
                                        <li>Petter john</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                    <ul class="odd">
                                        <li>Gym</li>
                                        <li>10.00 am - 12.00 pm</li>
                                        <li>Kazi Fahim</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                    <ul class="even">
                                        <li>Free Hand</li>
                                        <li>09.00 am - 12.00 pm</li>
                                        <li>Jessy Reo</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                    <ul class="odd">
                                        <li>Weight Lifting</li>
                                        <li>10.00 am - 12.00 pm</li>
                                        <li>Zara Keron</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="friday">
                                    <ul class="odd">
                                        <li>Yoga</li>
                                        <li>10.00 am - 12.00 pm</li>
                                        <li>Robert Smith</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                    <ul class="even">
                                        <li>Running</li>
                                        <li>09.00 am - 12.00 pm</li>
                                        <li>Petter john</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="saturday">
                                    <ul class="odd">
                                        <li>Yoga</li>
                                        <li>10.00 am - 12.00 pm</li>
                                        <li>Robert Smith</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                    <ul class="even">
                                        <li>Running</li>
                                        <li>09.00 am - 12.00 pm</li>
                                        <li>Petter john</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                    <ul class="odd">
                                        <li>Gym</li>
                                        <li>10.00 am - 12.00 pm</li>
                                        <li>Kazi Fahim</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="sunday">
                                    <ul class="odd">
                                        <li>Yoga</li>
                                        <li>10.00 am - 12.00 pm</li>
                                        <li>Robert Smith</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                    <ul class="even">
                                        <li>Running</li>
                                        <li>09.00 am - 12.00 pm</li>
                                        <li>Petter john</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                    <ul class="odd">
                                        <li>Gym</li>
                                        <li>10.00 am - 12.00 pm</li>
                                        <li>Kazi Fahim</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                    <ul class="even">
                                        <li>Free Hand</li>
                                        <li>09.00 am - 12.00 pm</li>
                                        <li>Jessy Reo</li>
                                        <li><a href="#">Join Now!</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End class schedule area -->
        <!-- Start what clients say area  -->
        <div class="what-client-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="section-title">
                            <h2>What Client’s Say</h2>
                        </div>
                        <div class="gym-carousel dot-control" data-loop="true" data-items="2" data-margin="15" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false" data-r-x-small-dots="true" data-r-x-medium="1" data-r-x-medium-nav="false" data-r-x-medium-dots="true" data-r-small="2" data-r-small-nav="false" data-r-small-dots="true" data-r-medium="2" data-r-medium-nav="false" data-r-medium-dots="true" data-r-large="2" data-r-large-nav="false" data-r-large-dots="true">
                            <div class="single-client-say">
                                <div class="pull-left client-picture">
                                    <img src="{{asset('asset/web/img/client1.jpg')}}" alt="client1">
                                </div>
                                <div class="media-body client-content">
                                    <h3>Honey Jisa <span> / CEO</span></h3>
                                    <p>Lorem ipsum dolor sit amet, consectet ad elit sed diam nonummy nibh euismod tincidunt ut laoreet dolore magnaLorem ipsum dolor sit amet, consectet ad elit sed onummy.</p>
                                </div>
                            </div>
                            <div class="single-client-say">
                                <div class="pull-left client-picture">
                                    <img src="{{asset('asset/web/img/client2.jpg')}}" alt="client2">
                                </div>
                                <div class="media-body client-content">
                                    <h3>Tahmid Alom <span> / Founder</span></h3>
                                    <p>Lorem ipsum dolor sit amet, consectet ad elit sed diam nonummy nibh euismod tincidunt ut laoreet dolore magnaLorem ipsum dolor sit amet, consectet ad elit sed onummy.</p>
                                </div>
                            </div>
                            <div class="single-client-say">
                                <div class="pull-left client-picture">
                                    <img src="{{asset('asset/web/img/client1.jpg')}}" alt="client1">
                                </div>
                                <div class="media-body client-content">
                                    <h3>Honey Jisa <span> / CEO</span></h3>
                                    <p>Lorem ipsum dolor sit amet, consectet ad elit sed diam nonummy nibh euismod tincidunt ut laoreet dolore magnaLorem ipsum dolor sit amet, consectet ad elit sed onummy.</p>
                                </div>
                            </div>
                            <div class="single-client-say">
                                <div class="pull-left client-picture">
                                    <img src="{{asset('asset/web/img/client2.jpg')}}" alt="client2">
                                </div>
                                <div class="media-body client-content">
                                    <h3>Honey Jisa <span> / CEO</span></h3>
                                    <p>Lorem ipsum dolor sit amet, consectet ad elit sed diam nonummy nibh euismod tincidunt ut laoreet dolore magnaLorem ipsum dolor sit amet, consectet ad elit sed onummy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End what clients say area -->
        <!-- Start Expert trainers area -->
        <div class="expert-trainer-area nav-on-hover" id="trainers">
            <div class="container">
                <div class="section-title">
                    <h2>Expert Trainers</h2>
                </div>
            </div>
            <div class="container">
                <div class="gym-carousel nav-control-top" data-loop="true" data-items="3" data-margin="15" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true" data-r-large-dots="false">
                    <div class="single-trainer-item">
                        <div class="trainer-item">
                            <div class="trainer-img">
                                <img src="{{asset('asset/web/img/trainers/trainer1.jpg')}}" alt="trainer1">
                                <div class="social-overly">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="trainer-overly">
                                    <h3><a href="http://www.radiustheme.com/demo/html/gymedge/one-page/single-trainer.html">Jessica</a></h3>
                                    <span class="builder">Body Builder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-trainer-item">
                        <div class="trainer-item">
                            <div class="trainer-img">
                                <img src="{{asset('asset/web/img/trainers/trainer2.jpg')}}" alt="trainer2">
                                <div class="social-overly">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="trainer-overly">
                                    <h3><a href="http://www.radiustheme.com/demo/html/gymedge/one-page/single-trainer.html">Jecy Deoko</a></h3>
                                    <span class="builder">Running Specialist</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-trainer-item">
                        <div class="trainer-item">
                            <div class="trainer-img">
                                <img src="{{asset('asset/web/img/trainers/trainer3.jpg')}}" alt="trainer3">
                                <div class="social-overly">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="trainer-overly">
                                    <h3><a href="http://www.radiustheme.com/demo/html/gymedge/one-page/single-trainer.html">John Smith</a></h3>
                                    <span class="builder">Weight Lifting</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-trainer-item">
                        <div class="trainer-item">
                            <div class="trainer-img">
                                <img src="{{asset('asset/web/img/trainers/trainer4.jpg')}}" alt="trainer4">
                                <div class="social-overly">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="trainer-overly">
                                    <h3><a href="http://www.radiustheme.com/demo/html/gymedge/one-page/single-trainer.html">Stephen</a></h3>
                                    <span class="builder">Body Builder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Expert tainers area -->
        <!-- Start Price Table area -->
        <div class="price-table-area" id="price">
            <div class="container">
                <div class="section-title">
                    <h2>Our Pricing Table</h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hvr-float-shadow">
                        <div class="price-table-box">
                            <span>Standard</span>
                            <h3>$99<span>/month</span></h3>
                            <ul>
                                <li>Free Hand</li>
                                <li>Gym Fitness</li>
                                <li>Running</li>
                                <li>-------</li>
                                <li>-------</li>
                            </ul>
                            <a class="custom-button" data-title="Become A Member" href="#">Details</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hvr-float-shadow">
                        <div class="price-table-box">
                            <span>Premium</span>
                            <h3>$199<span>/month</span></h3>
                            <ul>
                                <li>Free Hand</li>
                                <li>Gym Fitness</li>
                                <li>Running</li>
                                <li>Yoga</li>
                                <li>-------</li>
                            </ul>
                            <a class="custom-button" data-title="Become A Member" href="#">Details</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hvr-float-shadow">
                        <div class="price-table-box">
                            <span>Platinum</span>
                            <h3>$299<span>/month</span></h3>
                            <ul>
                                <li>Free Hand</li>
                                <li>Gym Fitness</li>
                                <li>Running</li>
                                <li>Yoga</li>
                                <li>Body Building</li>
                            </ul>
                            <a class="custom-button" data-title="Become A Member" href="#">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Price Table area -->
        <!-- Gallery Area Start Here -->
        <div class="gallery-area" id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="section-title">
                            <h2>Our Gallery</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="isotop-classes-tab isotop-btn">
                            <a href="#" data-filter="*" class="current">All</a>
                            <a href="#" data-filter=".Yoga">Yoga</a>
                            <a href="#" data-filter=".Running">Running</a>
                            <a href="#" data-filter=".Gym">Gym</a>
                            <a href="#" data-filter=".Fitness">Fitness</a>
                        </div>
                    </div>
                </div>
                <div class="row portfolioContainer gallery-wrapper zoom-gallery">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 Yoga Gym">
                        <div class="gallery-box">
                            <img src="{{asset('asset/web/img/gallery/1.jpg')}}" class="img-responsive" alt="gallery">
                            <div class="gallery-content">
                                <a href="{{asset('asset/web/img/gallery/1.jpg')}}" class="elv-zoom" title="Fitness"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 Running Gym Fitness">
                        <div class="gallery-box">
                            <img src="{{asset('asset/web/img/gallery/2.jpg')}}" class="img-responsive" alt="gallery">
                            <div class="gallery-content">
                                <a href="{{asset('asset/web/img/gallery/2.jpg')}}" class="elv-zoom" title="Push Up"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 Yoga Running Fitness">
                        <div class="gallery-box">
                            <img src="{{asset('asset/web/img/gallery/3.jpg')}}" class="img-responsive" alt="gallery">
                            <div class="gallery-content">
                                <a href="{{asset('asset/web/img/gallery/3.jpg')}}" class="elv-zoom" title="Weight Lifting"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 Yoga Gym">
                        <div class="gallery-box">
                            <img src="{{asset('asset/web/img/gallery/4.jpg')}}" class="img-responsive" alt="gallery">
                            <div class="gallery-content">
                                <a href="{{asset('asset/web/img/gallery/4.jpg')}}" class="elv-zoom" title="Free Hand"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 room Gym Fitness">
                        <div class="gallery-box">
                            <img src="{{asset('asset/web/img/gallery/5.jpg')}}" class="img-responsive" alt="gallery">
                            <div class="gallery-content">
                                <a href="{{asset('asset/web/img/gallery/5.jpg')}}" class="elv-zoom" title="Body Building"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 Yoga campus">
                        <div class="gallery-box">
                            <img src="{{asset('asset/web/img/gallery/6.jpg')}}" class="img-responsive" alt="gallery">
                            <div class="gallery-content">
                                <a href="{{asset('asset/web/img/gallery/6.jpg')}}" class="elv-zoom" title="Gym"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Area End Here -->
        <!-- Start Fitness class summer area -->
        <div class="fitness-summer-area padding-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="fitness-summer">
                            <div class="fitness-content">
                                <h3><span>Fitness Classes</span> This Summer.</h3>
                                <p>Pay Now and
                                    <br> Get <span>35%</span> Discount</p>
                                <a class="custom-button" data-title="Become A Member" href="#">Become A Member</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Fitness class summer area -->
        <!-- Start online store area -->
        <div class="online-store-area nav-on-hover">
            <div class="container">
                <div class="section-title">
                    <h2>Online Store</h2>
                </div>
            </div>
            <div class="container">
                <div class="gym-carousel nav-control-top nav-on-hover" data-loop="true" data-items="4" data-margin="15" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">
                    <div class="single-product-store">
                        <div class="single-product">
                            <a href="#"><img src="{{asset('asset/web/img/product/product1.png')}}" alt="product"></a>
                            <div class="overlay"></div>
                            <div class="product-info">
                                <ul>
                                    <li><a href="#" title="Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="Campare"><i class="fa fa-compress"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="http://www.radiustheme.com/demo/html/gymedge/one-page/single-product.html">Product Title Here</a></h3>
                            <div class="review">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="uncolor"><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <span class="regular-price">
                                    <span class="product-price">$59.00</span>
                            </span>
                        </div>
                    </div>
                    <div class="single-product-store">
                        <div class="single-product">
                            <a href="#"><img src="{{asset('asset/web/img/product/product2.png')}}" alt="product"></a>
                            <div class="overlay"></div>
                            <div class="product-info">
                                <ul>
                                    <li><a href="#" title="Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="Campare"><i class="fa fa-compress"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="http://www.radiustheme.com/demo/html/gymedge/one-page/single-product.html">Product Title Here</a></h3>
                            <div class="review">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="uncolor"><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <span class="regular-price">
                                    <span class="product-price">$59.00</span>
                            </span>
                        </div>
                    </div>
                    <div class="single-product-store">
                        <div class="single-product">
                            <a href="#"><img src="{{asset('asset/web/img/product/product3.png')}}" alt="product"></a>
                            <div class="overlay"></div>
                            <div class="product-info">
                                <ul>
                                    <li><a href="#" title="Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="Campare"><i class="fa fa-compress"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="http://www.radiustheme.com/demo/html/gymedge/one-page/single-product.html">Product Title Here</a></h3>
                            <div class="review">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="uncolor"><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <span class="regular-price">
                                    <span class="product-price">$59.00</span>
                            </span>
                        </div>
                    </div>
                    <div class="single-product-store">
                        <div class="single-product">
                            <a href="#"><img src="{{asset('asset/web/img/product/product4.png')}}" alt="product"></a>
                            <div class="overlay"></div>
                            <div class="product-info">
                                <ul>
                                    <li><a href="#" title="Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="Campare"><i class="fa fa-compress"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="http://www.radiustheme.com/demo/html/gymedge/one-page/single-product.html">Product Title Here</a></h3>
                            <div class="review">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="uncolor"><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <span class="regular-price">
                                    <span class="product-price">$59.00</span>
                            </span>
                        </div>
                    </div>
                    <div class="single-product-store">
                        <div class="single-product">
                            <a href="#"><img src="{{asset('asset/web/img/product/product1.png')}}" alt="product"></a>
                            <div class="overlay"></div>
                            <div class="product-info">
                                <ul>
                                    <li><a href="#" title="Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="Campare"><i class="fa fa-compress"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="http://www.radiustheme.com/demo/html/gymedge/one-page/single-product.html">Product Title Here</a></h3>
                            <div class="review">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="uncolor"><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <span class="regular-price">
                                    <span class="product-price">$59.00</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End online store area -->
        <!-- Counter Area Start Here -->
        <div class="counter-area" style="background-image: url('{{asset('asset/web/img/banner/counter-back.jpg')}}');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 counter1-box wow fadeInDown" data-wow-duration=".5s" data-wow-delay=".20s">
                        <h2 class="counter">1520</h2>
                        <p>Satisfied Customers</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 counter1-box wow fadeInDown" data-wow-duration=".5s" data-wow-delay=".40s">
                        <h2 class="counter">23</h2>
                        <p>Trainers</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 counter1-box wow fadeInDown" data-wow-duration=".5s" data-wow-delay=".60s">
                        <h2 class="counter">199</h2>
                        <p>Received Awards</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 counter1-box wow fadeInDown" data-wow-duration=".5s" data-wow-delay=".80s">
                        <h2 class="counter">130</h2>
                        <p>Equipments</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Area End Here -->
        <!-- Start latest news area -->
        <div class="latest-news-area nav-on-hover" id="news">
            <div class="container">
                <div class="section-title">
                    <h2>Latest News</h2>
                </div>
            </div>
            <div class="container">
                <div class="gym-carousel nav-control-top" data-loop="true" data-items="3" data-margin="30" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true" data-r-large-dots="false">
                    <div class="single-latest-news">
                        <div class="single-news">
                            <div class="single-image"><img src="{{asset('asset/web/img/news1.jpg')}}" alt="news1"></div>
                            <div class="date">20
                                <br>Jan
                                <br>2016</div>
                        </div>
                        <div class="news-content">
                            <h3><a href="http://www.radiustheme.com/demo/html/gymedge/one-page/single-news.html">Body Combat</a></h3>
                            <p>BodyCombat is the empowering cardio workout are where you are exercitation ullamco totally unleashed. This fiercely ...</p>
                        </div>
                    </div>
                    <div class="single-latest-news">
                        <div class="single-news">
                            <div class="single-image"><img src="{{asset('asset/web/img/news2.jpg')}}" alt="news2"></div>
                            <div class="date">20
                                <br>Jan
                                <br>2016</div>
                        </div>
                        <div class="news-content">
                            <h3><a href="http://www.radiustheme.com/demo/html/gymedge/one-page/single-news.html">Zumba Fitness</a></h3>
                            <p>BodyCombat is the empowering cardio workout are where you are exercitation ullamco totally unleashed. This fiercely ...</p>
                        </div>
                    </div>
                    <div class="single-latest-news">
                        <div class="single-news">
                            <div class="single-image"><img src="{{asset('asset/web/img/news3.jpg')}}" alt="news3"></div>
                            <div class="date">20
                                <br>Jan
                                <br>2016</div>
                        </div>
                        <div class="news-content">
                            <h3><a href="http://www.radiustheme.com/demo/html/gymedge/one-page/single-news.html">Running Practice</a></h3>
                            <p>BodyCombat is the empowering cardio workout are where you are exercitation ullamco totally unleashed. This fiercely ...</p>
                        </div>
                    </div>
                    <div class="single-latest-news">
                        <div class="single-news">
                            <div class="single-image"><img src="{{asset('asset/web/img/news1.jpg')}}" alt="news1"></div>
                            <div class="date">20
                                <br>Jan
                                <br>2016</div>
                        </div>
                        <div class="news-content">
                            <h3><a href="http://www.radiustheme.com/demo/html/gymedge/one-page/single-news.html">Body Combat</a></h3>
                            <p>BodyCombat is the empowering cardio workout are where you are exercitation ullamco totally unleashed. This fiercely ...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End latest news area -->
        <!-- Start Contact page area -->
        <div class="contact-us-area" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <form class="form-horizontal contact-form" id="contact-form" role="form">
                            <fieldset>
                                <!-- Form Name -->
                                <legend>Contact Form</legend>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="control-label pull-left"><i class="fa fa-user" aria-hidden="true"></i></label>
                                    <div class="media-body">
                                        <input id="form-name" name="textinput" placeholder="Name" class="form-control input-md" type="text" data-error="Name field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="control-label pull-left"><i class="fa fa-envelope-o" aria-hidden="true"></i></label>
                                    <div class="media-body">
                                        <input id="form-email" name="textinput" placeholder="E-mail" class="form-control input-md" type="text" data-error="E-mail field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="control-label pull-left"><i class="fa fa-phone" aria-hidden="true"></i></label>
                                    <div class="media-body">
                                        <input id="form-phone" name="textinput" placeholder="Phone" class="form-control input-md" type="text" data-error="Phone field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="control-label arealebel pull-left"><i class="fa fa-envelope" aria-hidden="true"></i></label>
                                    <div class="media-body">
                                        <textarea class="textarea form-control" id="form-message" name="textarea" placeholder="Message" data-error="Message field is required" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="form-group send-button">
                                    <div class="media-body">
                                        <button type="submit" class="btn-read-more-fill btn-send">Send Message</button>
                                    </div>
                                </div>
                                <div class='form-response'></div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7">
                        <div id="googleMap" style="width:100%;height:485px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact page area -->
        <!-- Start logo showcase area -->
        <div class="logo-showcase-area nav-on-focus">
            <div class="container">
                <div class="gym-carousel nav-control-middle-opacity" data-loop="true" data-items="6" data-margin="30" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="3" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="4" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="5" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="6" data-r-large-nav="true" data-r-large-dots="false">
                    <div class="single-logo-area">
                        <div class="single-logo">
                            <a href="#"><img src="{{asset('asset/web/img/client/1.jpg')}}" alt="client1"></a>
                        </div>
                    </div>
                    <div class="single-logo-area">
                        <div class="single-logo">
                            <a href="#"><img src="{{asset('asset/web/img/client/2.jpg')}}" alt="client2"></a>
                        </div>
                    </div>
                    <div class="single-logo-area">
                        <div class="single-logo">
                            <a href="#"><img src="{{asset('asset/web/img/client/3.jpg')}}" alt="client3"></a>
                        </div>
                    </div>
                    <div class="single-logo-area">
                        <div class="single-logo">
                            <a href="#"><img src="{{asset('asset/web/img/client/4.jpg')}}" alt="client4"></a>
                        </div>
                    </div>
                    <div class="single-logo-area">
                        <div class="single-logo">
                            <a href="#"><img src="i{{asset('asset/web/mg/client/5.jpg')}}" alt="client5"></a>
                        </div>
                    </div>
                    <div class="single-logo-area">
                        <div class="single-logo">
                            <a href="#"><img src="{{asset('asset/web/img/client/6.jpg')}}" alt="client6"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End logo showcase area -->
        <!-- Start footer Area -->
        <footer>
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="about-company">
                                <h3>About Company</h3>
                                <p>Praesent vel rutrum purus. Nam vel dui eu risus duis dignissim dignissim. Suspen disse at eros tempus, congueconsequat.Fusce sit amet urna feugiat.Praesent vel rutrum purus. Nam vel dui eu risus.</p>
                                <div class="social-icons">
                                    <ul class="social-link">
                                        <li class="first">
                                            <a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="second">
                                            <a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="third">
                                            <a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="fourth">
                                            <a class="pint" href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="five">
                                            <a class="skype" href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="last">
                                            <a class="youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="twitter-area">
                                <h3>Twitter Feed</h3>
                                <div class="twitter-list">
                                    <ul>
                                        <li>
                                            <p><i class="fa fa-twitter" aria-hidden="true"></i>Looking for an awesome CREATIVE WordPress Theme? Esquise run even better.</p>
                                            <a href="#">http://t.co/0WWEMQEQ48</a>
                                            <p><span>3 Days ago</span></p>
                                        </li>
                                        <li>
                                            <p><i class="fa fa-twitter" aria-hidden="true"></i>Looking for an awesome CREATIVE WordPress Theme? Esquise run even better.</p>
                                            <a href="#">http://t.co/0WWEMQEQ48</a>
                                            <p><span>3 Days ago</span></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="flickr-photos">
                                <h3>Flickr Photos</h3>
                                <div class="flickr-list">
                                    <ul>
                                        <li>
                                            <a class="fancybox" href="{{asset('asset/web/img/flickr/flickr1.png')}}" data-fancybox-group="flickr" title="flickr1"><img src="{{asset('asset/web/img/flickr/flickr1.png')}}" alt="flickr1"></a>
                                        </li>
                                        <li>
                                            <a class="fancybox" href="{{asset('asset/web/img/flickr/flickr2.png')}}" data-fancybox-group="flickr" title="flickr2"><img src="{{asset('asset/web/img/flickr/flickr2.png')}}" alt="flickr2"></a>
                                        </li>
                                        <li>
                                            <a class="fancybox" href="{{asset('asset/web/img/flickr/flickr3.png')}}" data-fancybox-group="flickr" title="flickr3"><img src="{{asset('asset/web/img/flickr/flickr3.png')}}" alt="flickr3"></a>
                                        </li>
                                        <li>
                                            <a class="fancybox" href="{{asset('asset/web/img/flickr/flickr4.png')}}" data-fancybox-group="flickr" title="flickr4"><img src="{{asset('asset/web/img/flickr/flickr4.png')}}" alt="flickr4"></a>
                                        </li>
                                        <li>
                                            <a class="fancybox" href="{{asset('asset/web/img/flickr/flickr5.png')}}" data-fancybox-group="flickr" title="flickr5"><img src="{{asset('asset/web/img/flickr/flickr5.png')}}" alt="flickr5"></a>
                                        </li>
                                        <li>
                                            <a class="fancybox" href="{{asset('asset/web/img/flickr/flickr6.png')}}" data-fancybox-group="flickr" title="flickr6"><img src="{{asset('asset/web/img/flickr/flickr6.png')}}" alt="flickr6"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="corporate-office">
                                <h3>Corporate Office</h3>
                                <div class="corporate-address">
                                    <ul>
                                        <li><i class="fa fa-send" aria-hidden="true"></i>44 New Design Street, rne 005</li>
                                        <li><i class="fa fa-phone" aria-hidden="true"></i>(01) 800 433 633</li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i>info@gymedge.com</li>
                                        <li><i class="fa fa-fax" aria-hidden="true"></i>Fax : (123) 4657890</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End footer Area -->
            <!-- Start copyright area -->
            <div class="copy-right-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <div class="copy-right">
                                <p>© Copyrights gymedge 2016. All rights reserved. Designed by<a href="https://www.radiustheme.com/"> RadiusTheme</a></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="visa-card">
                                <ul>
                                    <li>
                                        <a href="#"><img src="{{asset('asset/web/img/visa-card.png')}}" alt="visa-card"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('asset/web/img/descover.png')}}" alt="descover"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('asset/web/img/paypal.png')}}" alt="paypal"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('asset/web/img/card.png')}}" alt="card"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End copyright area -->
    </div>
    <!-- End wrapper -->
    <a href="#" class="scrollToTop"></a>
    <!-- jquery
        ============================================ -->
    <script src="{{asset('asset/web/js/vendor/jquery-1.11.3.min.js')}}"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{asset('asset/web/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/web/js/bootstrap-tabcollapse.js')}}"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{asset('asset/web/js/jquery.meanmenu.min.js')}}"></script>
    <!-- Owl Cauosel JS 
        ============================================ -->
    <script src="{{asset('asset/web/vendor/OwlCarousel/owl.carousel.min.js')}}" type="text/javascript"></script>
    <!-- Nivo slider js
        ============================================ -->
    <script src="{{asset('asset/web/css/custom-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/web/css/custom-slider/home.js')}}" type="text/javascript"></script>
    <!-- Zoom JS
        ============================================ -->
    <script src="{{asset('asset/web/js/jquery.zoom.js')}}"></script>
    <!-- Isotope JS
        ============================================ -->
    <script src="{{asset('asset/web/js/isotope.pkgd.js')}}"></script>
    <!-- One Page menu action JS
        ============================================ -->
    <script src="{{asset('asset/web/js/jquery.nav.js')}}"></script>
    <!-- Counter Up JS
        ============================================ -->
    <script src="{{asset('asset/web/js/waypoints.min.js')}}"></script>
    <script src="{{asset('asset/web/js/jquery.counterup.min.js')}}"></script>
    <!-- Magic Popup js 
        ============================================-->
    <script src="{{asset('asset/web/js/jquery.magnific-popup.min.js" type="text/javascript')}}"></script>
    <!-- Wow JS
        ============================================ -->
    <script src="{{asset('asset/web/js/wow.min.js')}}"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="{{asset('asset/web/js/plugins.js')}}"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgREM8KO8hjfbOC0R_btBhQsEQsnpzFGQ"></script>
    <!-- Validator js 
        ============================================ -->
    <script src="{{asset('asset/web/js/validator.min.js')}}" type="text/javascript"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{asset('asset/web/js/main.js')}}"></script>
</body>


<!-- Mirrored from radiustheme.com/demo/html/gymedge/one-page/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Mar 2020 05:38:00 GMT -->
</html>

