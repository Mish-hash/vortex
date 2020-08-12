@extends('shop.layout')

@section('title', $category->name)


@section('content')
        

    <h1 class="text-center mb-3">{{$category->name}}</h1>
    
    <h2 class="text-center mb-3">Products</h2>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mb-5">
                <p>Product</p>
                <a href="/category/{{$product->slug}}">
                    <img src="{{$product->img_url}}" alt="{{$product->name}}" class="img-fluid">
                    <h3>{{$product->name}}</h3>
                    <p>Price: {{$product->price}}</p>
                </a>
            </div>
        @endforeach
    </div>
    

@endsection


@section('footer')
    @parent <br>
    Реклама в магазине
@endsection