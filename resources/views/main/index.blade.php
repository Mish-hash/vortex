@extends('main.layout')

@section('title', $title)


@section('content')
        

    <h2 class="text-center mb-3">Categories</h2>
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-md-4 mb-5">
                <p>Category</p>
                <a href="/category/{{$category->slug}}">
                    <img src="{{$category->img_url}}" alt="{{$category->name}}" class="img-fluid">
                    <h3>{{$category->name}}</h3>
                </a>
            </div>
        @endforeach
    </div>

    <h2 class="text-center mb-3">Products</h2>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mb-5">
                <p>Product</p>
                <a href="/product/{{$product->slug}}">
                    <img src="{{$product->img_url}}" alt="{{$product->name}}" class="img-fluid">
                    <h3>{{$product->name}}</h3>
                    <p>Price: {{$product->price}}</p>
                </a>
            </div>
        @endforeach
    </div>
    
    
    {{-- Шаблон коментария --}}
    @isset($n)
        <h3>{{$n}}</h3>
    @endisset


@endsection

@section('footer')
    @parent <br>
    Реклама
@endsection