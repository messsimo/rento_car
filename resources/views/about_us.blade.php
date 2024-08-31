<!-- Подключение шаблонизатора -->
@extends("layouts.app")

<!-- Динамическое название страницы -->
@section("title")
    Car Rent | About Us
@endsection

<!-- Подключние секции -->
@section("aboutUs")
    <!-- Блок навигации -->
    <div class="web-nav">
        <span>Main > About Us</span>
    </div>

    <!-- Блок О нас -->
    <div class="about_us">
        <h1>Welcome to Rento Car!</h1>

        <span>At Rento Car, we are committed to providing you with a seamless and enjoyable car rental experience. With a diverse fleet of well-maintained vehicles and a dedication to exceptional customer service, we ensure that you find the perfect car for your needs.</span>

        <h2>Our Mission</h2>
        <span>Our mission is to make car rental easy and stress-free. Whether you need a car for a business trip, a family vacation, or just a weekend getaway, we offer a range of options to suit every requirement. Our team is here to assist you every step of the way, from booking to return.</span>

        <h2>Why Choose Rento Car?</h2>
        <p><b>Wide Selection:</b> Choose from a variety of vehicles, from compact cars to luxury SUVs.</p>
        <p><b>Affordable Rates:</b> Competitive pricing and no hidden fees.</p>
        <p><b>Exceptional Service:</b> Friendly staff ready to assist with your rental needs</p>
        <p><b>Convenient Locations:</b> Easy access to pick-up and drop-off points.</p>

        <h2>Contact Us</h2>
        <p class="last-p">Have questions or need assistance? Feel free to reach out to our customer service team. We look forward to serving you and making your next journey a memorable one.</p>

        <h3>Rento Car – Drive with Confidence.</h3>
    </div>
@endsection