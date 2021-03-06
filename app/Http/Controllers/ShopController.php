<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\CrosselProduct;
use App\Review;

class ShopController extends Controller
{
    public function category($slug) 
    {
        //$category = Category::with('products.reviews')->firstWhere('slug', $slug);

        $category = Category::with(['products'=>function($query){
            $query->withCount('reviews');
        }])->firstWhere('slug', $slug);
        //dd($category->products);
        
        return view('shop.category', compact('category'));
    }

    public function product($slug)
    {
        //получаем продукт по слагу
        $product = Product::firstWhere('slug', $slug);

        //получаем категорию по id в $product
        $category = Category::firstWhere('id', $product->category_id);

        //сверяем по id продукта связанные id товаров в таблице crossel_products и запаковываем в массив
        $crossels_id = CrosselProduct::where('product_id', $product->id)->get()->pluck('crossel_id')->toArray();

        //получаем с таблицы products товары по id которые в массиве $$crossels_id
        $crosselProducts = Product::whereIn('id', $crossels_id)->get();

        //получаем отзывы о товаре
        $reviews = Review::with('user')->where('product_id', $product->id)->orderBy('created_at', 'desc')->get();
        //dd($reviews);
        //передаем полученные результаты в блейд для отрисовки
        return view('shop.product', compact('product', 'crosselProducts', 'category', 'reviews'));
    }

    public function newReview(Request $request)
    {
        $review = new Review();
        $review->user_id = $request->userId;
        $review->product_id = $request->productId;
        $review->comment = $request->message;
        $review->save();
        return back();
    }
}
