<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PageController extends Controller
{
    public function products(){
        return view('frontend.pages.products');

    }
    public function productDetail(){
        return view('frontend.pages.product-detail'); 
    }
    public function about(){
        return view('frontend.pages.about');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }
    public function cart(){
        return view('frontend.pages.cart');
    }
}
