@extends('layouts.client')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection

@section('content')

<div class="landing-page">
    <header class="py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="#" class="logo"><b>Drive 'N' Dine</b></a>
            
            <!-- Navigation Menu for Larger Screens -->
            <ul class="links list-unstyled d-flex gap-3 mb-0 d-none d-md-flex">
                <li><a href="#" class="text-dark text-decoration-none">Home</a></li>
                <li><a href="#" class="text-dark text-decoration-none">About Us</a></li>
                <li><a href="#" class="text-dark text-decoration-none">Menu</a></li>
                <li><a href="#" class="text-decoration-none" style="color: white;">Get Started</a></li>
            </ul>
            
            <!-- Hamburger Menu for Mobile (Hidden on desktop) -->
            <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </header>
    
    <!-- Collapsable Mobile Menu -->
    <div class="collapse d-md-none" id="navbarNav">
        <ul class="links list-unstyled text-center p-3 mb-0">
            <li><a href="#" class="text-dark text-decoration-none">Home</a></li>
            <li><a href="#" class="text-dark text-decoration-none">About Us</a></li>
            <li><a href="#" class="text-dark text-decoration-none">Menu</a></li>
            <li><a href="#" class="text-decoration-none" style="color: white;">Get Started</a></li>
        </ul>
    </div>
</div>
    <div class="content">
        <div class="container mt-5">
            <div class="row">
                <!-- Text content column -->
                <div class="col-12 col-md-6">
                    <div class="info">
                        <h1 class="fw-bold text-dark">Welcome to Drive 'N' Dine </h1>
                        <p class="lead">At our cafe, we offer a variety of options to suit your dining preferences. Whether you prefer the cozy atmosphere of our indoor dining area or the convenience of our drive-in service, we’ve got you covered!</p>
                        <p class="lead">Enjoy freshly brewed coffee, delicious meals, and a friendly atmosphere that will make you feel right at home. We cater to every mood and every moment.</p>
                    </div>
                    <div class="d-flex justify-content-md-start justify-content-center gap-3">
                        <a href="#container2"><button class="custom-btn">Get Started</button></a>
                    </div>
                    
                </div>
                
                <!-- Image column -->
                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                    <dotlottie-player src="https://lottie.host/ecea2ec5-4123-4508-becc-f5ec4a6db149/ZWqfOAnHUB.lottie" background="transparent" speed="1" style="width: 400px; height: 300px" loop autoplay></dotlottie-player>
                </div>
            </div>
        </div>
    </div>


<div class="dine-dash" id="container2">
    <div class="container my-2">
        <div class="row">
            <!-- Left Column: DotLottie animation -->
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center mb-4">
                <dotlottie-player src="https://lottie.host/97755bcd-2e56-4ce0-abb3-cb18492abdbf/xB6Qkjg0YW.lottie" background="transparent" speed="1" style="width: 400px; height: 400px" loop autoplay></dotlottie-player>
            </div>

            <!-- Right Column: Dine-in or Drive-in description -->
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center mb-4">
                <h2 class="fw-bold text-dark">Enjoy the Convenience of Drive-In Service</h2>
                <p class="lead">Skip the wait and enjoy the ease of our drive-in service. Stay in the comfort of your car while we bring your meal directly to you. It's fast, simple, and perfect for those on the go.</p>
                <div class="d-flex justify-content-center gap-3">
                    <!-- Dine-In Button -->
               
                    <!-- Drive-In Button -->
                    <a href="{{ url('') }}/drivein"><button class="custom-btn">Drive-In</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="row">
            <!-- Text content column -->
            <div class="col-12 col-md-6">
                <div class="info">
                    <h2 class="fw-bold text-dark">Reserve Your Parking Spot and Dine with Ease</h2>
<p class="lead">
Check real-time availability of parking spaces directly on our website before you arrive. Whether you're driving in to enjoy your meal or looking to rent a spot, we've got you covered. Reserve your space now for a seamless dining experience, with the option to rent your spot for added convenience.
</p>

                </div>
               
            </div>
            
            
            <!-- Image column -->
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
<lottie-player src="https://lottie.host/3ab0f55f-526f-4e30-9454-dfa44162d0bc/7wFMMfn7Me.json" background="##FFFFFF" speed="1" style="width: 300px; height: 300px" loop  autoplay ></lottie-player>
            </div>
        </div>
    </div>
</div>
<div class="dine-dash" id="container2">
    <div class="container my-2">
        <div class="row">
            <!-- Left Column: DotLottie animation -->
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center mb-4">
                <lottie-player src="https://lottie.host/97c0bec9-7401-4874-ba0d-081fdcacf1b7/UknvhPwhmb.json" background="##FFFFFF" speed="1" style="width: 300px; height: 300px" loop  autoplay></lottie-player>   
            </div>

            <!-- Right Column: Dine-in or Drive-in description -->
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center mb-4">
                <h2 class="fw-bold text-dark">Check Your Order Status</h2>
                <p class="lead">Stay updated on the status of your order. Simply check here to see whether your meal is being prepared, ready for pickup, or on its way to your location. We keep you informed every step of the way.</p>
                <div class="d-flex justify-content-center gap-3">
                    <!-- Order Status Check Button -->
                    <button class="custom-btn">Check Order Status</button>
                </div>
            </div>
            
            </div>
        </div>
    </div>
</div>

<footer class="footer-section">
    <div class="container">
      
        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="#" class="logo"style="color:white;"><b>Drive 'N' Dine</b></a>
                        </div>
                        <div class="footer-text">
                            <p>Thank you for visiting Drive 'N' Dine! We strive to provide the best dining experience, whether you prefer to dine in or drive through. Stay connected and enjoy great meals with us!.</p>
                        </div>
                        <div class="footer-social-icon">
                            <span>Follow us</span>
                            <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                            <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">about</a></li>
                            <li><a href="#">Menu</a></li>
                            <li><a href="#">Drive in</a></li>
                          
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Subscribe</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                        </div>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="text" placeholder="Email Address">
                                <button><i class="fab fa-telegram-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2024, All Right Reserved <a href="">Drive N Dine</a></p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Policy</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

@endsection
@section('js')
    <link rel="stylesheet" href="{{ asset('js/js') }}">
@endsection