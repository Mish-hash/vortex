<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class MainController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        //dd($categories);
        $title = 'Home page';

        
        return view('main.index', compact('title', 'categories'));
    }
}
