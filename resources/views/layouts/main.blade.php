<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мастерок</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>
<body>
<header>
    <div class="top">
        <p><a href="/"><img src="{{ asset('assets/logo/logo.png') }}" alt=""></a></p>
        <h1>МАСТЕРОК</h1>
        <h2>Дополнительный текст</h2>
    </div>
    <div class="content">
        <nav>
            @guest()
                <p><a href="{{ route('login') }}"> Войти </a></p>
                <p><a href="/reg"> Регистрация </a></p>
            @endguest
            @auth()
                <p><a href="/profile">Личный кабинет</a></p>
                <p><a href="{{ route('logout') }}"> Выйти </a></p>
            @endauth
            <hr>
        </nav>

    </div>


</header>
<div class="message">{{ $errors->message->first() }}</div>

<main>
    <div class="content">

        @yield("content")

    </div>
</main>
{{--<footer>--}}
{{--    <hr>--}}
{{--    Подвал--}}
{{--</footer>--}}
</body>
</html>
