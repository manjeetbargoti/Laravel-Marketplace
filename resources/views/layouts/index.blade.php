<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>4in1 Telecom || Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/icon/favicon.png') }}">

    <!-- All CSS Files -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- Nivo-slider css -->
    <link rel="stylesheet" href="{{ asset('frontend/lib/css/nivo-slider.css') }}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{ asset('frontend/css/core.css') }}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{ asset('frontend/css/shortcode/shortcodes.css') }}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <!-- Template color css -->
    <link href="{{ asset('frontend/css/color/color-core.css') }}" data-style="styles" rel="stylesheet">
    <!-- User style -->
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('frontend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">

        <!-- START HEADER AREA -->
        <header class="header-area header-wrapper">
            <!-- header-top-bar -->
            <div class="header-top-bar plr-185">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 hidden-xs">
                            <div class="call-us">
                                <p class="mb-0 roboto">(+88) 01234-567890</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="top-link clearfix">
                                <ul class="link f-right">
                                    <li>
                                        <a href="{{ url('/my-account') }}">
                                            <i class="zmdi zmdi-account"></i>
                                            My Account
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/wishlist') }}">
                                            <i class="zmdi zmdi-favorite"></i>
                                            Wish List (0)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/login') }}">
                                            <i class="zmdi zmdi-lock"></i>
                                            Login
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-middle-area -->
            <div id="sticky-header" class="header-middle-area plr-185">
                <div class="container-fluid">
                    <div class="full-width-mega-dropdown">
                        <div class="row">
                            <!-- logo -->
                            <div class="col-md-2 col-sm-6 col-xs-12">
                                <div class="logo">
                                    <a href="{{ url('/') }}">4in1 Telecom</a>
                                </div>
                            </div>
                            <!-- primary-menu -->
                            <div class="col-md-8 hidden-sm hidden-xs">
                                <nav id="primary-menu">
                                    <ul class="main-menu text-center">
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li class="mega-parent"><a href="{{ url('/shop') }}">Products</a>
                                            <div class="mega-menu-area clearfix">
                                                <div class="mega-menu-link f-left">
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Smart Phone</li>
                                                        <li>
                                                            <a href="{{ url('/#') }}">All Mobile Phones</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}">Smart phones</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}">Android Mobiles</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}">Windows Mobiles</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}">Refurbished Mobiles</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}">All Mobile Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}">Cases & Covers</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Note Book</li>
                                                        <li>
                                                            <a href="{{ url('/#') }}">All Note Books</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}">Smart notebooks</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}">Android Note Book</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}">Windows Note Books</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}">Refurbished Note Books</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}">Note Books Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}">Cases & Covers</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Tablets</li>
                                                        <li>
                                                            <a href=""{{ url('/#') }}>All Tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}">Smart tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}">Android Tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}">Windows Tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}">Refurbished Tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}">Tablets Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}">Cases & Covers</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mega-menu-photo f-left">
                                                    <a href="{{ url('/#') }}">
                                                        <img src="{{ asset('frontend/img/mega-menu/1.jpg') }}" alt="mega menu image">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mega-parent"><a href="{{ url('/#') }}">Pages</a>
                                            <div class="mega-menu-area mega-menu-area-2 clearfix">
                                                <div class="mega-menu-link mega-menu-link-2  f-left">
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">page list</li>
                                                        <li>
                                                            <a href="{{ url('/shop') }}">Shop</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/single-product') }}">Single Product</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">page list</li>
                                                        <li>
                                                            <a href="{{ url('/cart') }}">Shopping Cart</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/wishlist') }}">Wishlist</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/checkout') }}">Checkout</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/order') }}">Order</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/login') }}">Login</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/my-account') }}">My Account</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/about') }}">About us</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/4o4') }}">404</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="{{ url('/blog') }}">Blog</a>
                                            <ul class="dropdwn">
                                                <li><a href="{{ url('/blog-left-sidebar') }}">Dropdown Repeat</a>
                                                    <ul class="dropdwn-repeat">
                                                        <li>
                                                            <a href="{{ url('/blog') }}">Blog</a>
                                                        </li>
                                                        <li>
                                                            <a href="s">Blog Details</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/blog') }}">Blog</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/single-blog') }}">Blog Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ url('/about') }}">About us</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- header-search & total-cart -->
                            <div class="col-md-2 col-sm-6 col-xs-12">
                                <div class="search-top-cart  f-right">
                                    <!-- header-search -->
                                    <div class="header-search f-left">
                                        <div class="header-search-inner">
                                           <button class="search-toggle">
                                            <i class="zmdi zmdi-search"></i>
                                           </button>
                                            <form action="#">
                                                <div class="top-search-box">
                                                    <input type="text" placeholder="Search here your product...">
                                                    <button type="submit">
                                                        <i class="zmdi zmdi-search"></i>
                                                    </button>
                                                </div>
                                            </form> 
                                        </div>
                                    </div>
                                    <!-- total-cart -->
                                    <div class="total-cart f-left">
                                        <div class="total-cart-in">
                                            <div class="cart-toggler">
                                                <a href="{{ url('/#') }}">
                                                    <span class="cart-quantity">02</span><br>
                                                    <span class="cart-icon">
                                                        <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                    </span>
                                                </a>                            
                                            </div>
                                            <ul>
                                                <li>
                                                    <div class="top-cart-inner your-cart">
                                                        <h5 class="text-capitalize">Your Cart</h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="total-cart-pro">
                                                        <!-- single-cart -->
                                                        <div class="single-cart clearfix">
                                                            <div class="cart-img f-left">
                                                                <a href="{{ url('/#') }}">
                                                                    <img src="{{ asset('frontend/img/cart/1.jpg') }}" alt="Cart Product" />
                                                                </a>
                                                                <div class="del-icon">
                                                                    <a href="{{ url('/#') }}">
                                                                        <i class="zmdi zmdi-close"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="cart-info f-left">
                                                                <h6 class="text-capitalize">
                                                                    <a href="{{ url('/#') }}">Dummy Product Name</a>
                                                                </h6>
                                                                <p>
                                                                    <span>Brand <strong>:</strong></span>Brand Name
                                                                </p>
                                                                <p>
                                                                    <span>Model <strong>:</strong></span>Grand s2
                                                                </p>
                                                                <p>
                                                                    <span>Color <strong>:</strong></span>Black, White
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- single-cart -->
                                                        <div class="single-cart clearfix">
                                                            <div class="cart-img f-left">
                                                                <a href="{{ url('/#') }}">
                                                                    <img src="{{ asset('frontend/img/cart/1.jpg') }}" alt="Cart Product" />
                                                                </a>
                                                                <div class="del-icon">
                                                                    <a href="{{ url('/#') }}">
                                                                        <i class="zmdi zmdi-close"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="cart-info f-left">
                                                                <h6 class="text-capitalize">
                                                                    <a href="{{ url('/#') }}">Dummy Product Name</a>
                                                                </h6>
                                                                <p>
                                                                    <span>Brand <strong>:</strong></span>Brand Name
                                                                </p>
                                                                <p>
                                                                    <span>Model <strong>:</strong></span>Grand s2
                                                                </p>
                                                                <p>
                                                                    <span>Color <strong>:</strong></span>Black, White
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="top-cart-inner subtotal">
                                                        <h4 class="text-uppercase g-font-2">
                                                            Total  =  
                                                            <span>$ 500.00</span>
                                                        </h4>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="top-cart-inner view-cart">
                                                        <h4 class="text-uppercase">
                                                            <a href="{{ url('/#') }}">View cart</a>
                                                        </h4>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="top-cart-inner check-out">
                                                        <h4 class="text-uppercase">
                                                            <a href="{{ url('/#') }}">Check out</a>
                                                        </h4>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER AREA -->

        <!-- START MOBILE MENU AREA -->
        <div class="mobile-menu-area hidden-lg hidden-md">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li>
                                        <a href="{{ url('/shop') }}">Products</a>
                                    </li>
                                    <li><a href="{{ url('/#') }}">Pages</a>
                                        <ul>
                                            <li>
                                                <a href="{{ url('/shop') }}">Shop</a>
                                            <li>
                                                <a href="{{ url('/single-product') }}">Single Product</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/cart') }}">Shopping Cart</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/wishlist') }}">Wishlist</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/checkout') }}">Checkout</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/order') }}">Order</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/login') }}">Login</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/my-account') }}">My Account</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/about') }}">About us</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/404') }}">404</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('/blog') }}">Blog</a>
                                        <ul>
                                            <li>
                                                <a href="{{ url('/blog') }}">Blog</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/single-blog') }}">Blog Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ url('/about') }}">About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MOBILE MENU AREA -->


        

         <!-- Dynamic Content -->
            @yield('content')
         <!-- End Dynamic Content -->




        <!-- START SLIDER AREA -->
        <div class="slider-area youtube-bg bg-opacity-black-60 dotted-overlay ptb-150 mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="slider-desc-3 slider-desc-4  text-center">
                            <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                <h1 class="slider2-title-2"></h1>
                            </div>
                            <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                                <h2 class="slider2-title-3"></h2>
                            </div>
                            <div class="slider-button wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.5s">
                                <a href="{{ url('/#') }}" class="button extra-small button-white">
                                    <span class="text-uppercase">Buy now</span>
                                </a>
                            </div>        
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- END SLIDER AREA -->

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">

            <!-- BY BRAND SECTION START-->
            <div class="by-brand-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-left mb-40">
                                <h2 class="uppercase">By Brands</h2>
                                <h6>There are many variations of passages of brands available,</h6>
                            </div>
                        </div>
                    </div>
                    <div class="by-brand-product">
                        <div class="row active-by-brand slick-arrow-2">
                            <!-- single-brand-product start -->
                            <div class="col-xs-12">
                                <div class="single-brand-product">
                                    <a href="{{ url('/single-product') }}"><img src="{{ asset('frontend/img/product/5.jpg') }}" alt=""></a>
                                    <h3 class="brand-title text-gray">
                                        <a href="{{ url('/#') }}">Brand name</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- single-brand-product end -->
                            <!-- single-brand-product start -->
                            <div class="col-xs-12">
                                <div class="single-brand-product">
                                    <a href="{{ url('/single-product') }}"><img src="{{ asset('frontend/img/product/6.jpg') }}" alt=""></a>
                                    <h3 class="brand-title text-gray">
                                        <a href="{{ url('/#') }}">Brand name</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- single-brand-product end -->
                            <!-- single-brand-product start -->
                            <div class="col-xs-12">
                                <div class="single-brand-product">
                                    <a href="{{ url('/single-product') }}"><img src="{{ asset('frontend/img/product/7.jpg') }}" alt=""></a>
                                    <h3 class="brand-title text-gray">
                                        <a href="{{ url('/#') }}">Brand name</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- single-brand-product end -->
                            <!-- single-brand-product start -->
                            <div class="col-xs-12">
                                <div class="single-brand-product">
                                    <a href="{{ url('/single-product') }}"><img src="{{ asset('frontend/img/product/8.jpg') }}" alt=""></a>
                                    <h3 class="brand-title text-gray">
                                        <a href="{{ url('/#') }}">Brand name</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- single-brand-product end -->
                            <!-- single-brand-product start -->
                            <div class="col-xs-12">
                                <div class="single-brand-product">
                                    <a href="{{ url('/single-product') }}"><img src="{{ asset('frontend/img/product/8.jpg') }}" alt=""></a>
                                    <h3 class="brand-title text-gray">
                                        <a href="{{ url('/#') }}">Brand name</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- single-brand-product end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- BY BRAND SECTION END -->

            <!-- FEATURED PRODUCT SECTION START -->
            <div class="featured-product-section mb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-left mb-40">
                                <h2 class="uppercase">Featured product</h2>
                                <h6>There are many variations of passages of brands available,</h6>
                            </div>
                        </div>
                    </div>
                    <div class="featured-product">
                        <div class="row active-featured-product slick-arrow-2">
                            <!-- product-item start -->
                            <div class="col-xs-12">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="{{ url('/single-product') }}">
                                            <img src="{{ asset('frontend/img/product/1.jpg') }}" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="{{ url('/single-product') }}">Product Name</a>
                                        </h6>
                                        <div class="pro-rating">
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                        </div>
                                        <h3 class="pro-price">$ 869.00</h3>
                                        <ul class="action-button">
                                            <li>
                                                <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- product-item end -->
                            <!-- product-item start -->
                            <div class="col-xs-12">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="{{ url('/single-product') }}">
                                            <img src="{{ asset('frontend/img/product/2.jpg') }}" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="{{ url('/single-product') }}">Product Name</a>
                                        </h6>
                                        <div class="pro-rating">
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                        </div>
                                        <h3 class="pro-price">$ 869.00</h3>
                                        <ul class="action-button">
                                            <li>
                                                <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- product-item end -->
                            <!-- product-item start -->
                            <div class="col-xs-12">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="{{ url('/single-product') }}">
                                            <img src="{{ asset('frontend/img/product/3.jpg') }}" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="{{ url('/single-product') }}">Product Name</a>
                                        </h6>
                                        <div class="pro-rating">
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                        </div>
                                        <h3 class="pro-price">$ 869.00</h3>
                                        <ul class="action-button">
                                            <li>
                                                <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- product-item end -->
                            <!-- product-item start -->
                            <div class="col-xs-12">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="{{ url('/single-product') }}">
                                            <img src="{{ asset('frontend/img/product/4.jpg') }}" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="{{ url('/single-product') }}">Product Name</a>
                                        </h6>
                                        <div class="pro-rating">
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                        </div>
                                        <h3 class="pro-price">$ 869.00</h3>
                                        <ul class="action-button">
                                            <li>
                                                <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- product-item end -->
                            <!-- product-item start -->
                            <div class="col-xs-12">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="{{ url('/single-product') }}">
                                            <img src="{{ asset('frontend/img/product/4.jpg') }}" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="{{ url('/single-product') }}">Product Name</a>
                                        </h6>
                                        <div class="pro-rating">
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                            <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                        </div>
                                        <h3 class="pro-price">$ 869.00</h3>
                                        <ul class="action-button">
                                            <li>
                                                <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- product-item end -->
                        </div>
                    </div>          
                </div>            
            </div>
            <!-- FEATURED PRODUCT SECTION END -->

            <!-- UP COMMING PRODUCT SECTION START -->
            <div class="up-comming-product-section mb-80">
                <div class="container">
                    <div class="row">
                        <!-- up-comming-pro -->
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="up-comming-pro gray-bg clearfix">
                                <div class="up-comming-pro-img f-left">
                                    <a href="{{ url('/#') }}">
                                        <img src="{{ asset('frontend/img/up-comming/1.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="up-comming-pro-info f-left">
                                    <h3><a href="{{ url('/#') }}">Dummy Product Name</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitest, sed do eiusmod tempor incididunt ut labore et dolores top magna aliqua. Ut enim ad minim veniam, quis nostrud exer citation ullamco laboris nisi ut aliquip ex ea commodo consequat. laborum. </p>
                                    <div class="up-comming-time">
                                        <div data-countdown="2020/02/02"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 hidden-sm col-xs-12">
                            <div class="banner-item banner-1">
                                <div class="ribbon-price">
                                    <span>$ 896.00</span>
                                </div>
                                <div class="banner-img">
                                    <a href="{{ url('/#') }}"><img src="{{ asset('frontend/img/banner/1.jpg') }}" alt=""></a>
                                </div>
                                <div class="banner-info">
                                    <h3><a href="{{ url('/#') }}">Product Name</a></h3>
                                    <ul class="banner-featured-list">
                                        <li>
                                            <i class="zmdi zmdi-check"></i><span>Lorem ipsum dolor</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check"></i><span>amet, consectetur</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check"></i><span>adipisicing elitest,</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check"></i><span>eiusmod tempor</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check"></i><span>labore et dolore.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- UP COMMING PRODUCT SECTION END -->

            <!-- PRODUCT TAB SECTION START -->
            <div class="product-tab-section mb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="section-title text-left mb-40">
                                <h2 class="uppercase">product list</h2>
                                <h6>There are many variations of passages of brands available,</h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="pro-tab-menu text-right">
                                <!-- Nav tabs -->
                                <ul class="" >
                                    <li class="active"><a href="{{ url('/#popular-product') }}" data-toggle="tab">Popular Products </a></li>
                                    <li><a href="{{ url('/#new-arrival') }}" data-toggle="tab">New Arrival</a></li>
                                    <li><a href="{{ url('/#best-seller') }}"  data-toggle="tab">Best Seller</a></li>
                                    <li><a href="{{ url('/#special-offer') }}"  data-toggle="tab">Special Offer</a></li>
                                </ul>
                            </div>                       
                        </div>
                    </div>
                    <div class="product-tab">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- popular-product start -->
                            <div class="tab-pane active" id="popular-product">
                                <div class="row">
                                    <!-- product-item start -->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/7.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/2.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/9.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/4.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/10.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/11.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 hidden-sm col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/8.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 hidden-sm col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/12.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                </div>
                            </div>
                            <!-- popular-product end -->
                            <!-- new-arrival start -->
                            <div class="tab-pane" id="new-arrival">
                                <div class="row">
                                    <!-- product-item start -->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/1.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/3.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/5.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/6.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="single-product.html {{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="single-product.html {{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/12.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/8.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 hidden-sm col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/11.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 hidden-sm col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/10.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                </div>                                        
                            </div>
                            <!-- new-arrival end -->
                            <!-- best-seller start -->
                            <div class="tab-pane" id="best-seller">
                                <div class="row">
                                    <!-- product-item start -->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/12.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/11.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/10.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/8.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/1.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-prodcut') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/2.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 hidden-sm col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/3.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 hidden-sm col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/4.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                </div>                                        
                            </div>
                            <!-- best-seller end -->
                            <!-- special-offer start -->
                            <div class="tab-pane" id="special-offer">
                                <div class="row">
                                    <!-- product-item start -->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/6.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/12.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/1.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/8.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/9.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-prodcut') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/7.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 hidden-sm col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/5.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-md-3 hidden-sm col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{ url('/single-product') }}">
                                                    <img src="{{ asset('frontend/img/product/1.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/single-product') }}">Product Name</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                </div>                                        
                            </div>
                            <!-- special-offer end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- PRODUCT TAB SECTION END -->

            <!-- BLOG SECTION START -->
            <div class="blog-section mb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-left mb-40">
                                <h2 class="uppercase">Latest blog</h2>
                                <h6>There are many variations of passages of brands available,</h6>
                            </div>
                        </div>
                    </div>
                    <div class="blog">
                        <div class="row active-blog">
                            <!-- blog-item start -->
                            <div class="col-xs-12">
                                <div class="blog-item">
                                    <img src="{{ asset('frontend/img/blog/1.jpg') }}" alt="">
                                    <div class="blog-desc">
                                        <h5 class="blog-title"><a href="{{ url('/single-blog') }}">dummy Blog name</a></h5>
                                        <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                        <div class="read-more">
                                            <a href="{{ url('/single-blog') }}">Read more</a>
                                        </div>
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-favorite"></i>89 Like</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-comments"></i>59 Comments</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-share"></i>29 Share</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- blog-item end -->
                            <!-- blog-item start -->
                            <div class="col-xs-12">
                                <div class="blog-item">
                                    <img src="{{ asset('frontend/img/blog/2.jpg') }}" alt="">
                                    <div class="blog-desc">
                                        <h5 class="blog-title"><a href="{{ url('/single-blog') }}">dummy Blog name</a></h5>
                                        <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                        <div class="read-more">
                                            <a href="{{ url('/single-blog') }}">Read more</a>
                                        </div>
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-favorite"></i>89 Like</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-comments"></i>59 Comments</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-share"></i>29 Share</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- blog-item end -->
                            <!-- blog-item start -->
                            <div class="col-xs-12">
                                <div class="blog-item">
                                    <img src="{{ asset('frontend/img/blog/3.jpg') }}" alt="">
                                    <div class="blog-desc">
                                        <h5 class="blog-title"><a href="{{ url('/single-blog') }}">dummy Blog name</a></h5>
                                        <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                        <div class="read-more">
                                            <a href="{{ url('/single-blog') }}">Read more</a>
                                        </div>
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-favorite"></i>89 Like</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-comments"></i>59 Comments</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-share"></i>29 Share</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- blog-item end -->
                            <!-- blog-item start -->
                            <div class="col-xs-12">
                                <div class="blog-item">
                                    <img src="{{ asset('frontend/img/blog/1.jpg') }}" alt="">
                                    <div class="blog-desc">
                                        <h5 class="blog-title"><a href="{{ url('/single-blog') }}">dummy Blog name</a></h5>
                                        <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                        <div class="read-more">
                                            <a href="{{ url('/single-blog') }}">Read more</a>
                                        </div>
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-favorite"></i>89 Like</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-comments"></i>59 Comments</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-share"></i>29 Share</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- blog-item end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- BLOG SECTION END -->                
        </section>
        <!-- End page content -->

        <!-- START FOOTER AREA -->
        <footer id="footer" class="footer-area">
            <div class="footer-top">
                <div class="container-fluid">
                    <div class="plr-185">
                        <div class="footer-top-inner gray-bg">
                            <div class="row">
                                <div class="col-lg-4 col-md-5 col-sm-4">
                                    <div class="single-footer footer-about">
                                        <div class="footer-logo">
                                            <img src="{{ asset('frontend/img/logo/logo.png') }}" alt="">
                                        </div>
                                        <div class="footer-brief">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the subas industry's standard dummy text ever since the 1500s,</p>
                                            <p>When an unknown printer took a galley of type and If you are going to use a passage of Lorem Ipsum scrambled it to make.</p>
                                        </div>
                                        <ul class="footer-social">
                                            <li>
                                                <a class="facebook" href="{{ url('/#') }}" title="Facebook"><i class="zmdi zmdi-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a class="google-plus" href="{{ url('/#') }}" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a>
                                            </li>
                                            <li>
                                                <a class="twitter" href="{{ url('/#') }}" title="Twitter"><i class="zmdi zmdi-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a class="rss" href="{{ url('/#') }}" title="RSS"><i class="zmdi zmdi-rss"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-2 hidden-md hidden-sm">
                                    <div class="single-footer">
                                        <h4 class="footer-title border-left">Shipping</h4>
                                        <ul class="footer-menu">
                                            <li>
                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-circle"></i><span>New Products</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-circle"></i><span>Discount Products</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-circle"></i><span>Best Sell Products</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-circle"></i><span>Popular Products</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-circle"></i><span>Manufactirers</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-circle"></i><span>Suppliers</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-circle"></i><span>Special Products</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4">
                                    <div class="single-footer">
                                        <h4 class="footer-title border-left">my account</h4>
                                        <ul class="footer-menu">
                                            <li>
                                                <a href="{{ url('/my-account') }}"><i class="zmdi zmdi-circle"></i><span>My Account</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/wishlist') }}"><i class="zmdi zmdi-circle"></i><span>My Wishlist</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/cart') }}"><i class="zmdi zmdi-circle"></i><span>My Cart</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/login') }}"><i class="zmdi zmdi-circle"></i><span>Sign In</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/login') }}"><i class="zmdi zmdi-circle"></i><span>Registration</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/checkout') }}"><i class="zmdi zmdi-circle"></i><span>Check out</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/order') }}"><i class="zmdi zmdi-circle"></i><span>Oder Complete</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="single-footer">
                                        <h4 class="footer-title border-left">Get in touch</h4>
                                        <div class="footer-message">
                                            <form action="">
                                                <input type="text" name="name" placeholder="Your name here...">
                                                <input type="text" name="email" placeholder="Your email here...">
                                                <textarea class="height-80" name="message" placeholder="Your messege here..."></textarea>
                                                <button class="submit-btn-1 mt-20 btn-hover-1" type="submit">submit message</button> 
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom black-bg">
                <div class="container-fluid">
                    <div class="plr-185">
                        <div class="copyright">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="copyright-text">
                                        <p>&copy; <a href="https://4in1telecommunications.com/" target="_blank">Four In One Telecommunications</a> 2020. All Rights Reserved.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <ul class="footer-payment text-right">
                                        <li>
                                            <a href="{{ url('/#') }}"><img src="{{ asset('frontend/img/payment/1.jpg') }}" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/#') }}"><img src="{{ asset('frontend/img/payment/2.jpg') }}" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/#') }}"><img src="{{ asset('frontend/img/payment/3.jpg') }}" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/#') }}"><img src="{{ asset('frontend/img/payment/4.jpg') }}" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER AREA -->

        <!-- START QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product clearfix">
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt="" src="{{ asset('frontend/img/product/quickview.jpg') }}">
                                    </div>
                                </div><!-- .product-images -->
                                
                                <div class="product-info">
                                    <h1>Aenean eu tristique</h1>
                                    <div class="price-box-3">
                                        <div class="s-price-box">
                                            <span class="new-price">£160.00</span>
                                            <span class="old-price">£190.00</span>
                                        </div>
                                    </div>
                                    <a href="{{ url('/single-product-left-sidebar') }}" class="see-all">See all features</a>
                                    <div class="quick-add-to-cart">
                                        <form method="post" class="cart">
                                            <div class="numbers-row">
                                                <input type="number" id="french-hens" value="3">
                                            </div>
                                            <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="quick-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.
                                    </div>
                                    <div class="social-sharing">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title-modal">Share this product</h3>
                                            <ul class="social-icons clearfix">
                                                <li>
                                                    <a class="facebook" href="{{ url('/#') }}" target="_blank" title="Facebook">
                                                        <i class="zmdi zmdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="google-plus" href="{{ url('/#') }}" target="_blank" title="Google +">
                                                        <i class="zmdi zmdi-google-plus"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="twitter" href="{{ url('/#') }}" target="_blank" title="Twitter">
                                                        <i class="zmdi zmdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="pinterest" href="{{ url('/#') }}" target="_blank" title="Pinterest">
                                                        <i class="zmdi zmdi-pinterest"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="rss" href="{{ url('/#') }}" target="_blank" title="RSS">
                                                        <i class="zmdi zmdi-rss"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .product-info -->
                            </div><!-- .modal-product -->
                        </div><!-- .modal-body -->
                    </div><!-- .modal-content -->
                </div><!-- .modal-dialog -->
            </div>
            <!-- END Modal -->
        </div>
        <!-- END QUICKVIEW PRODUCT -->
    </div>
    <!-- Body main wrapper end -->


    <!-- Placed JS at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="{{ asset('frontend/js/vendor/jquery-3.1.1.min.js') }}"></script>
    <!-- Bootstrap framework js -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- jquery.nivo.slider js -->
    <script src="{{ asset('frontend/lib/js/jquery.nivo.slider.js') }}"></script>
    <!-- All js plugins included in this file. -->
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>