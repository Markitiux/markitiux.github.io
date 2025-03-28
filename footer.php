    </main>
    <!-- Footer -->
    <footer class="bg-dark text-light py-5 mt-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <h5 class="mb-3 text-primary-light">Sweet Delights Bakery</h5>
                    <p class="mb-3"><?php echo $site_description; ?></p>
                    <div class="social-icons">
                        <a href="<?php echo $social_media['facebook']; ?>" target="_blank" class="text-light me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?php echo $social_media['instagram']; ?>" target="_blank" class="text-light me-2"><i class="fab fa-instagram"></i></a>
                        <a href="<?php echo $social_media['twitter']; ?>" target="_blank" class="text-light"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5 class="mb-3 text-primary-light">Contact Us</h5>
                    <p><i class="fas fa-map-marker-alt me-2"></i> <?php echo $site_address; ?></p>
                    <p><i class="fas fa-phone me-2"></i> <?php echo $site_phone; ?></p>
                    <p><i class="fas fa-envelope me-2"></i> <?php echo $site_email; ?></p>
                </div>
                <div class="col-md-4">
                    <h5 class="mb-3 text-primary-light">Hours</h5>
                    <p><?php echo $site_hours; ?></p>
                </div>
            </div>
            <hr class="mt-4 mb-4">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; <?php echo date('Y'); ?> <?php echo $site_name; ?>. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p><a href="#" class="text-light">Privacy Policy</a> | <a href="#" class="text-light">Terms of Service</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>
</body>
</html>
