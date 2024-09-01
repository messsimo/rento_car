<!-- Подключение файла сборщика -->
@extends("layouts.app_admin")

<!-- Название страницы -->
@section("title") 
    Admin Panel - Orders
@endsection

<!-- Основаная секция -->
@section("order_info")
    <div class="orders">
        <h1>Order - {{ $order->name }}</h1>

        <div class="container-orders order-info">
            <p><b>ID:</b> {{ $order->id }}</p>
            <p><b>Customer:</b> {{ $order->name }}</p>
            <p><b>Phone number:</b> {{ $order->phone }}</p>
            <p><b>Age:</b> {{ $order->age }}</p>
            <p><b>Car:</b> {{ $order->car }}</p>
            <p><b>Price:</b> {{ $order->price_hour }}/day</p>
            <p><b>Pick up time:</b> {{ $order->pickup_time }}</p>
            <p><b>Ordered:</b> {{ $order->created_at }}</p>
        </div>
    </div>
@endsection