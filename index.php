<?php include 'includes/header.php'; ?>

<div class="container mt-5">
    <!-- Welcome Message -->
    <h1 class="text-center mt-5">Welcome to Our Medical Store</h1>
    <p class="text-center">We provide a wide range of medical products and services.</p>
</div>
    <!-- Carousel Slider -->
    <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="css/images/slider1.jpg" class="d-block w-100" alt="Slider Image 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>High-Quality Medical Supplies</h5>
                    <p>Providing the best medical products at affordable prices.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="css/images/slider1.jpg" class="d-block w-100" alt="Slider Image 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Wide Range of Medicines</h5>
                    <p>Find medicines for all your health needs in one place.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="css/images/slider3.jpg" class="d-block w-100" alt="Slider Image 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>24/7 Customer Support</h5>
                    <p>We’re here to help you anytime, anywhere.</p>
                </div>
            </div>
        </div>
        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    

<?php include 'includes/footer.php'; ?>
