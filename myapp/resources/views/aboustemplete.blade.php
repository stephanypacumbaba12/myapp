<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('images/logo.png')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/icons/font/bootstrap-icons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <head>
        <title>Shoe E-commerce - @yield('title')</title>
    </head>

<body>


@section('header')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="/"><img src="images/logo.png" alt="Shoe E-commerce" style="width:40px; margin-left:10px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home" style="margin-left:10px;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about" style="margin-left:10px;">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="product" style="margin-left:10px;">Products</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left:10px;">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="services">Services</a>
          <a class="dropdown-item" href="contact">Contact</a>
          <a class="dropdown-item" href="faq">FAQ</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
    @show

    @section('hero')
    <section class="hero">
        <video autoplay muted loop class="hero-video">
            <source src="video/bg.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </section>
    @show
    @section('about')
    <section class="about-us">
    <div class="container">
        <div class="story">
            <div class="story-content">
                <p class="highlight">About Us</p>
                <p>We are passionate about providing high-quality footwear to our customers. Our journey began with a simple idea: to offer stylish and comfortable shoes for every occasion.</p>
                <p>Since then, we have been committed to delivering exceptional products and excellent customer service. Our team works tirelessly to stay ahead of the latest trends and ensure that our customers always have access to the best footwear options.</p>
                <p>Whether you're looking for casual sneakers, elegant heels, or durable boots, we've got you covered. Thank you for choosing us for all your footwear needs!</p>
            </div>
        </div>
    </div>
</section>
    @show

    @section('fps')
    <section class="featured-products">
    <div class="container">
        <h2>Featured Products</h2>
        <div class="product-grid">
            <div class="product">
                <img src="product1.jpg" alt="Product 1">
                <h3>Product 1</h3>
                <p>Description of Product 1</p>
                <span class="price">$49.99</span>
                <a href="#" class="btn">Shop Now</a>
            </div>
            <div class="product">
                <img src="product2.jpg" alt="Product 2">
                <h3>Product 2</h3>
                <p>Description of Product 2</p>
                <span class="price">$59.99</span>
                <a href="#" class="btn">Shop Now</a>
            </div>
            <!-- Add more product items here -->
        </div>
    </div>
</section>
    @show
    
    @section('benefits')
    <section class="benefits">
    <div class="container">
        <h2>Why Choose Us?</h2>
        <div class="benefits-list">
            <div class="benefit">
                <img src="icon1.png" alt="Free Shipping">
                <h3>Free Shipping</h3>
                <p>Enjoy free shipping on all orders.</p>
            </div>
            <div class="benefit">
                <img src="icon2.png" alt="Quality Assurance">
                <h3>Quality Assurance</h3>
                <p>We guarantee the quality of our products.</p>
            </div>
            <div class="benefit">
                <img src="icon3.png" alt="24/7 Support">
                <h3>24/7 Support</h3>
                <p>Our customer support team is available 24/7.</p>
            </div>
        </div>
    </div>
</section>
    @show

    @section('testimonial')
    <section class="testimonials">
    <div class="container">
        <h2>What Our Customers Say</h2>
        <div class="testimonial">
            <img src="avatar1.jpg" alt="Customer 1">
            <blockquote>
                <p>"I love the quality of the shoes I bought from this website. They are comfortable and stylish. Highly recommended!"</p>
                <cite>John Doe</cite>
            </blockquote>
        </div>
        <div class="testimonial">
            <img src="avatar2.jpg" alt="Customer 2">
            <blockquote>
                <p>"Great customer service and fast shipping. Will definitely purchase from here again!"</p>
                <cite>Jane Smith</cite>
            </blockquote>
        </div>
        <!-- Add more testimonials here -->
    </div>
</section>
    @show

    @section('subs')
    <section class="newsletter">
    <div class="container">
        <h2>Subscribe to Our Newsletter</h2>
        <p>Get updates on new arrivals, promotions, and exclusive offers!</p>
        <form action="#" method="post" class="subscribe-form">
            <input type="email" name="email" placeholder="Your email address" required>
            <button type="submit">Subscribe</button>
        </form>
    </div>
</section>
    @show

    @section('footer')
    <footer>
    <div class="container">
        <div class="footer-cols">
            <div class="footer-col">
                <h3>About Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum, erat at aliquam.</p>
            </div>
            <div class="footer-col">
                <h3>Quick Links</h3>
                <ul>
                <li><a href="home">Home</a></li>
                    <li><a href="about">About Us</a></li>
                    <li><a href="product">Products</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Contact Info</h3>
                <p>123 Main Street, City</p>
                <p>Email: info@example.com</p>
                <p>Phone: +123 456 789</p>
            </div>
        </div>
    </div>
</footer>

    @show
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
