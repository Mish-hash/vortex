<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>shop - @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<body>
    <header>
        <ul>
            <li><a href="/">Main</a></li>
            <li><a href="#">reserved</a></li>
            <li><a href="#">reserved</a></li>
        </ul>
    </header>
    <div class="container">
        <h3>Рабочий div</h3>
        @yield('content')
    </div>
    <footer>
        @section('footer')
            Некое меню
        @show
    </footer>
    <script src="{{asset('/js/app.js')}}"></script>
</body>
</html>