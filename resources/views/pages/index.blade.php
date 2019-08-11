@extends('layouts.index')
@section('content')
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
                                    <a href="{{ url('/SingleProduct') }}"><img src="{{ asset('frontend/img/product/5.jpg') }}" alt=""></a>
                                    <h3 class="brand-title text-gray">
                                        <a href="{{ url('/#') }}">Brand name</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- single-brand-product end -->
                            <!-- single-brand-product start -->
                            <div class="col-xs-12">
                                <div class="single-brand-product">
                                    <a href="{{ url('/SingleProduct') }}"><img src="{{ asset('frontend/img/product/6.jpg') }}" alt=""></a>
                                    <h3 class="brand-title text-gray">
                                        <a href="{{ url('/#') }}">Brand name</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- single-brand-product end -->
                            <!-- single-brand-product start -->
                            <div class="col-xs-12">
                                <div class="single-brand-product">
                                    <a href="{{ url('/SingleProduct') }}"><img src="{{ asset('frontend/img/product/7.jpg') }}" alt=""></a>
                                    <h3 class="brand-title text-gray">
                                        <a href="{{ url('/#') }}">Brand name</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- single-brand-product end -->
                            <!-- single-brand-product start -->
                            <div class="col-xs-12">
                                <div class="single-brand-product">
                                    <a href="{{ url('/SingleProduct') }}"><img src="{{ asset('frontend/img/product/8.jpg') }}" alt=""></a>
                                    <h3 class="brand-title text-gray">
                                        <a href="{{ url('/#') }}">Brand name</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- single-brand-product end -->
                            <!-- single-brand-product start -->
                            <div class="col-xs-12">
                                <div class="single-brand-product">
                                    <a href="{{ url('/SingleProduct') }}"><img src="{{ asset('frontend/img/product/8.jpg') }}" alt=""></a>
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
                                        <a href="{{ url('/SingleProduct') }}">
                                            <img src="{{ asset('frontend/img/product/1.jpg') }}" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="{{ url('/SingleProduct') }}">Product Name</a>
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
                                        <a href="{{ url('/SingleProduct') }}">
                                            <img src="{{ asset('frontend/img/product/2.jpg') }}" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="{{ url('/SingleProduct') }}">Product Name</a>
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
                                        <a href="{{ url('/SingleProduct') }}">
                                            <img src="{{ asset('frontend/img/product/3.jpg') }}" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="{{ url('/SingleProduct')}}">Product Name</a>
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
                                        <a href="{{ url('/SingleProduct') }}">
                                            <img src="{{ asset('frontend/img/product/4.jpg') }}" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="{{ url('/SingleProduct')}}">Product Name</a>
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
                                        <a href="{{ url('/SingleProduct') }}">
                                            <img src="{{ asset('frontend/img/product/4.jpg') }}" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="{{ url('/SingleProduct') }}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct') }}">
                                                    <img src="{{ asset('frontend/img/product/7.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct') }}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct') }}">
                                                    <img src="{{ asset('frontend/img/product/2.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct') }}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct') }}">
                                                    <img src="{{ asset('frontend/img/product/9.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct') }}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct') }}">
                                                    <img src="{{ asset('frontend/img/product/4.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct') }}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct') }}">
                                                    <img src="{{ asset('frontend/img/product/10.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct') }}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct') }}">
                                                    <img src="{{ asset('frontend/img/product/11.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct') }}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct') }}">
                                                    <img src="{{ asset('frontend/img/product/8.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct') }}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct') }}">
                                                    <img src="{{ asset('frontend/img/product/12.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct')}}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct') }}">
                                                    <img src="{{ asset('frontend/img/product/1.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct') }}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct') }}">
                                                    <img src="{{ asset('frontend/img/product/3.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct') }}">Product Name</a>
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
                                                <a href="s{{ url('/SingleProduct') }}">
                                                    <img src="{{ asset('frontend/img/product/5.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct') }}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct') }}">
                                                    <img src="{{ asset('frontend/img/product/6.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct') }}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct') }}">
                                                    <img src="{{ asset('frontend/img/product/12.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct')}}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct') }}">
                                                    <img src="{{ asset('frontend/img/product/8.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct') }}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct')}}">
                                                    <img src="{{ asset('frontend/img/product/11.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="s{{ url('/SingleProduct')}}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct')}}">
                                                    <img src="{{ asset('frontend/img/product/10.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct')}}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct')}}">
                                                    <img src="{{ asset('frontend/img/product/12.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct')}}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct')}}">
                                                    <img src="{{ asset('frontend/img/product/11.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct')}}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct')}}">
                                                    <img src="{{ asset('frontend/img/product/10.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct')}}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct')}}">
                                                    <img src="{{ asset('frontend/img/product/8.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct') }}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct') }}">
                                                    <img src="{{ asset('frontend/img/product/1.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct') }}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct')}}">
                                                    <img src="{{ asset('frontend/img/product/2.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct')}}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct')}}">
                                                    <img src="{{ asset('frontend/img/product/3.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct')}}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct')}}">
                                                    <img src="{{ asset('frontend/img/product/4.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct')}}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct')}}l">
                                                    <img src="{{ asset('frontend/img/product/6.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct')}}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct')}}">
                                                    <img src="{{ asset('frontend/img/product/12.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct')}}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct')}}">
                                                    <img src="{{ asset('frontend/img/product/1.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct')}}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct')}}">
                                                    <img src="{{ asset('frontend/img/product/8.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct')}}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct')}}">
                                                    <img src="{{ asset('frontend/img/product/9.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct')}}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct')}}">
                                                    <img src="{{ asset('frontend/img/product/7.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct')}}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct')}}">
                                                    <img src="{{ asset('frontend/img/product/5.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct')}}">Product Name</a>
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
                                                <a href="{{ url('/SingleProduct')}}">
                                                    <img src="{{ asset('frontend/img/product/1.jpg') }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="{{ url('/SingleProduct')}}">Product Name</a>
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
                                        <h5 class="blog-title"><a href="{{ url('/SingleBlog') }}">dummy Blog name</a></h5>
                                        <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                        <div class="read-more">
                                            <a href="{{ url('/SingleBlog') }}">Read more</a>
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
                                        <h5 class="blog-title"><a href="{{ url('/SingleBlog') }}">dummy Blog name</a></h5>
                                        <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                        <div class="read-more">
                                            <a href="{{ url('/SingleBlog') }}">Read more</a>
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
                                        <h5 class="blog-title"><a href="{{ url('/SingleBlog') }}">dummy Blog name</a></h5>
                                        <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                        <div class="read-more">
                                            <a href="{{ url('/SingleBlog') }}">Read more</a>
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
                                        <h5 class="blog-title"><a href="{{ url('/SingleBlog') }}">dummy Blog name</a></h5>
                                        <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                        <div class="read-more">
                                            <a href="{{ url('/SingleBlog') }}">Read more</a>
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

@endsection