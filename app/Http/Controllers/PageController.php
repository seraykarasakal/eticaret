<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function products(Request $request)
    {
        $products = Product::get();
        return view('frontend.pages.products',compact('products'));
    }

    public function productDetail($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('frontend.pages.product-detail',compact('product'));
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function cart()
    {
        return view('frontend.pages.cart');
    }
}
