<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>4in1 Telecom || Shop</title>
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
                                    <a href="{{ url('/') }}">
                                        <img src="{{ asset('frontend/img/logo/logo.png') }}" alt="main logo">
                                    </a>
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
                                                            <a href="{{ url('/#') }}">All Tablets</a>
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
                                                            <a href="{{ url('/My-account') }}">My Account</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/about') }}">About us</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/404') }}">404</a>
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
                                                <a href="{{ url('/My-accoutn') }}">My Account</a>
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

        <!-- BREADCRUMBS SETCTION START -->
        <div class="breadcrumbs-section plr-200 mb-80">
            <div class="breadcrumbs overlay-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="breadcrumbs-inner">
                                <h1 class="breadcrumbs-title">product grid view</h1>
                                <ul class="breadcrumb-list">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li>product grid view</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS SETCTION END -->

        <!-- Start page content -->
        <div id="page-content" class="page-wrapper">

            <!-- SHOP SECTION START -->
            <div class="shop-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-md-push-3 col-sm-12">
                            <div class="shop-content">
                                <!-- shop-option start -->
                                <div class="shop-option box-shadow mb-30 clearfix">
                                    <!-- Nav tabs -->
                                    <ul class="shop-tab f-left" role="tablist">
                                        <li class="active">
                                            <a href="{{ url('/#grid-view') }}" data-toggle="tab"><i class="zmdi zmdi-view-module"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/#list-view') }}" data-toggle="tab"><i class="zmdi zmdi-view-list-alt"></i></a>
                                        </li>
                                    </ul>
                                    <!-- short-by -->
                                    <div class="short-by f-left text-center">
                                        <span>Sort by :</span>
                                        <select>
                                            <option value="volvo">Newest items</option>
                                            <option value="saab">Saab</option>
                                            <option value="mercedes">Mercedes</option>
                                            <option value="audi">Audi</option>
                                        </select> 
                                    </div> 
                                    <!-- showing -->
                                    <div class="showing f-right text-right">
                                        <span>Showing : 01-09 of 17.</span>
                                    </div>                                   
                                </div>
                                <!-- shop-option end -->
                                <!-- Tab Content start -->
                                <div class="tab-content">
                                    <!-- grid-view -->
                                    <div role="tabpanel" class="tab-pane active" id="grid-view">
                                        <div class="row">
                                            <!-- product-item start -->
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="product-item">
                                                    <div class="product-img">
                                                        <a href="{{ url('/single-product') }}">
                                                            <img src="{{ asset('frontend/img/product/7.jpg') }}" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h6 class="product-title">
                                                            <a href="{{ url('/single-product') }}">Product Name </a>
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
                                            <div class="col-md-4 col-sm-4 col-xs-12">
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
                                            <div class="col-md-4 col-sm-4 col-xs-12">
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
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="product-item">
                                                    <div class="product-img">
                                                        <a href="{{ url('/single-product') }}">
                                                            <img src="{{ asset('frontned/img/product/4.jpg') }}" alt=""/>
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
                                            <div class="col-md-4 col-sm-4 col-xs-12">
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
                                            <div class="col-md-4 col-sm-4 col-xs-12">
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
                                            <div class="col-md-4 col-sm-4 col-xs-12">
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
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="product-item">
                                                    <div class="product-img">
                                                        <a href="{{ url('/single-product') }}">
                                                            <img src="{{ asset('fontend/img/product/12.jpg') }}" alt=""/>
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
                                            <div class="col-md-4 col-sm-4 col-xs-12">
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
                                    <!-- list-view -->
                                    <div role="tabpanel" class="tab-pane" id="list-view">
                                        <div class="row">
                                            <!-- product-item start -->
                                            <div class="col-md-12">
                                                <div class="shop-list product-item">
                                                    <div class="product-img">
                                                        <a href="{{ url('/single-product') }}">
                                                            <img src="{{ asset('frontend/img/product/7.jpg') }}" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="clearfix">
                                                            <h6 class="product-title f-left">
                                                                <a href="{{ url('/single-product') }}">Dummy Product Name </a>
                                                            </h6>
                                                            <div class="pro-rating f-right">
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                            </div>
                                                        </div>
                                                        <h6 class="brand-name mb-30">Brand Name</h6>
                                                        <h3 class="pro-price">$ 869.00</h3>
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
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
                                            <div class="col-md-12">
                                                <div class="shop-list product-item">
                                                    <div class="product-img">
                                                        <a href="{{ url('/single-product') }}">
                                                            <img src="{{ asset('frontend/img/product/10.jpg') }}" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="clearfix">
                                                            <h6 class="product-title f-left">
                                                                <a href="{{ url('/single-product') }}">Dummy Product Name </a>
                                                            </h6>
                                                            <div class="pro-rating f-right">
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                            </div>
                                                        </div>
                                                        <h6 class="brand-name mb-30">Brand Name</h6>
                                                        <h3 class="pro-price">$ 869.00</h3>
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
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
                                            <div class="col-md-12">
                                                <div class="shop-list product-item">
                                                    <div class="product-img">
                                                        <a href="{{ url('/single-product') }}">
                                                            <img src="{{ asset('frontend/img/product/4.jpg') }}" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="clearfix">
                                                            <h6 class="product-title f-left">
                                                                <a href="{{ url('/single-product') }}">Dummy Product Name </a>
                                                            </h6>
                                                            <div class="pro-rating f-right">
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                            </div>
                                                        </div>
                                                        <h6 class="brand-name mb-30">Brand Name</h6>
                                                        <h3 class="pro-price">$ 869.00</h3>
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
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
                                            <div class="col-md-12">
                                                <div class="shop-list product-item">
                                                    <div class="product-img">
                                                        <a href="{{ url('/single-product') }}">
                                                            <img src="{{ asset('frontend/img/product/8.jpg') }}" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="clearfix">
                                                            <h6 class="product-title f-left">
                                                                <a href="{{ url('/single-product') }}">Dummy Product Name </a>
                                                            </h6>
                                                            <div class="pro-rating f-right">
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                            </div>
                                                        </div>
                                                        <h6 class="brand-name mb-30">Brand Name</h6>
                                                        <h3 class="pro-price">$ 869.00</h3>
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
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
                                            <div class="col-md-12">
                                                <div class="shop-list product-item">
                                                    <div class="product-img">
                                                        <a href="{{ url('/single-product') }}">
                                                            <img src="{{ asset('frontend/img/product/2.jpg') }}" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="clearfix">
                                                            <h6 class="product-title f-left">
                                                                <a href="{{ url('/single-product') }}">Dummy Product Name </a>
                                                            </h6>
                                                            <div class="pro-rating f-right">
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                                <a href="{{ url('/#') }}v"><i class="zmdi zmdi-star-outline"></i></a>
                                                            </div>
                                                        </div>
                                                        <h6 class="brand-name mb-30">Brand Name</h6>
                                                        <h3 class="pro-price">$ 869.00</h3>
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
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
                                                                <a href="{{ url('/#') }}v" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-item end -->
                                        </div>                                        
                                    </div>
                                </div>
                                <!-- Tab Content end -->
                                <!-- shop-pagination start -->
                                <ul class="shop-pagination box-shadow text-center ptblr-10-30">
                                    <li><a href="{{ url('/#') }}"><i class="zmdi zmdi-chevron-left"></i></a></li>
                                    <li><a href="{{ url('/#') }}">01</a></li>
                                    <li><a href="{{ url('/#') }}">02</a></li>
                                    <li><a href="{{ url('/#') }}">03</a></li>
                                    <li><a href="{{ url('/#') }}">...</a></li>
                                    <li><a href="{{ url('/#') }}">05</a></li>
                                    <li class="active"><a href="{{ url('/#') }}"><i class="zmdi zmdi-chevron-right"></i></a></li>
                                </ul>
                                <!-- shop-pagination end -->
                            </div>
                        </div>
                        <div class="col-md-3 col-md-pull-9 col-sm-12">
                            <!-- widget-search -->
                            <aside class="widget-search mb-30">
                                <form action="#">
                                    <input type="text" placeholder="Search here...">
                                    <button type="submit"><i class="zmdi zmdi-search"></i></button>
                                </form>
                            </aside>
                            <!-- widget-categories -->
                            <aside class="widget widget-categories box-shadow mb-30">
                                <h6 class="widget-title border-left mb-20">Categories</h6>
                                <div id="cat-treeview" class="product-cat">
                                    <ul>
                                        <li class="closed"><a href="{{ url('/#') }}">Brand One</a>
                                            <ul>
                                                <li><a href="{{ url('/#') }}">Mobile</a></li>
                                                <li><a href="{{ url('/#') }}">Tab</a></li>
                                                <li><a href="{{ url('/#') }}">Watch</a></li>
                                                <li><a href="{{ url('/#') }}">Head Phone</a></li>
                                                <li><a href="{{ url('/#') }}">Memory</a></li>
                                            </ul>
                                        </li>                                       
                                        <li class="open"><a href="{{ url('/#') }}">Brand Two</a>
                                            <ul>
                                                <li><a href="{{ url('/#') }}">Mobile</a></li>
                                                <li><a href="{{ url('/#') }}">Tab</a></li>
                                                <li><a href="{{ url('/#') }}">Watch</a></li>
                                                <li><a href="{{ url('/#') }}">Head Phone</a></li>
                                                <li><a href="{{ url('/#') }}">Memory</a></li>
                                            </ul>
                                        </li>
                                        <li class="closed"><a href="{{ url('/#') }}">Accessories</a>
                                            <ul>
                                                <li><a href="{{ url('/#') }}">Footwear</a></li>
                                                <li><a href="{{ url('/#') }}">Sunglasses</a></li>
                                                <li><a href="{{ url('/#') }}">Watches</a></li>
                                                <li><a href="{{ url('/#') }}">Utilities</a></li>
                                            </ul>
                                        </li>
                                        <li class="closed"><a href="{{ url('/#') }}">Top Brands</a>
                                            <ul>
                                                <li><a href="{{ url('/#') }}">Mobile</a></li>
                                                <li><a href="{{ url('/#') }}">Tab</a></li>
                                                <li><a href="{{ url('/#') }}">Watch</a></li>
                                                <li><a href="{{ url('/#') }}">Head Phone</a></li>
                                                <li><a href="{{ url('/#') }}">Memory</a></li>
                                            </ul>
                                        </li>
                                        <li class="closed"><a href="{{ url('/#') }}">Jewelry</a>
                                            <ul>
                                                <li><a href="{{ url('/#') }}">Footwear</a></li>
                                                <li><a href="{{ url('/#') }}">Sunglasses</a></li>
                                                <li><a href="{{ url('/#') }}">Watches</a></li>
                                                <li><a href="{{ url('/#') }}">Utilities</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                            <!-- shop-filter -->
                            <aside class="widget shop-filter box-shadow mb-30">
                                <h6 class="widget-title border-left mb-20">Price</h6>
                                <div class="price_filter">
                                    <div class="price_slider_amount">
                                        <input type="submit"  value="You range :"/> 
                                        <input type="text" id="amount" name="price"  placeholder="Add Your Price" /> 
                                    </div>
                                    <div id="slider-range"></div>
                                </div>
                            </aside>
                            <!-- widget-color -->
                            <aside class="widget widget-color box-shadow mb-30">
                                <h6 class="widget-title border-left mb-20">color</h6>
                                <ul>
                                    <li class="color-1"><a href="{{ url('/#') }}">LightSalmon</a></li>
                                    <li class="color-2"><a href="{{ url('/#') }}">Dark Salmon</a></li>
                                    <li class="color-3"><a href="{{ url('/#') }}">Tomato</a></li>
                                    <li class="color-4"><a href="{{ url('/#') }}">Deep Sky Blue</a></li>
                                    <li class="color-5"><a href="{{ url('/#') }}">Electric Purple</a></li>
                                    <li class="color-6"><a href="{{ url('/#') }}">Atlantis</a></li>
                                </ul>
                            </aside>
                            <!-- operating-system -->
                            <aside class="widget operating-system box-shadow mb-30">
                                <h6 class="widget-title border-left mb-20">operating system</h6>
                                <form action="action_page.php">
                                    <label><input type="checkbox" name="operating-1" value="phone-1">Windows Phone</label><br>
                                    <label><input type="checkbox" name="operating-1" value="phone-1">Bleckgerry ios</label><br>
                                    <label><input type="checkbox" name="operating-1" value="phone-1">Android</label><br>
                                    <label><input type="checkbox" name="operating-1" value="phone-1">ios</label><br>
                                    <label><input type="checkbox" name="operating-1" value="phone-1">Windows Phone</label><br>
                                    <label><input type="checkbox" name="operating-1" value="phone-1">Symban</label><br>
                                    <label class="mb-0"><input type="checkbox" name="operating-1" value="phone-1">Bleckgerry os</label><br>
                                </form>
                            </aside>
                            <!-- widget-product -->
                            <aside class="widget widget-product box-shadow">
                                <h6 class="widget-title border-left mb-20">recent products</h6>
                                <!-- product-item start -->
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
                                        <h3 class="pro-price">$ 869.00</h3>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="{{ url('/single-product') }}">
                                            <img src="{{ asset('frontend/img/product/8.jpg')" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="{{ url('/single-product') }}">Product Name</a>
                                        </h6>
                                        <h3 class="pro-price">$ 869.00</h3>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
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
                                        <h3 class="pro-price">$ 869.00</h3>
                                    </div>
                                </div>
                                <!-- product-item end -->                               
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SHOP SECTION END -->             

        </div>
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
    <script src="{{ asset('frontend/js/bootstrap.min.js' }}"></script>
    <!-- jquery.nivo.slider js -->
    <script src="{{ asset('frontend/lib/js/jquery.nivo.slider.js') }}"></script>
    <!-- All js plugins included in this file. -->
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>