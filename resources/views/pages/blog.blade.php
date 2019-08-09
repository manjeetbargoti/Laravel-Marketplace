@extends('layouts.blog')
@section('content')
    
        <!-- BREADCRUMBS SETCTION START -->
        <div class="breadcrumbs-section plr-200 mb-80">
            <div class="breadcrumbs overlay-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="breadcrumbs-inner">
                                <h1 class="breadcrumbs-title">Blog</h1>
                                <ul class="breadcrumb-list">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li>Blog</li>
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

            <!-- BLOG SECTION START -->
            <div class="blog-section mb-50">
                <div class="container">
                    <div class="row">
                        <!-- blog-option start -->
                        <div class="col-md-12">
                            <div class="blog-option box-shadow mb-30  clearfix">
                                <!-- categories -->
                                <div class="dropdown f-left">
                                    <button class="option-btn">
                                        Categories
                                        <i class="zmdi zmdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-width mt-30">
                                        <aside class="widget widget-categories box-shadow">
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
                                    </div>
                                </div>
                                <!-- recent-product -->
                                <div class="dropdown f-left">
                                    <button class="option-btn">
                                        Recent Post
                                        <i class="zmdi zmdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-width mt-30">
                                        <aside class="widget widget-product box-shadow">
                                            <h6 class="widget-title border-left mb-20">recent products</h6>
                                            <!-- product-item start -->
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="{{ url('/single-product') }}">
                                                        <img src="{{ asset('frontend/img/cart/4.jpg') }}" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h6 class="product-title multi-line mt-10">
                                                        <a href="{{ url('/single-product') }}">Dummy Blog Name</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <!-- product-item end -->
                                            <!-- product-item start -->
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="{{ url('/single-product') }}">
                                                        <img src="{{ asset('frontend/img/cart/5.jpg') }}" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h6 class="product-title multi-line mt-10">
                                                        <a href="{{ url('/single-product') }}">Dummy Blog Name</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <!-- product-item end -->
                                            <!-- product-item start -->
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="{{ url('/single-product') }}">
                                                        <img src="{{asset('frontend/img/cart/6.jpg') }}" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h6 class="product-title multi-line mt-10">
                                                        <a href="{{ url('/single-product') }}">Dummy Blog Name</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <!-- product-item end -->                               
                                        </aside>      
                                    </div>
                                </div>
                                <!-- Tags -->
                                <div class="dropdown f-left">
                                    <button class="option-btn">
                                        Tags
                                        <i class="zmdi zmdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-width mt-30">
                                        <aside class="widget widget-tags box-shadow">
                                            <h6 class="widget-title border-left mb-20">Tags</h6>
                                            <ul class="widget-tags-list">
                                                <li><a href="{{ url('/#') }}">Bleckgerry ios</a></li>
                                                <li><a href="{{ url('/#') }}">Symban</a></li>
                                                <li><a href="{{ url('/#') }}">IOS</a></li>
                                                <li><a href="{{ url('/#') }}">Bleckgerry</a></li>
                                                <li><a href="{{ url('/#') }}">Windows Phone</a></li>
                                                <li><a href="{{ url('/#') }}">Windows Phone</a></li>
                                                <li><a href="{{ url('/#') }}">Androids</a></li>
                                            </ul>                  
                                        </aside>      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- blog-option end -->
                    </div>
                    <div class="row">
                        <!-- blog-item start -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
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
                        <div class="col-md-4 col-sm-6 col-xs-12">
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
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="blog-item">
                                <img src="{{ asset('frontendimg/blog/3.jpg') }}" alt="">
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
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="blog-item">
                                <img src="{{ asset('frontend/img/blog/4.jpg') }}" alt="">
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
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="blog-item">
                                <img src="{{ asset('frontend/img/blog/5.jpg') }}" alt="">
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
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="blog-item">
                                <img src="{{ asset('frontend/img/blog/6.jpg') }}" alt="">
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
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="blog-item">
                                <img src="{{ asset('frontend/img/blog/1.jpg') }}" alt="">
                                <div class="blog-desc">
                                    <h5 class="blog-title"><a href="{{ url('/single-blog') }}">dummy Blog name</a></h5>
                                    <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                    <div class="read-more">
                                        <a href="{{ asset('frontend/single-blog.html') }}">Read more</a>
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
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="blog-item">
                                <img src="{{ asset('frontend/img/blog/7.jpg') }}" alt="">
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
                        <div class="col-md-4 hidden-sm col-xs-12">
                            <div class="blog-item">
                                <img src="{{ asset('frontend/img/blog/8.jpg') }}" alt="">
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
            <!-- BLOG SECTION END -->             

        </div>
        <!-- End page content -->
@endsection