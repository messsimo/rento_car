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

    <!-- Подключение JS -->
    <script src="{{ asset('js/dropdown.js') }}"></script>
    <script src="{{ asset('js/dropdown_cat.js') }}"></script>
    <script src="{{ asset('js/dropdown_price.js') }}"></script>
    <script src="{{ asset('js/corusell.js') }}"></script>
    <script src="{{ asset('js/corusell_adv.js') }}"></script>
</body>
</html>