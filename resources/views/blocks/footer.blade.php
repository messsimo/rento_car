<!-- Секциия футера сайта -->
@section("footer")
<footer id="footer">    
    <h1>Rento Car</h1>

    <div class="block">
        <h2>More info</h2>

        <a href="{{ route('main') }}" class="first-a">All cars</a>
        <a href="{{ route('about_us') }}">About us</a>
        <a href="{{ route('rental_rules') }}">Rent Rules</a>
    </div>

    <div class="block">
        <h2>Head Office</h2>

        <p>Chisinau, Republic of Moldova</p>
        <p>Mon-Sun: 24/24</p>
        <p>+373 678944088</p>
    </div>
</footer>