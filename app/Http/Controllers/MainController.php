<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class MainController extends Controller
{
    public function index()
    {
        /* $product = Product::find(1);
        dd($product->category); */

        $categories = Category::all();
        $title = 'Home page';

        //$products = Product::where('recommended', '=', 1);
        $products = Product::with('category')->where('recommended', '=', 1)
            ->where('price', '>', 1500)
            ->whereNotNull('img_url')
            ->orderBy('price')
            ->get();

        //dd($products);
        
        return view('main.index', compact('title', 'categories', 'products'));
    }

    public function contacts()
    {
        return view('main.contacts');
    }

    public function getContacts(Request $request) 
    {
        $name = $request->name;
        $category = new Category();
        $category->name = $name;
        $category->slug = \Str::slug($name, '-');
        $category->save();
        //$mes = $request->message;
        //return $user . '<br>' . $mes;
        //return redirect(route('home'));
        return back();
    }
}
