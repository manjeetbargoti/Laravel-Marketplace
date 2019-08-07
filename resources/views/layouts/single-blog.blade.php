<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>4in1 Telecom || Single Blog</title>
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
                                        <li><a href="blog.html">Blog</a>
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
                                                <a href="{{ url('/My-account') }}">My Account</a>
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
                                <h1 class="breadcrumbs-title">Single Blog</h1>
                                <ul class="breadcrumb-list">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li>Single Blog</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS SETCTION END -->

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">

            <!-- BLOG SECTION START -->
            <div class="blog-section mb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-xs-12">
                            <div class="blog-details-area">
                                <!-- blog-details-photo -->
                                <div class="blog-details-photo bg-img-1 p-20 mb-30">
                                    <img src="{{ asset('frontend/img/blog/10.jpg') }}" alt="">
                                    <div class="today-date bg-img-1">
                                        <span class="meta-date">30</span>
                                        <span class="meta-month">June</span>
                                    </div>
                                </div>
                                <!-- blog-like-share -->
                                <ul class="blog-like-share mb-20">
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
                                <!-- blog-details-title -->
                                <h3 class="blog-details-title mb-30">Dumm`y single blog name</h3>
                                <!-- blog-description -->
                                <div class="blog-description mb-60">
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belon gs to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour.</p>

                                    <div class="quote-author pl-30">
                                        <p class="quote-border pl-30">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charm of pleas ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>
                                    </div>

                                    <p>Which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour. One the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belong to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish.</p>

                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belon gs to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour.</p>    
                                </div>
                                <!-- blog-share-tags -->
                                <div class="blog-share-tags box-shadow clearfix mb-60">
                                    <div class="blog-share f-left">
                                        <p class="share-tags-title f-left">share</p>
                                        <ul class="footer-social f-left">
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
                                    <div class="blog-tags f-right">
                                        <p class="share-tags-title f-left">Tags</p>
                                        <ul class="blog-tags-list f-left">
                                            <li><a href="{{ url('/#') }}">Mobile</a></li>
                                            <li><a href="{{ url('/#') }}">IOS</a></li>
                                            <li><a href="{{ url('/#') }}">Windows</a></li>
                                            <li><a href="{{ url('/#') }}">Tab</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- author-post -->
                                <div class="media author-post box-shadow mb-60">
                                    <div class="media-left pr-20">
                                        <a href="{{ url('/#') }}">
                                            <img class="media-object" src="{{ asset('frontend/img/author/1.jpg') }}" alt="#">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading">
                                            <a href="{{ url('/#') }}">Subash Chandra Das</a>
                                        </h6>
                                        <p class="mb-0">No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursu pleasure rationally encounter conseques ences that are extremely painful.</p>
                                    </div>
                                </div>
                                <!-- comments on t this post -->
                                <div class="post-comments mb-60">
                                    <h4 class="blog-section-title border-left mb-30">comments on this product</h4>
                                    <!-- single-comments -->
                                    <div class="media mt-30">
                                        <div class="media-left pr-30">
                                            <a href="{{ url('/#') }}"><img class="media-object" src="{{ asset('frontend/img/author/2.jpg') }}" alt="#"></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="clearfix">
                                                <div class="name-commenter f-left">
                                                    <h6 class="media-heading"><a href="#">Gerald Barnes</a></h6>
                                                    <p class="mb-10">27 Jun, 2016 at 2:30pm</p>
                                                </div>
                                                <ul class="reply-delate f-right">
                                                    <li><a href="{{ url('/#') }}">Reply</a></li>
                                                    <li>/</li>
                                                    <li><a href="{{ url('/#') }}">Delate</a></li>
                                                </ul>
                                            </div>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis atestese bibendum feugiat ut eget eni Praesent  messages in con sectetur posuere dolor non.</p>
                                        </div>
                                    </div>
                                    <!-- single-comments -->
                                    <div class="media mt-30">
                                        <div class="media-left pr-30">
                                            <a href="{{ url('/#') }}"><img class="media-object" src="{{ asset('frontend/img/author/3.jpg') }}" alt="#"></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="clearfix">
                                                <div class="name-commenter f-left">
                                                    <h6 class="media-heading"><a href="{{ url('/#') }}">Gerald Barnes</a></h6>
                                                    <p class="mb-10">27 Jun, 2016 at 2:30pm</p>
                                                </div>
                                                <ul class="reply-delate f-right">
                                                    <li><a href="{{ url('/#') }}">Reply</a></li>
                                                    <li>/</li>
                                                    <li><a href="{{ url('/#') }}">Delate</a></li>
                                                </ul>
                                            </div>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis atestese bibendum feugiat ut eget eni Praesent  messages in con sectetur posuere dolor non.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- leave your comment -->
                                <div class="leave-comment">
                                    <h4 class="blog-section-title border-left mb-30">leave your comment</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="name" placeholder="Subash Chandra Das">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="email" placeholder="Email address here...">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="subject" placeholder="Subject here...">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea class="custom-textarea" placeholder="Your comment here..."></textarea>
                                        </div>
                                    </div>
                                    <button class="submit-btn-1 black-bg mt-30 btn-hover-2" type="submit">submit comment</button>
                                </div>
                                <!--  -->
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12">
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
                            <!-- widget-product -->
                            <aside class="widget widget-product box-shadow mb-30">
                                <h6 class="widget-title border-left mb-20">recent products</h6>
                                <!-- product-item start -->
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="{{ url('/single-product') }}">
                                            <img src="{{ asset('frontend/img/product/4.jpg,) }}" alt=""/>
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
                                            <img src="{{ asset('frontend/img/product/8.jpg') }}" alt=""/>
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
                            <!-- operating-system -->
                            <aside class="widget operating-system box-shadow">
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