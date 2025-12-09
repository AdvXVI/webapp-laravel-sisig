<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Sisig House</title>
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
        <h1>Get in Touch</h1>
        <p>Have questions? We'd love to hear from you!</p>
    </section>

    <section class="content">
        <div class="contact-wrapper">
            <div class="contact-form-section">
                <h2>Send us a Message</h2>
                <form action="/contact" method="POST">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone">
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>

                    <button type="submit" class="btn-submit">Send Message</button>
                </form>
            </div>

            <div class="contact-info-section">
                <h2>Contact Information</h2>

                <div class="info-item">
                    <div class="info-title">📍 Visit Us</div>
                    <div class="info-content">
                        123 Filipino Street<br>
                        Manila, Philippines 1000<br>
                        Southeast Asia
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-title">📞 Call Us</div>
                    <div class="info-content">
                        <a href="tel:+6326551234">+63 (2) 6555-1234</a>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-title">✉️ Email</div>
                    <div class="info-content">
                        <a href="mailto:hello@sisighouse.com">hello@sisighouse.com</a><br>
                        <a href="mailto:orders@sisighouse.com">orders@sisighouse.com</a>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-title">⏰ Hours</div>
                    <div class="info-content">
                        Monday - Sunday: 10:00 AM - 11:00 PM<br>
                        Holidays: 12:00 PM - 10:00 PM<br>
                        Orders always welcome!
                    </div>
                </div>

                <div class="social-links">
                    <h3>Follow Us</h3>
                    <div class="social-icons">
                        <a href="#" class="social-icon">f</a>
                        <a href="#" class="social-icon">📱</a>
                        <a href="#" class="social-icon">▶️</a>
                        <a href="#" class="social-icon">📷</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Sisig House. All rights reserved. | Bringing Filipino Flavor Home 🇵🇭</p>
    </footer>
</body>

</html>