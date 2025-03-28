<?php 
$page_name = 'home';
$page_title = 'Welcome';
include 'includes/header.php'; 
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container hero-content">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1>Fresh Baked Goods Made With Love</h1>
                <p>From artisan breads to decadent desserts, we're passionate about creating delicious treats that bring joy to your day.</p>
                <div class="d-flex flex-wrap">
                    <a href="products.php" class="btn btn-primary me-2 mb-2">View Our Products</a>
                    <a href="contact.php" class="btn btn-outline-primary mb-2">Contact Us</a>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="img-fluid rounded product-img-placeholder">
                    <p>[A display of various freshly baked bread loaves and pastries arranged artfully on a rustic wooden table]</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section class="featured-products">
    <div class="container">
        <h2 class="section-title">Our Featured Products</h2>
        <div class="row">
            <?php foreach ($featured_products as $product): ?>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card product-card h-100">
                    <div class="product-category"><?php echo $product['category']; ?></div>
                    <div class="product-img-placeholder">
                        <p>[<?php echo $product['image_desc']; ?>]</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['name']; ?></h5>
                        <p class="card-text"><?php echo $product['description']; ?></p>
                        <p class="product-price"><?php echo $product['price']; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-4">
            <a href="products.php" class="btn btn-outline-primary">View All Products</a>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="about-img-placeholder">
                    <p>[Interior of a cozy bakery with wooden shelves lined with fresh bread and pastries, warm lighting, and customers being served]</p>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="mb-4">About Our Bakery</h2>
                <p>Welcome to <?php echo $site_name; ?>, where we've been crafting artisan bread and pastries for over 35 years. Our recipes combine traditional techniques with the finest ingredients to create unforgettable flavors.</p>
                <p>Every item is made fresh daily by our team of passionate bakers who take pride in their craft.</p>
                <a href="about.php" class="btn btn-primary mt-3">Learn More About Us</a>
            </div>
        </div>
        
        <h3 class="text-center mb-4">What Makes Us Special</h3>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="about-card text-center">
                    <i class="fas fa-wheat-awn"></i>
                    <h3>Quality Ingredients</h3>
                    <p>We use only the finest flours, European-style butter, local eggs, and seasonal produce.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="about-card text-center">
                    <i class="fas fa-hands"></i>
                    <h3>Artisan Methods</h3>
                    <p>Our bread is made using traditional slow fermentation for maximum flavor and nutrition.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="about-card text-center">
                    <i class="fas fa-heart"></i>
                    <h3>Made With Love</h3>
                    <p>Each item is handcrafted with care and attention to detail by our skilled bakers.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section">
    <div class="container">
        <h2>Ready to Order?</h2>
        <p>Visit our bakery to experience the aroma of freshly baked goods and take home your favorites, or contact us to place a special order for your next event.</p>
        <div class="d-flex justify-content-center flex-wrap">
            <a href="contact.php" class="btn btn-light btn-lg me-2 mb-2">Contact Us</a>
            <a href="products.php" class="btn btn-outline-light btn-lg mb-2">View Our Products</a>
        </div>
    </div>
</section>

<!-- Back to Top Button -->
<button id="backToTopBtn" class="btn btn-primary rounded-circle position-fixed bottom-0 end-0 m-4" style="display: none; z-index: 1000;">
    <i class="fas fa-arrow-up"></i>
</button>

<?php include 'includes/footer.php'; ?>
