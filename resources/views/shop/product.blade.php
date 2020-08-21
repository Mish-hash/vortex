@extends('layouts.app')

@section('title', 'product -> ' . $product->name)


@section('content')
    <div class="col px-lg-5 py-3">
        <h1 class="text-left mb-3">Product => {{$product->name}}</h1>
        <a href="/category/{{$category->slug}}" class="text-left">Category => {{$category->name}}</a>
    </div>
    <div class="row">
        
        <div class="col-md-4 py-3">
            
            <img src="{{$product->img_url}}" alt="{{$product->name}}" class="img-fluid">
        </div>

        <div class="col-md-8 py-3">
            <h4>DESCRIPTION</h4>
            <p>{{$product->description}}</p>
            <p>Price: {{$product->price}}</p>
        </div>

    </div>

    @isset($reviews)
        <div class="col px-lg-4 py-2">
            <h3>Reviews</h3>
            @foreach ($reviews as $review)
            <p>Name: {{$review->user_id}}</p>
            <p>Created: {{$review->created_at}}</p>
            <p><strong>{{$review->comment}}</strong></p>
            @endforeach
        </div>
    @endisset
    
    @isset($crosselProducts)

        <div class="row">
            @foreach ($crosselProducts as $crosselProduct)
                <div class="col-md-4 mb-5">
                    <p>crosselProduct</p>
                    <a href="/product/{{$crosselProduct->slug}}">
                        <img src="{{$crosselProduct->img_url}}" alt="{{$crosselProduct->name}}" class="img-fluid">
                        <h3>{{$crosselProduct->name}}</h3>
                        <p>Price: {{$crosselProduct->price}}</p>
                    </a>
                </div>
            @endforeach
        </div>
        
    @endisset

@endsection


@section('footer')
    @parent <br>
    Реклама в магазине
@endsection