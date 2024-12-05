<?php
/**
 * Template Name: About Us
 */
?>

<?php get_header(); ?>
<!-- About Us -->

<div class="container-xxl py-5">
    <div class="container">

        <div class="section-title text-center">
            <h1 class="display-6"><?php echo esc_html(get_theme_mod('tea_house_title', 'Welcome to Our Tea House')); ?></h1>
            <p class="fs-5 text-muted"><?php echo esc_html(get_theme_mod('tea_house_subtitle', 'A cozy retreat where you can savor the finest teas and relax with friends.')); ?></p>
        </div>

      
        <div class="row g-5">
            <div class="col-lg-6">
                <h2 class="mb-3"><?php echo esc_html(get_theme_mod('about_title', 'Our Story')); ?></h2>
                <p><?php echo esc_html(get_theme_mod('about_paragraph1', 'Nestled in the heart of the city, our Tea House is a haven for tea enthusiasts.')); ?></p>
                <p><?php echo esc_html(get_theme_mod('about_paragraph2', 'We source our teas from the finest gardens worldwide, ensuring every sip is a journey of flavors and aromas.')); ?></p>
                <p><?php echo esc_html(get_theme_mod('about_paragraph3', 'Our tea house is more than just a place to drink tea – it’s a community where everyone is welcome to relax, unwind, and discover the beauty of tea culture.')); ?></p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded mb-3" src="<?php echo esc_url(get_theme_mod('about_img1', get_stylesheet_directory_uri() . '/img/tea-house-interior.jpg')); ?>" alt="Tea House Interior">
            </div>
        </div>

       
        <div class="row g-5 my-5">
            <div class="col-lg-6">
                <h2 class="mb-3"><?php echo esc_html(get_theme_mod('services_title', 'What We Offer')); ?></h2>
                <ul class="list-unstyled">
                    <li><strong>On-Site Tea Experience:</strong> <?php echo esc_html(get_theme_mod('service1', 'Enjoy a cup of freshly brewed tea at one of our beautifully set tables.')); ?></li>
                    <li><strong>Tea-to-Go:</strong> <?php echo esc_html(get_theme_mod('service2', 'Take home a selection of our finest teas.')); ?></li>
                    <li><strong>Events and Gatherings:</strong> <?php echo esc_html(get_theme_mod('service3', 'Host tea parties, gatherings, or meetings at our venue.')); ?></li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded mb-3" src="<?php echo esc_url(get_theme_mod('service_img1', get_stylesheet_directory_uri() . '/img/tea-service.jpg')); ?>" alt="Tea Service">
            </div>
        </div>

    
        <div class="text-center mb-5">
            <h2 class="mb-3"><?php echo esc_html(get_theme_mod('featured_title', 'Discover Our Teas')); ?></h2>
            <p class="fs-5 text-muted"><?php echo esc_html(get_theme_mod('featured_subtitle', 'A curated selection of the world’s finest teas awaits you.')); ?></p>
        </div>

       
        <?php if (get_option('show_special_offers', 1)) : ?>
            <div class="row g-4 special-tea-container">
          
    <div class="col-md-4  special-tea">
        <img class="img-fluid rounded mb-3" src="<?php echo esc_url(get_theme_mod('tea1_img', get_stylesheet_directory_uri() . '/img/tea1.jpg')); ?>" alt="Tea 1">
        <h5><?php echo esc_html(get_theme_mod('tea1_title', 'Tea 1')); ?></h5>
        <p><?php echo esc_html(get_theme_mod('tea1_description', 'Description for Tea 1')); ?></p>
    </div>
    <div class="col-md-4 special-tea">
        <img class="img-fluid rounded mb-3" src="<?php echo esc_url(get_theme_mod('tea2_img', get_stylesheet_directory_uri() . '/img/tea2.jpg')); ?>" alt="Tea 2">
        <h5><?php echo esc_html(get_theme_mod('tea2_title', 'Tea 2')); ?></h5>
        <p><?php echo esc_html(get_theme_mod('tea2_description', 'Description for Tea 2')); ?></p>
    </div>
    <div class="col-md-4 special-tea">
        <img class="img-fluid rounded mb-3" src="<?php echo esc_url(get_theme_mod('tea3_img', get_stylesheet_directory_uri() . '/img/tea3.jpg')); ?>" alt="Tea 3">
        <h5><?php echo esc_html(get_theme_mod('tea3_title', 'Tea 3')); ?></h5>
        <p><?php echo esc_html(get_theme_mod('tea3_description', 'Description for Tea 3')); ?></p>
    </div>
    

            </div>
        <?php else : ?>
            <p class="text-center">Special offers are currently unavailable.</p>
        <?php endif; ?>

        
        <div class="text-end mt-4">
            <a href="<?php echo esc_url(site_url('/menu')); ?>" class="btn btn-outline-primary">
                View Our Menu <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
