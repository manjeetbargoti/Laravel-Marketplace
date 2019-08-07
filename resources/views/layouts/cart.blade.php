<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>4in1 Telecom || Shopping Cart</title>
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
                                            <form action="{{ url('/#') }}">
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
                                                <a href="shop.html">Shop</a>
                                            <li>
                                                <a href="single-product.html">Single Product</a>
                                            </li>
                                            <li>
                                                <a href="cart.html">Shopping Cart</a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">Wishlist</a>
                                            </li>
                                            <li>
                                                <a href="checkout.html">Checkout</a>
                                            </li>
                                            <li>
                                                <a href="order.html">Order</a>
                                            </li>
                                            <li>
                                                <a href="login.html">Login</a>
                                            </li>
                                            <li>
                                                <a href="My-account.html">My Account</a>
                                            </li>
                                            <li>
                                                <a href="about.html">About us</a>
                                            </li>
                                            <li>
                                                <a href="404.html">404</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul>
                                            <li>
                                                <a href="blog.html">Blog</a>
                                            </li>
                                            <li>
                                                <a href="single-blog.html">Blog Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about.html">About Us</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
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
                                <h1 class="breadcrumbs-title">Shopping Cart</h1>
                                <ul class="breadcrumb-list">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li>Shopping Cart</li>
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

            <!-- SHOP SECTION START -->
            <div class="shop-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-12">
                            <ul class="cart-tab">
                                <li>
                                    <a class="active" href="{{ url('/#shopping-cart') }}" data-toggle="tab">
                                        <span>01</span>
                                        Shopping cart
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/#wishlist') }}" data-toggle="tab">
                                        <span>02</span>
                                        Wishlist
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/#checkout') }}" data-toggle="tab">
                                        <span>03</span>
                                        Checkout
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/#order-complete') }}" data-toggle="tab">
                                        <span>04</span>
                                        Order complete
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- shopping-cart start -->
                                <div class="tab-pane active" id="shopping-cart">
                                    <div class="shopping-cart-content">
                                        <form action="#">
                                            <div class="table-content table-responsive mb-50">
                                                <table class="text-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-thumbnail">product</th>
                                                            <th class="product-price">price</th>
                                                            <th class="product-quantity">Quantity</th>
                                                            <th class="product-subtotal">total</th>
                                                            <th class="product-remove">remove</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- tr -->
                                                        <tr>
                                                            <td class="product-thumbnail">
                                                                <div class="pro-thumbnail-img">
                                                                    <img src="{{ asset('frontend/img/cart/1.jpg') }}" alt="">
                                                                </div>
                                                                <div class="pro-thumbnail-info text-left">
                                                                    <h6 class="product-title-2">
                                                                        <a href="{{ url('/#') }}">dummy product name</a>
                                                                    </h6>
                                                                    <p>Brand: Brand Name</p>
                                                                    <p>Model: Grand s2</p>
                                                                    <p> Color: Black, White</p>
                                                                </div>
                                                            </td>
                                                            <td class="product-price">$560.00</td>
                                                            <td class="product-quantity">
                                                                <div class="cart-plus-minus f-left">
                                                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                                </div> 
                                                            </td>
                                                            <td class="product-subtotal">$1020.00</td>
                                                            <td class="product-remove">
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-close"></i></a>
                                                            </td>
                                                        </tr>
                                                        <!-- tr -->
                                                        <tr>
                                                            <td class="product-thumbnail">
                                                                <div class="pro-thumbnail-img">
                                                                    <img src="{{ asset('frontend/img/cart/2.jpg') }}" alt="">
                                                                </div>
                                                                <div class="pro-thumbnail-info text-left">
                                                                    <h6 class="product-title-2">
                                                                        <a href="{{ url('/#') }}">dummy product name</a>
                                                                    </h6>
                                                                    <p>Brand: Brand Name</p>
                                                                    <p>Model: Grand s2</p>
                                                                    <p> Color: Black, White</p>
                                                                </div>
                                                            </td>
                                                            <td class="product-price">$560.00</td>
                                                            <td class="product-quantity">
                                                                <div class="cart-plus-minus f-left">
                                                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                                </div> 
                                                            </td>
                                                            <td class="product-subtotal">$1020.00</td>
                                                            <td class="product-remove">
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-close"></i></a>
                                                            </td>
                                                        </tr>
                                                        <!-- tr -->
                                                        <tr>
                                                            <td class="product-thumbnail">
                                                                <div class="pro-thumbnail-img">
                                                                    <img src="{{ asset('frontend/img/cart/3.jpg') }}" alt="">
                                                                </div>
                                                                <div class="pro-thumbnail-info text-left">
                                                                    <h6 class="product-title-2">
                                                                        <a href="{{ url('/#') }}">dummy product name</a>
                                                                    </h6>
                                                                    <p>Brand: Brand Name</p>
                                                                    <p>Model: Grand s2</p>
                                                                    <p> Color: Black, White</p>
                                                                </div>
                                                            </td>
                                                            <td class="product-price">$560.00</td>
                                                            <td class="product-quantity">
                                                                <div class="cart-plus-minus f-left">
                                                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                                </div> 
                                                            </td>
                                                            <td class="product-subtotal">$1020.00</td>
                                                            <td class="product-remove">
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-close"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="coupon-discount box-shadow p-30 mb-50">
                                                        <h6 class="widget-title border-left mb-20">coupon discount</h6>
                                                        <p>Enter your coupon code if you have one!</p>
                                                        <input type="text" name="name" placeholder="Enter your code here.">
                                                        <button class="submit-btn-1 black-bg btn-hover-2" type="submit">apply coupon</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="payment-details box-shadow p-30 mb-50">
                                                        <h6 class="widget-title border-left mb-20">payment details</h6>
                                                        <table>
                                                            <tr>
                                                                <td class="td-title-1">Cart Subtotal</td>
                                                                <td class="td-title-2">$155.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-title-1">Shipping and Handing</td>
                                                                <td class="td-title-2">$15.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-title-1">Vat</td>
                                                                <td class="td-title-2">$00.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="order-total">Order Total</td>
                                                                <td class="order-total-price">$170.00</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="culculate-shipping box-shadow p-30">
                                                        <h6 class="widget-title border-left mb-20">culculate shipping</h6>
                                                        <p>Enter your coupon code if you have one!</p>
                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-12">
                                                                <input type="text"  placeholder="Country">
                                                            </div>
                                                            <div class="col-sm-4 col-xs-12">
                                                                <input type="text"  placeholder="Region / State">
                                                            </div>
                                                            <div class="col-sm-4 col-xs-12">
                                                                <input type="text"  placeholder="Post code">
                                                            </div>
                                                            <div class="col-md-12">
                                                                <button class="submit-btn-1 black-bg btn-hover-2">get a quote</button>   
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- shopping-cart end -->
                                <!-- wishlist start -->
                                <div class="tab-pane" id="wishlist">
                                    <div class="wishlist-content">
                                        <form action="#">
                                            <div class="table-content table-responsive mb-50">
                                                <table class="text-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-thumbnail">product</th>
                                                            <th class="product-price">price</th>
                                                            <th class="product-stock">Stock status</th>
                                                            <th class="product-add-cart">add to cart</th>
                                                            <th class="product-remove">remove</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- tr -->
                                                        <tr>
                                                            <td class="product-thumbnail">
                                                                <div class="pro-thumbnail-img">
                                                                    <img src="{{ asset('frontend/img/cart/1.jpg') }}" alt="">
                                                                </div>
                                                                <div class="pro-thumbnail-info text-left">
                                                                    <h6 class="product-title-2">
                                                                        <a href="{{ url('/#') }}">dummy product name</a>
                                                                    </h6>
                                                                    <p>Brand: Brand Name</p>
                                                                    <p>Model: Grand s2</p>
                                                                    <p> Color: Black, White</p>
                                                                </div>
                                                            </td>
                                                            <td class="product-price">$560.00</td>
                                                            <td class="product-stock text-uppercase">in stoct</td>
                                                            <td class="product-add-cart">
                                                                <a href="{{ url('/#') }}" title="Add To Cart">
                                                                    <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                                </a>
                                                            </td>
                                                            <td class="product-remove">
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-close"></i></a>
                                                            </td>
                                                        </tr>
                                                        <!-- tr -->
                                                        <tr>
                                                            <td class="product-thumbnail">
                                                                <div class="pro-thumbnail-img">
                                                                    <img src="{{ asset('frontend/img/cart/2.jpg') }}" alt="">
                                                                </div>
                                                                <div class="pro-thumbnail-info text-left">
                                                                    <h6 class="product-title-2">
                                                                        <a href="{{ url('/#') }}">dummy product name</a>
                                                                    </h6>
                                                                    <p>Brand: Brand Name</p>
                                                                    <p>Model: Grand s2</p>
                                                                    <p> Color: Black, White</p>
                                                                </div>
                                                            </td>
                                                            <td class="product-price">$560.00</td>
                                                            <td class="product-stock text-uppercase">in stoct</td>
                                                            <td class="product-add-cart">
                                                                <a href="{{ url('/#') }}" title="Add To Cart">
                                                                    <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                                </a>
                                                            </td>
                                                            <td class="product-remove">
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-close"></i></a>
                                                            </td>
                                                        </tr>
                                                        <!-- tr -->
                                                        <tr>
                                                            <td class="product-thumbnail">
                                                                <div class="pro-thumbnail-img">
                                                                    <img src="{{ asset('frontend/img/cart/3.jpg') }}" alt="">
                                                                </div>
                                                                <div class="pro-thumbnail-info text-left">
                                                                    <h6 class="product-title-2">
                                                                        <a href="{{ url('/#') }}">dummy product name</a>
                                                                    </h6>
                                                                    <p>Brand: Brand Name</p>
                                                                    <p>Model: Grand s2</p>
                                                                    <p> Color: Black, White</p>
                                                                </div>
                                                            </td>
                                                            <td class="product-price">$560.00</td>
                                                            <td class="product-stock text-uppercase">in stoct</td>
                                                            <td class="product-add-cart">
                                                                <a href="{{ url('/#') }}" title="Add To Cart">
                                                                    <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                                </a>
                                                            </td>
                                                            <td class="product-remove">
                                                                <a href="{{ url('/#') }}"><i class="zmdi zmdi-close"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- wishlist end -->
                                <!-- checkout start -->
                                <div class="tab-pane" id="checkout">
                                    <div class="checkout-content box-shadow p-30">
                                        <form action="#">
                                            <div class="row">
                                                <!-- billing details -->
                                                <div class="col-md-6">
                                                    <div class="billing-details pr-10">
                                                        <h6 class="widget-title border-left mb-20">billing details</h6>
                                                        <input type="text"  placeholder="Your Name Here...">
                                                        <input type="text"  placeholder="Email address here...">
                                                        <input type="text"  placeholder="Phone here...">
                                                        <input type="text"  placeholder="Company neme here...">
                                                        <select class="custom-select">
                                                            <option value="defalt">country</option>
                                                            <option value="c-1">Australia</option>
                                                            <option value="c-2">Bangladesh</option>
                                                            <option value="c-3">Unitd States</option>
                                                            <option value="c-4">Unitd Kingdom</option>
                                                        </select>
                                                        <select class="custom-select">
                                                            <option value="defalt">State</option>
                                                            <option value="c-1">Melbourne</option>
                                                            <option value="c-2">Dhaka</option>
                                                            <option value="c-3">New York</option>
                                                            <option value="c-4">London</option>
                                                        </select>
                                                        <select class="custom-select">
                                                            <option value="defalt">Town/City</option>
                                                            <option value="c-1">Victoria</option>
                                                            <option value="c-2">Chittagong</option>
                                                            <option value="c-3">Boston</option>
                                                            <option value="c-4">Cambridge</option>
                                                        </select>
                                                        <textarea class="custom-textarea" placeholder="Your address here..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- our order -->
                                                    <div class="payment-details pl-10 mb-50">
                                                        <h6 class="widget-title border-left mb-20">our order</h6>
                                                        <table>
                                                            <tr>
                                                                <td class="td-title-1">Dummy Product Name x 2</td>
                                                                <td class="td-title-2">$1855.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-title-1">Dummy Product Name</td>
                                                                <td class="td-title-2">$555.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-title-1">Cart Subtotal</td>
                                                                <td class="td-title-2">$2410.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-title-1">Shipping and Handing</td>
                                                                <td class="td-title-2">$15.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-title-1">Vat</td>
                                                                <td class="td-title-2">$00.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="order-total">Order Total</td>
                                                                <td class="order-total-price">$2425.00</td>
                                                            </tr>
                                                        </table>
                                                    </div> 
                                                    <!-- payment-method -->
                                                    <div class="payment-method">
                                                        <h6 class="widget-title border-left mb-20">payment method</h6>
                                                        <div id="accordion">
                                                            <div class="panel">
                                                                <h4 class="payment-title box-shadow">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="{{ url('/#bank-transfer') }}" >
                                                                    direct bank transfer
                                                                    </a>
                                                                </h4>
                                                                <div id="bank-transfer" class="panel-collapse collapse in" >
                                                                    <div class="payment-content">
                                                                    <p>Lorem Ipsum is simply in dummy text of the printing and type setting industry. Lorem Ipsum has been.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel">
                                                                <h4 class="payment-title box-shadow">
                                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="{{ url('/#collapseTwo') }}">
                                                                    cheque payment
                                                                    </a>
                                                                </h4>
                                                                <div id="collapseTwo" class="panel-collapse collapse">
                                                                    <div class="payment-content">
                                                                        <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel">
                                                                <h4 class="payment-title box-shadow">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="{{ url('/#collapseThree') }}" >
                                                                    paypal
                                                                    </a>
                                                                </h4>
                                                                <div id="collapseThree" class="panel-collapse collapse" >
                                                                    <div class="payment-content">
                                                                        <p>Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                                                                        <ul class="payent-type mt-10">
                                                                            <li><a href="{{ url('/#') }}"><img src="{{ asset('frontend/img/payment/1.png') }}" alt=""></a></li>
                                                                            <li><a href="{{ url('/#') }}"><img src="{{ asset('frontend/img/payment/2.png') }}" alt=""></a></li>
                                                                            <li><a href="{{ url('/#') }}"><img src="{{ asset('frontend/img/payment/3.png') }}" alt=""></a></li>
                                                                            <li><a href="{{ url('/#') }}"><img src="{{ asset('frontend/img/payment/4.png') }}" alt=""></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- payment-method end -->
                                                    <button class="submit-btn-1 mt-30 btn-hover-1" type="submit">place order</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- checkout end -->
                                <!-- order-complete start -->
                                <div class="tab-pane" id="order-complete">
                                    <div class="order-complete-content box-shadow">
                                        <div class="thank-you p-30 text-center">
                                            <h6 class="text-black-5 mb-0">Thank you. Your order has been received.</h6>
                                        </div>
                                        <div class="order-info p-30 mb-10">
                                            <ul class="order-info-list">
                                                <li>
                                                    <h6>order no</h6>
                                                    <p>m 2653257</p>
                                                </li>
                                                <li>
                                                    <h6>order no</h6>
                                                    <p>m 2653257</p>
                                                </li>
                                                <li>
                                                    <h6>order no</h6>
                                                    <p>m 2653257</p>
                                                </li>
                                                <li>
                                                    <h6>order no</h6>
                                                    <p>m 2653257</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="row">
                                            <!-- our order -->
                                            <div class="col-md-6">
                                                <div class="payment-details p-30">
                                                    <h6 class="widget-title border-left mb-20">our order</h6>
                                                    <table>
                                                        <tr>
                                                            <td class="td-title-1">Dummy Product Name x 2</td>
                                                            <td class="td-title-2">$1855.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="td-title-1">Dummy Product Name</td>
                                                            <td class="td-title-2">$555.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="td-title-1">Cart Subtotal</td>
                                                            <td class="td-title-2">$2410.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="td-title-1">Shipping and Handing</td>
                                                            <td class="td-title-2">$15.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="td-title-1">Vat</td>
                                                            <td class="td-title-2">$00.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="order-total">Order Total</td>
                                                            <td class="order-total-price">$2425.00</td>
                                                        </tr>
                                                    </table>
                                                </div>         
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bill-details p-30">
                                                    <h6 class="widget-title border-left mb-20">billing details</h6>
                                                    <ul class="bill-address">
                                                        <li>
                                                            <span>Address:</span>
                                                            28 Green Tower, Street Name, New York City, USA
                                                        </li>
                                                        <li>
                                                            <span>email:</span>
                                                            info@companyname.com
                                                        </li>
                                                        <li>
                                                            <span>phone : </span>
                                                            (+880) 19453 821758
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="bill-details pl-30">
                                                    <h6 class="widget-title border-left mb-20">billing details</h6>
                                                    <ul class="bill-address">
                                                        <li>
                                                            <span>Address:</span>
                                                            28 Green Tower, Street Name, New York City, USA
                                                        </li>
                                                        <li>
                                                            <span>email:</span>
                                                            info@companyname.com
                                                        </li>
                                                        <li>
                                                            <span>phone : </span>
                                                            (+880) 19453 821758
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- order-complete end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SHOP SECTION END -->             

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