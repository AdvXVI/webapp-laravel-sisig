<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Sisig - Sisig House</title>
    @vite(['resources/css/app.css'])
</head>

<body>
    <header>
        <nav>
            <div class="logo">🥘 Sisig House</div>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="products">Shop</a></li>
                <li><a href="about">About</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="page-header">
        <h1>Our Sizzling Sisig Menu</h1>
        <p>Authentic Filipino flavors you'll love</p>
    </section>

    <section class="products-container">
        <h2>Choose Your Favorite</h2>
        <p>All our sisig is prepared fresh and served piping hot</p>
        <div class="products-grid">
            <div class="product-card">
                <img src="https://images.unsplash.com/photo-1610117888577-4fe8e3dcd44a?w=500&h=300&fit=crop" alt="Classic Pork Sisig" class="product-image">
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
                <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=500&h=300&fit=crop" alt="Chicken Sisig" class="product-image">
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
                <img src="https://images.unsplash.com/photo-1604908176997-125f25cc6f3d?w=500&h=300&fit=crop" alt="Seafood Sisig" class="product-image">
                <div class="product-info">
                    <div class="product-name">Shrimp & Fish Sisig</div>
                    <p class="product-description">Premium seafood sisig with fresh shrimp and fish - a delightful coastal twist</p>
                    <div class="product-footer">
                        <span class="product-price">₱225</span>
                        <button class="btn-add">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <img src="https://images.unsplash.com/photo-1618164436241-4473940571cd?w=500&h=300&fit=crop" alt="Tofu Sisig" class="product-image">
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

    <footer id="contact">
        <p>&copy; 2024 Sisig House. All rights reserved. | Bringing Filipino Flavor Home 🇵🇭</p>
    </footer>
</body>

</html>