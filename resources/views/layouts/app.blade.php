<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Подключение CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/car.css') }}">
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages.css') }}">

    <title>@yield("title")</title>
</head>
<body>
    <!-- Подключение шапки сайта -->
    @include("blocks.header")

    <!-- Подключение секций -->
    @yield("main")
    @yield("category_car")
    @yield("car_info")
    @yield("checkout")
    @yield("rentRules")
    @yield("aboutUs")

    <!-- Подключение футера сайта -->
    @include("blocks.footer")

    <!-- Подключение JS -->
    <script src="{{ asset('js/dropdown.js') }}"></script>
    <script src="{{ asset('js/dropdown_cat.js') }}"></script>
    <script src="{{ asset('js/dropdown_price.js') }}"></script>
    <script src="{{ asset('js/corusell.js') }}"></script>
    <script src="{{ asset('js/corusell_adv.js') }}"></script>
</body>
</html>