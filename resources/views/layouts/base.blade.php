<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <header class="header">
        <div class="header_logo">
            <p class="logo">Городской портал</p>
            <a href="/" class="city">Ейск</a>
        </div>
        <div class="header_buttons">
            <a href="/"><button class="header_button">Войти</button></a>
            <a href="/"><button class="header_button">Регистрация</button></a>
        </div>
    </header>
    @yield('main')
</body>
</html>