<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Sisig ni Jazper</title>
    @vite(['resources/css/app.css'])
</head>

<body>
    <header>
        <nav>
            <a class="logo" href="/">🥘 Sisig ni Jazper</a>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="products">Shop</a></li>
                <li><a href="about">About</a></li>
                <li><a href="contact">Contact</a></li>
                <li><a href="#" class="btn-login">Login/Register</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <footer id="contact">
        <p>&copy; 2025 Sisig ni Jazper 🇵🇭 | Web Development Assignment by Jazper Angelo Bonagua</p>
    </footer>
</body>

</html>