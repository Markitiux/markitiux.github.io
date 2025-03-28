<?php 
$page_name = 'contact';
$page_title = 'Contact Us';
include 'includes/header.php'; 

$success_message = '';
$error_message = '';

// Check if form was submitted and processed successfully
if (isset($_GET['success']) && $_GET['success'] == 1) {
    $success_message = 'Thank you for your message! We will get back to you soon.';
}

// Check if form was submitted but there was an error
if (isset($_GET['error']) && $_GET['error'] == 1) {
    $error_message = 'There was an error sending your message. Please try again.';
}
?>

<!-- Contact Banner -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="display-4 mb-4">Contact Us</h1>
                <p class="lead mb-4">Have a question or want to place a custom order? We'd love to hear from you!</p>
            </div>
            <div class="col-md-6 text-center">
                <div class="img-fluid rounded contact-img-placeholder">
                    <p>[A friendly bakery staff member assisting a customer at the counter]</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-5">
    <div class="container">
        <?php if ($success_message): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $success_message; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>

        <?php if ($error_message): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo $error_message; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="contact-form">
                    <h2 class="mb-4">Send Us a Message</h2>
                    <form id="contactForm" action="process_form.php" method="post" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <div class="invalid-feedback">
                                Please enter your name.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                            <div class="invalid-feedback">
                                Please enter a valid phone number (e.g., 123-456-7890).
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <select class="form-select" id="subject" name="subject" required>
                                <option value="" selected disabled>Select a subject</option>
                                <option value="General Inquiry">General Inquiry</option>
                                <option value="Custom Order">Custom Order</option>
                                <option value="Feedback">Feedback</option>
                                <option value="Catering">Catering</option>
                                <option value="Other">Other</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a subject.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            <div class="invalid-feedback">
                                Please enter your message.
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-info h-100">
                    <h3>Contact Information</h3>
                    <p><i class="fas fa-map-marker-alt"></i> <?php echo $site_address; ?></p>
                    <p><i class="fas fa-phone"></i> <?php echo $site_phone; ?></p>
                    <p><i class="fas fa-envelope"></i> <?php echo $site_email; ?></p>
                    
                    <h4 class="mt-4 mb-3">Hours of Operation</h4>
                    <p><?php echo $site_hours; ?></p>
                    
                    <h4 class="mt-4 mb-3">Follow Us</h4>
                    <div class="social-icons">
                        <a href="<?php echo $social_media['facebook']; ?>" target="_blank" class="text-white me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="<?php echo $social_media['instagram']; ?>" target="_blank" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="<?php echo $social_media['twitter']; ?>" target="_blank" class="text-white"><i class="fab fa-twitter fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title">Find Us</h2>
        <div class="map-container">
            <p>[An interactive map showing the bakery location at <?php echo $site_address; ?>]</p>
        </div>
        <div class="text-center mt-4">
            <p class="mb-4">We're located in the heart of downtown, just a block from Central Park. Street parking is available, and we're also easily accessible by public transit.</p>
            <a href="https://maps.google.com/?q=<?php echo urlencode($site_address); ?>" target="_blank" class="btn btn-primary">Get Directions</a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title">Frequently Asked Questions</h2>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Do you offer gluten-free options?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we offer a selection of gluten-free bread, pastries, and desserts. However, please note that they are prepared in a kitchen that also handles wheat flour, so they may not be suitable for those with severe gluten allergies or celiac disease.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How far in advance should I place a custom cake order?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                For standard custom cakes, we request at least 48 hours notice. For wedding cakes or more elaborate designs, we recommend placing your order 2-4 weeks in advance. During holiday seasons, please allow additional time.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Do you deliver?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we offer delivery for large orders and special occasions within a 15-mile radius. Delivery fees vary based on distance and order size. Please contact us for more information.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Do you cater events?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Absolutely! We cater events of all sizes, from small office meetings to large weddings. We can create custom dessert tables, breakfast pastry platters, bread baskets, and more. Please contact us to discuss your specific needs.
                            </div>
                        </div>
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
