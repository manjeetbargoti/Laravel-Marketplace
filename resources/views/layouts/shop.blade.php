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
                                        <a href="{{ url('/account') }}">
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
                                                            <a href="{{ url('/SingleProduct') }}">Single Product</a>
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
                                                            <a href="{{ url('/account') }}">My Account</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/about') }}">About us</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/error') }}">404</a>
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
                                                    <a href="{{ url('/SingleBlog') }}">Blog Details</a>
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
                                                <a href="{{ url('/SingleProduct') }}">Single Product</a>
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
                                                <a href="{{ url('/account') }}">My Account</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/about') }}">About us</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/error') }}">404</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('/blog') }}">Blog</a>
                                        <ul>
                                            <li>
                                                <a href="{{ url('/blog') }}">Blog</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/SingleBlog') }}">Blog Details</a>
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
                                            <a href="{{ url('/account') }}"><i class="zmdi zmdi-circle"></i><span>My Account</span></a>
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