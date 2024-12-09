<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


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
            <a href="<?php echo get_home_url(); ?>" class="navbar-brand">
                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Logo">
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto">
                    <?php
                    // Get menu items for the specified location
                    $menu_items = wp_get_nav_menu_items(get_nav_menu_locations()['header-menu']);
                    if ($menu_items) {
                        foreach ($menu_items as $menu_item) {
                            $is_active = (get_the_ID() === $menu_item->object_id) ? 'active' : '';
                            echo '<li class="nav-item ' . $is_active . '">';
                            echo '<a class="nav-link" href="' . esc_url($menu_item->url) . '">' . esc_html($menu_item->title) . '</a>';
                            echo '</li>';
                        }
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </div>
</div>


    <!-- Navbar End -->


    <!-- Carousel Start -->

    <?php if (is_front_page()): ?>
      
        <?php get_template_part( 'partials/slider');  ?>
    <?php endif ?>
    <!-- Carousel End -->