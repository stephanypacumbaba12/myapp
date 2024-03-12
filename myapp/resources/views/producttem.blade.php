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

    @section('shop')
    <section class="card-section">
    <div class="card">
        <img src="images/1.png" alt="Image 1">
        <div class="card-content">
            <h3>Card 1</h3>
            <p>Shuffle into excitement with our premium card shoe e-commerce,
            offering sleek designs and smooth functionality for the ultimate card-playing experience.</p>
        </div>
    </div>
    <div class="card">
        <img src="images/2.png" alt="Image 2">
        <div class="card-content">
            <h3>Card 2</h3>
            <p>Deal out the fun with our selection of high-quality card shoes,
            perfect for hosting game nights or adding a touch of elegance to your next casino-themed event.</p>
        </div>
    </div>
    <div class="card">
        <img src="images/3.png" alt="Image 3">
        <div class="card-content">
            <h3>Card 3</h3>
            <p>Elevate your card games with ease and style using our range of professional-grade
            card shoes, designed for durability and precision dealing in every hand.</p>
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
                <img src="images/1.png" alt="Product 1">
                <h3>Product 1</h3>
                <p>Step into style with our versatile range of athletic sneakers,
                designed to enhance your performance while keeping you on-trend wherever you go.</p>
                <span class="price">₱999</span>
                <a href="#" class="btn">Shop Now</a>
            </div>
            <div class="product">
                <img src="images/2.png" alt="Product 2">
                <h3>Product 2</h3>
                <p>Elevate your wardrobe with our collection of premium leather loafers,
                crafted with meticulous attention to detail for a timeless blend of sophistication and comfort.</p>
                <span class="price">₱1500</span>
                <a href="#" class="btn">Shop Now</a>
            </div>
            <div class="product">
                <img src="images/3.png" alt="Product 3">
                <h3>Product 2</h3>
                <p>Find your perfect fit for any occasion with our curated selection of trendy sandals,
                offering both fashion-forward designs and durable support for all-day wear."</p>
                <span class="price">₱2000</span>
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
                <img src="images/1.png" alt="Free Shipping">
                <h3>Free Shipping</h3>
                <p>Enjoy free shipping on all orders.</p>
            </div>
            <div class="benefit">
                <img src="images/2.png" alt="Quality Assurance">
                <h3>Quality Assurance</h3>
                <p>We guarantee the quality of our products.</p>
            </div>
            <div class="benefit">
                <img src="images/3.png" alt="24/7 Support">
                <h3>Support</h3>
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
            <img src="images/customer1.jpg" alt="Customer 1">
            <blockquote>
                <p>"I love the quality of the shoes I bought from this website. They are comfortable and stylish. Highly recommended!"</p>
                <cite>Flora</cite>
            </blockquote>
        </div>
        <div class="testimonial">
            <img src="images/customer2.jpg" alt="Customer 2">
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
                <p>San Miguel Street, Tagum City</p>
                <p>Email: pavillo.com</p>
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