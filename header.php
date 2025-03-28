<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?> - <?php echo isset($page_title) ? $page_title : $site_description; ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Header -->
    <header>
        <!-- Top Info Bar -->
        <div class="top-info-bar bg-light py-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 text-center text-md-start">
                        <small><i class="fas fa-phone me-2"></i><?php echo $site_phone; ?></small>
                    </div>
                    <div class="col-md-4 text-center my-2 my-md-0">
                        <small><i class="fas fa-map-marker-alt me-2"></i><?php echo $site_address; ?></small>
                    </div>
                    <div class="col-md-4 text-center text-md-end">
                        <div class="social-icons">
                            <a href="<?php echo $social_media['facebook']; ?>" target="_blank" class="text-dark me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="<?php echo $social_media['instagram']; ?>" target="_blank" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                            <a href="<?php echo $social_media['twitter']; ?>" target="_blank" class="text-dark"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <span class="brand-name"><?php echo $site_name; ?></span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php echo $page_name === 'home' ? 'active' : ''; ?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $page_name === 'products' ? 'active' : ''; ?>" href="products.php">Our Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $page_name === 'about' ? 'active' : ''; ?>" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $page_name === 'contact' ? 'active' : ''; ?>" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Main Content -->
    <main>
