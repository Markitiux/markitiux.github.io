<?php 
$page_name = 'about';
$page_title = 'About Us';
include 'includes/header.php'; 
?>

<!-- About Banner -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="display-4 mb-4">Our Story</h1>
                <p class="lead mb-4">Discover the passion behind <?php echo $site_name; ?> and how we've been serving our community with freshly baked goods for over 35 years.</p>
            </div>
            <div class="col-md-6 text-center">
                <div class="img-fluid rounded about-img-placeholder">
                    <p>[The storefront of the bakery with its warm lighting and display window filled with baked goods]</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="mb-4">The <?php echo $site_name; ?> Story</h2>
                <?php echo $bakery_story; ?>
            </div>
            <div class="col-lg-6">
                <div class="about-img-placeholder rounded mb-4">
                    <p>[Old photograph of the bakery's founder in the original small shop]</p>
                </div>
                <div class="about-img-placeholder rounded">
                    <p>[Modern photo of the current bakery with staff working together]</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Values Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title">Our Values</h2>
        <div class="row">
            <?php foreach ($bakery_values as $title => $description): ?>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="about-card h-100">
                    <h3><?php echo $title; ?></h3>
                    <p><?php echo $description; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Our Team Section -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title">Meet Our Team</h2>
        <div class="row">
            <?php foreach ($team_members as $member): ?>
            <div class="col-md-4 mb-4">
                <div class="team-member">
                    <div class="team-img-placeholder">
                        <p>[<?php echo $member['image_desc']; ?>]</p>
                    </div>
                    <h3><?php echo $member['name']; ?></h3>
                    <p class="position"><?php echo $member['title']; ?></p>
                    <p><?php echo $member['bio']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title">What Our Customers Say</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="card-text">"The sourdough bread is absolutely amazing! I've tried many bakeries in town, and this is by far the best. The crust is perfect, and the flavor is outstanding."</p>
                        <p class="font-weight-bold mb-0">- Sarah J.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="card-text">"I ordered a birthday cake for my daughter, and it exceeded all expectations. Not only was it beautiful, but it was also the most delicious cake we've ever had. Thank you!"</p>
                        <p class="font-weight-bold mb-0">- Michael T.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="card-text">"As someone with celiac disease, finding good gluten-free options is challenging. Your gluten-free bread is the best I've ever had - you can't even tell it's gluten-free!"</p>
                        <p class="font-weight-bold mb-0">- Elena R.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Back to Top Button -->
<button id="backToTopBtn" class="btn btn-primary rounded-circle position-fixed bottom-0 end-0 m-4" style="display: none; z-index: 1000;">
    <i class="fas fa-arrow-up"></i>
</button>

<?php include 'includes/footer.php'; ?>
