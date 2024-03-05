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
    <header>
        <div class="container">
            <div class="logo">
                <a href="/"><img src="images/logo.png" alt="Shoe E-commerce"></a>
            </div>
            <nav>
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="shop">Shop</a></li>
                    <li><a href="about">About Us</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
            </nav>
            <div class="search-cart">
                <input type="text" placeholder="Search">
                <a href="#"><img src="images/logo1.webp" alt="Cart"></a>
            </div>
        </div>
    </header>
    @show
    <hr>
    @section('shop')
    <section class="card-section">
    <div class="card">
        <img src="image1.jpg" alt="Image 1">
        <div class="card-content">
            <h3>Card Title 1</h3>
            <p>This is a description for card 1.</p>
        </div>
    </div>
    <div class="card">
        <img src="image2.jpg" alt="Image 2">
        <div class="card-content">
            <h3>Card Title 2</h3>
            <p>This is a description for card 2.</p>
        </div>
    </div>
    <div class="card">
        <img src="image3.jpg" alt="Image 3">
        <div class="card-content">
            <h3>Card Title 3</h3>
            <p>This is a description for card 3.</p>
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
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
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
</body>
</html>