<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
                <a href="<?php echo get_home_url('/'); ?>" class="navbar-brand">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Logo">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'container'      => false,
                        'menu_class'     => 'navbar-nav ms-auto',
                        'fallback_cb'    => false,
                        'depth'          => 2,
                        'walker'         => new WP_Bootstrap_Navwalker(),
                    ));
                    ?>
                </div>


        </div>
        </nav>
    </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->

    <?php if (is_front_page()): ?>

        <div class="container-fluid px-0 mb-5">
            <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/carousel-1.jpg" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7 text-center">
                                        <p class="fs-4 text-white animated zoomIn">Welcome to <strong class="text-dark">TEA House</strong></p>
                                        <h1 class="display-1 text-dark mb-4 animated zoomIn">Organic & Quality Tea</h1>
                                        <a href="" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/carousel-2.jpg" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7 text-center">
                                        <p class="fs-4 text-white animated zoomIn">Welcome to <strong class="text-dark">TEA House</strong></p>
                                        <h1 class="display-1 text-dark mb-4 animated zoomIn">Organic & Quality Tea Production</h1>
                                        <a href="" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    <?php endif ?>
    <!-- Carousel End -->