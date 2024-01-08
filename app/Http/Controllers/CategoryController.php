<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.pages.category.index', compact('categories'));
    }
    
    public function store(){
        Category::create([
            'name' => request('name'),
        ]);
        return redirect()->route('categories')->with('success', 'Kategori Eklendi.');
    }

    public function delete($id){
        $category = Category::find($id);
        if($category->products->count() > 0){
            return redirect()->route('categories')->with('error', 'Kategoriye ait urunler oldugu icin silinemez.');
        }else{
            $category->delete();
            return redirect()->route('categories')->with('success', 'Kategori Silindi.');
        }
    }
    
}

