<?php

namespace App\Http\Controllers;
use App\Models\Product;

use App\Models\Slider;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $slider = Slider::where('status','1')->first();
        $categories = Category::get();
        $products = Product::all();
        return view('frontend.pages.index',compact('slider', 'categories', 'products'));
    }
}