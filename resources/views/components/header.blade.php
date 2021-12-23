<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>lihl</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>

<header class="header">
    <div class="container">
        <div class="header__wrap">
            <a href="#" class="logo">
                Logo
            </a>

            <nav class="header__nav">
                <ul>
                    <li><a href="{{ route('index') }}">Главная</a></li>
                    <li><a href="#">Каталог</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </nav>

            <a href="#" class="header__btn btn btn-main">Связаться</a>
        </div>
    </div>
</header>
