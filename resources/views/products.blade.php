@extends('layouts.sisig')

@section('title', 'Sisig Shop🔥')

@section('content')

<section class="page-header">
    <h1>Our Sizzling Sisig Menu</h1>
    <p>Authentic Filipino flavors you'll love</p>
</section>

<section class="products-container">
    <h2>Choose Your Favorite</h2>
    <p>All our sisig is prepared fresh and served piping hot ( ͡° ͜ʖ ͡°)</p>
    <div class="products-grid">
        <div class="product-card">
            <img src="assets/pork-sisig.jpg" alt="Classic Pork Sisig" class="product-image">
            <div class="product-info">
                <div class="product-name">Classic Pork Sisig</div>
                <p class="product-description">Traditional minced pork sisig sizzling in a hot plate, perfectly seasoned with calamansi and chili</p>
                <div class="product-footer">
                    <span class="product-price">₱185</span>
                    <button class="btn-add">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="product-card">
            <img src="assets/chicken-sisig.avif" alt="Chicken Sisig" class="product-image">
            <div class="product-info">
                <div class="product-name">Spicy Chicken Sisig</div>
                <p class="product-description">Tender chicken sisig with extra spice, lime, and herbs - perfect for spice lovers</p>
                <div class="product-footer">
                    <span class="product-price">₱155</span>
                    <button class="btn-add">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="product-card">
            <img src="assets/bangus-sisig.jpg" alt="Seafood Sisig" class="product-image">
            <div class="product-info">
                <div class="product-name">Bangus Sisig</div>
                <p class="product-description">Premium seafood sisig with fresh bangus fish - a delightful coastal twist</p>
                <div class="product-footer">
                    <span class="product-price">₱225</span>
                    <button class="btn-add">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="product-card">
            <img src="assets/tofu-sisig.avif" alt="Tofu Sisig" class="product-image">
            <div class="product-info">
                <div class="product-name">Crispy Tofu Sisig</div>
                <p class="product-description">Vegetarian delight with crispy tofu, mushrooms, and authentic sisig seasonings</p>
                <div class="product-footer">
                    <span class="product-price">₱145</span>
                    <button class="btn-add">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection