<!-- Подключение шаблонизатора -->
@extends("layouts.app")

<!-- Динамическое название страницы -->
@section("title")
    Car Rent | {{ $cars->name }}
@endsection

<!-- Подключние секции -->
@section("car_info")
    <!-- Блок с информацией о машине -->
    <div class="car-info">
        <div class="container-left">
            <img src="{{ asset('cover_images/' . $cars->photo) }}" alt="{{ $cars->name }}">
            <div class="description">
                <p>Description</p>
                <span>{{ $cars->description }}</span>
            </div>
        </div>

        <div class="container">
            <h1>{{ $cars->name }}</h1>

            <h3>from <b>{{ $cars->price }}</b>/day</h3>
<!-- 
            <div class="characteristic">
                <div class="block">
                    <p>Year: {{ $cars->car_year }}</p>      
                    <p>Engine: {{ $cars->car_engine }}</p>
                    <p>Capacity: {{ $cars->car_engine_capacity }}</p>
                    <p>Gearbox: {{ $cars->car_gearbox }}</p>
                </div>

                <div class="block">
                    <p>Category: {{ $cars->category }}</p>
                    <p>Doors: {{ $cars->car_doors }}</p>           
                    <p>Seats: {{ $cars->car_seats }}</p>
                </div>
            </div> -->

            <a href="" class="link">Book a rental</a>

            <table>
                <tbody>
                    <tr>
                        <th>Year</th>
                        <td>{{ $cars->car_year }}</td>
                    </tr>
                    <tr>
                        <th>Engine</th>
                        <td>{{ $cars->car_engine }}</td>
                    </tr>
                    <tr>
                        <th>Capacity</th>
                        <td>{{ $cars->car_engine_capacity }}</td>
                    </tr>
                    <tr>
                        <th>Gearbox</th>
                        <td>{{ $cars->car_gearbox }}</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>{{ $cars->category }}</td>
                    </tr>
                    <tr>
                        <th>Doors</th>
                        <td>{{ $cars->car_doors }}</td>
                    </tr>
                    <tr>
                        <th>Seats</th>
                        <td>{{ $cars->car_seats }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection