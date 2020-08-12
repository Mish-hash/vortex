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
        $title = 'Home page';

        //$products = Product::where('recommended', '=', 1);
        $products = Product::where('recommended', '=', 1)
            ->where('price', '>', 1500)
            ->whereNotNull('img_url')
            ->orderBy('price')
            ->get();

        //dd($products);
        
        return view('main.index', compact('title', 'categories', 'products'));
    }
}
