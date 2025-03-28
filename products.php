<?php 
$page_name = 'products';
$page_title = 'Our Products';
include 'includes/header.php'; 
?>

<!-- Products Banner -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="display-4 mb-4">Our Bakery Products</h1>
                <p class="lead mb-4">Discover our wide range of artisan breads, pastries, cakes, and desserts. Everything is made fresh daily with the finest ingredients.</p>
            </div>
            <div class="col-md-6 text-center">
                <div class="img-fluid rounded product-img-placeholder">
                    <p>[A beautifully arranged display of various baked goods including bread loaves, croissants, cookies, and cakes]</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="py-5">
    <div class="container">
        <!-- Product Filters -->
        <div class="product-filters text-center mb-5">
            <button class="filter-button active" data-category="all">All Products</button>
            <?php foreach ($product_categories as $category): ?>
            <button class="filter-button" data-category="<?php echo $category; ?>"><?php echo $category; ?></button>
            <?php endforeach; ?>
        </div>
        
        <!-- Products Display -->
        <div class="row" id="productsContainer">
            <?php foreach ($all_products as $product): ?>
            <div class="col-md-6 col-lg-4 mb-4 product-card" data-category="<?php echo $product['category']; ?>">
                <div class="card h-100">
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
    </div>
</section>

<!-- Custom Orders Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="product-img-placeholder rounded">
                    <p>[A baker decorating a custom birthday cake with colorful frosting and personalized details]</p>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="mb-4">Custom Orders</h2>
                <p>Looking for something special? We offer custom orders for special occasions like birthdays, weddings, anniversaries, and corporate events.</p>
                <p>Our talented bakers can create personalized cakes, dessert platters, or special bread varieties to match your needs.</p>
                <p>Please contact us at least 48 hours in advance for custom orders.</p>
                <a href="contact.php" class="btn btn-primary mt-3">Contact for Custom Orders</a>
            </div>
        </div>
    </div>
</section>

<!-- Seasonal Specials Section -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title">Seasonal Specials</h2>
        <div class="row">
            <?php 
            $seasonal_products = array_filter($all_products, function($product) {
                return $product['category'] === 'Seasonal Specials';
            });
            
            foreach ($seasonal_products as $product): 
            ?>
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
                        <p class="text-muted"><small>Available for a limited time</small></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Back to Top Button -->
<button id="backToTopBtn" class="btn btn-primary rounded-circle position-fixed bottom-0 end-0 m-4" style="display: none; z-index: 1000;">
    <i class="fas fa-arrow-up"></i>
</button>

<?php include 'includes/footer.php'; ?>
