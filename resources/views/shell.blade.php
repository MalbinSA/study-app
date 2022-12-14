<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body>
<header>
    <nav class="bg-zinc-700">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-10 items-center justify-between">
                <a href="/welcome" class="bg-green-400 text-black-900 hover:text-blue-800 px-3 py-2 ml-10 rounded-md text-sm font-medium ">laravel</a>
                <a href="/" class="bg-green-400 text-black-900 hover:text-blue-800 px-3 py-2 rounded-md text-sm font-medium">Главная</a>
                <a href="/authorization" class="bg-green-400 text-black-900 hover:text-blue-800 px-3 py-2 mr-10 rounded-md text-sm font-medium">Вход</a>
            </div>
        </div>
    </nav>
</header>
    @yield('main_content')
</body>
</html>
