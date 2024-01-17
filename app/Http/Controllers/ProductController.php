<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.pages.product.index', compact('products'));
    }

    public function create(){
        $categories = Category::all();
        return view('admin.pages.product.create', compact('categories'));
    }

    public function store(Request $request){
        $product = new Product;
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->gender = $request->gender;
        $product->color = $request->color;
        $product->size = $request->size;
        $product->save();

        if($request->file()) {
            $fileName = $product->id.'.'.$request->file->getClientOriginalExtension();
            $filePath = $request->file('file')->move('product-images', $fileName);
            $product->image = $filePath ;
            $product->save();
        }

 
        return redirect()->route('admin.products')->with('success', 'Urun Eklendi.');
    }

    public function delete($id){
        $product = Product::find($id);
        
        if($product->image) {
            $file_path = base_path().'/public/'.$product->image;
            unlink($file_path);
        }
       
        $product->delete();
        return redirect()->route('admin.products')->with('success', 'Urun Silindi.');
    }

    public function getProucts(Request $request){
        $categories = Category::get();

        $filter = [
            'gender' => $request->gender ?? null,
            'category' => $request->category ?? null,
            'color' => $request->color ?? null,
            'size' => $request->size ?? null,
            'min_price' => $request->min_price ?? null,
            'max_price' => $request->max_price ?? null,
        ];

        $products = Product::query();

        if($request->gender){
            $products->where('gender', '=', $request->gender);
        }
        if($request->category){
            $products->where('category_id', '=', $request->category);
        }
        if($request->color){
            $products->whereIn('color',  $request->color);
        }
        if($request->size){
            $products->whereIn('size', $request->size);
        }
        if($request->min_price){
            $products->where('price', '>=', $request->min_price);
        }
        if($request->max_price){
            $products->where('price', '<=', $request->max_price);
        }
        $products = $products->get();
        return view('frontend.pages.products',compact('products', 'categories', 'filter'));
    }

    public function getProduct($id){
        $products = Product::all();
        $product = Product::find($id);
        return view('frontend.pages.product-detail',compact('product', 'products'));
    }

}

