<!-- Подключение шаблонизатора -->
@extends("layouts.app")

<!-- Динамическое название страницы -->
@section("title")
    Car Rent | Checkout
@endsection

<!-- Подключние секции -->
@section("checkout")
    <!-- Блок навигации -->
    <div class="web-nav">
        <span>Main > {{ $car->name }} > Checkout</span>
    </div>

    <!-- Блок оформления заказа -->
    <div class="checkout">
        <form action="{{ route('checkoutForm', $car->id) }}" method="post">
            @csrf
            <h2>Booking form</h2>

            <input type="hidden" name="car" value="{{ $car->name }}"><br>
            <input type="hidden" name="price" value="{{ $car->price }}"><br>
            <label for="">Full name</label><br>
            <input type="text" placeholder="Full name" name="name"><br>
            <label for="">Phone number</label><br>
            <input type="text" placeholder="Phone number" name="phone"><br>
            <label for="">Age</label><br>
            <input type="text" placeholder="Age" name="age"><br>
            <label for="">Pick up time</label><br>
            <input type="text" placeholder="Pick up time" name="pickup_time"><br>

            <!-- Отображение удачного формления заказа -->
            @if (session("success"))
            <div class="alert-success">
                <span>{{ session('success') }}</span><br>
            </div>
            @endif

            <!-- Отображение ошибок -->
            @if ($errors->any())
                <div class="alert">
                    <ul>
                        @foreach ($errors->all() as $el)
                            <li>{{ $el }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button type="submit">Booking</button>
        </form>

        <div class="container">
            <h1>{{ $car->name }}</h1>
            <img src="{{ asset('cover_images/' . $car->photo) }}" alt="{{ $car->name }}">
        </div>
    </div>
@endsection