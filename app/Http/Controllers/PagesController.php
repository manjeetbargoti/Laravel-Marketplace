<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
         return view('pages.index');
 }

    public function about(){
        return view('pages.about');
}
public function account(){
    return view('pages.account');
}


   public function blog(){
    return view('pages.blog');
}

public function cart(){
    return view('pages.cart');
}

public function checkout(){
    return view('pages.checkout');
}

public function contact(){
    return view('pages.contact');
}

public function error(){
    return view('pages.error');
}

public function logins(){
    return view('pages.logins');
}

public function order(){
    return view('pages.order');
}

public function shop(){
    return view('pages.shop');
}

public function SingleBlog(){
    return view('pages.SingleBlog');
}

public function SingleProduct(){
    return view('pages.SingleProduct');
}

public function wishlist(){
    return view('pages.wishlist');
}

}
