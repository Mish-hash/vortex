<h1>{{$title}}</h1>

@foreach ($categories as $category)
    <h3>{{$category}}</h3><br>

@endforeach
{{-- Шаблон коментария --}}
@isset($n)
    <h3>{{$n}}</h3>
@endisset
