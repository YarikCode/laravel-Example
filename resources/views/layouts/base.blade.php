<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <header class="header">
        <div class="header_logo">
            <p class="logo">Городской портал</p>
            <navbar class="main_nav">
                <ul><li><a href="{{ route('index') }}" class="li_href">Главная</a></li></ul>
            </navbar>
        </div>
        <div class="header_buttons">
            <a href="{{ route('register') }}"><button class="header_button">Регистрация</button></a>
            <a href="{{ route('login') }}"><button class="header_button">Вход</button></a>
            <a href="/"><button class="header_button">Выход</button></a>
        </div>
    </header>
    @yield('main')
</body>
</html>