@extends('layouts.sisig')

@section('title', 'Reach out for da sisig!')

@section('content')

<section class="page-header">
    <h1>Get in Touch</h1>
    <p>Have questions? We'd love to hear from you!</p>
</section>

<section class="content">
    <div class="contact-wrapper">
        <div class="contact-form-section">
            <h2>Send us a Message</h2>
            <form action="/contact" method="POST">
                @csrf
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
                    <a href="tel:+6326551234">+63 912-3456-789</a>
                </div>
            </div>

            <div class="info-item">
                <div class="info-title">✉️ Email</div>
                <div class="info-content">
                    <a href="mailto:hello@sisighouse.com">hello@sisignijazper.com</a><br>
                    <a href="mailto:orders@sisighouse.com">orders@sisignijazper.com</a>
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
@endsection