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
        $sizes = !empty($request->size) ? explode(',',$request->size) : null;

        $colors = !empty($request->color) ? explode(',',$request->color) : null;

        $products = Product::where('status','1')
        ->where(function($q) use($sizes,$colors) {
           if(!empty($sizes)) {
                $q->whereIn('size', $sizes);
            }
            if(!empty($colors)) {
                $q->whereIn('color', $colors);
            }

            return $q;
        })
        ->paginate(1);
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
