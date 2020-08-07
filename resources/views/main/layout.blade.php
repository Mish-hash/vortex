<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>Некий хедер</header>
    <div class="container">
        <h3>Рабочий div</h3>
        @yield('content')
    </div>
    <footer>
        @section('footer')
            Некое меню
        @show
    </footer>
</body>
</html>