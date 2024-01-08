<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.pages.index');
    }

    public function products(){
        return view('admin.pages.product.index');
    }

    public function categories(){
        return view('admin.pages.category.index');
    }
}

