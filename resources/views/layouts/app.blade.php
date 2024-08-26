<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Подключение CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <title>@yield("title")</title>
</head>
<body>
    <!-- Подключение футера сайта -->
    @include("blocks.header")

    <!-- Подключение секций -->
    @yield("main")
</body>
</html>