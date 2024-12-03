<?php
/**
 *Template Name: About Us 
 */
?>

<?php get_header();?>
<!-- About Us -->

<div class="container-xxl py-5">
    <div class="container">
        <!-- Header Section -->
        <div class="section-title text-center" >
            <h1 class="display-6"><?php echo esc_html(get_theme_mod('tea_house_title', 'Welcome to Our Tea House')); ?></h1>
            <p class="fs-5 text-muted"><?php echo esc_html(get_theme_mod('tea_house_subtitle', 'A cozy retreat where you can savor the finest teas and relax with friends.')); ?></p>
        </div>

        <!-- About Section -->
        <div class="row g-5">
            <!-- Text Section -->
            <div class="col-lg-6">
                <h2 class="mb-3"><?php echo esc_html(get_theme_mod('about_title', 'Our Story')); ?></h2>
                <p>
                    <?php echo esc_html(get_theme_mod('about_paragraph1', 'Nestled in the heart of the city, our Tea House is a haven for tea enthusiasts. For over 25 years, we have been dedicated to serving premium teas and creating memorable moments for our guests. Whether you’re seeking a quiet escape or a place to gather with friends, our cozy ambiance and exceptional teas are here to welcome you.')); ?>
                </p>
                <p>
                    <?php echo esc_html(get_theme_mod('about_paragraph2', 'We source our teas from the finest gardens worldwide, ensuring every sip is a journey of flavors and aromas. From traditional black teas to herbal infusions, we have something to suit every palate.')); ?>
                </p>
                <p>
                    <?php echo esc_html(get_theme_mod('about_paragraph3', 'Our tea house is more than just a place to drink tea – it’s a community where everyone is welcome to relax, unwind, and discover the beauty of tea culture.')); ?>
                </p>
            </div>
            <!-- Image Section -->
            <div class="col-lg-6">
                <img class="img-fluid rounded mb-3" src="<?php echo esc_url(get_theme_mod('about_img1', get_stylesheet_directory_uri() . '/img/tea-house-interior.jpg')); ?>" alt="Tea House Interior">
            </div>
        </div>

        <!-- Services Section -->
        <div class="row g-5 my-5">
            <!-- Text Section -->
            <div class="col-lg-6">
                <h2 class="mb-3"><?php echo esc_html(get_theme_mod('services_title', 'What We Offer')); ?></h2>
                <ul class="list-unstyled">
                    <li>
                        <strong>On-Site Tea Experience:</strong> 
                        <?php echo esc_html(get_theme_mod('service1', 'Enjoy a cup of freshly brewed tea at one of our beautifully set tables. We create a serene and welcoming environment for you to relax and unwind.')); ?>
                    </li>
                    <li>
                        <strong>Tea-to-Go:</strong> 
                        <?php echo esc_html(get_theme_mod('service2', 'Take home a selection of our finest teas, carefully packaged to preserve their quality and freshness.')); ?>
                    </li>
                    <li>
                        <strong>Events and Gatherings:</strong> 
                        <?php echo esc_html(get_theme_mod('service3', 'Host tea parties, gatherings, or meetings at our venue. We cater to all occasions with custom setups.')); ?>
                    </li>
                </ul>
            </div>
            <!-- Image Section -->
            <div class="col-lg-6">
                <img class="img-fluid rounded mb-3" src="<?php echo esc_url(get_theme_mod('service_img1', get_stylesheet_directory_uri() . '/img/tea-service.jpg')); ?>" alt="Tea Service">
            </div>
        </div>

        <!-- Featured Teas Section -->
        <div class="text-center mb-5">
            <h2 class="mb-3"><?php echo esc_html(get_theme_mod('featured_title', 'Discover Our Teas')); ?></h2>
            <p class="fs-5 text-muted"><?php echo esc_html(get_theme_mod('featured_subtitle', 'A curated selection of the world’s finest teas awaits you.')); ?></p>
        </div>
        <div class="row g-4">
            <!-- Tea 1 -->
            <div class="col-md-4">
                <img class="img-fluid rounded mb-3" src="<?php echo esc_url(get_theme_mod('tea1_img', get_stylesheet_directory_uri() . '/img/black-tea.jpg')); ?>" alt="Black Tea">
                <h5><?php echo esc_html(get_theme_mod('tea1_title', 'Black Tea')); ?></h5>
                <p><?php echo esc_html(get_theme_mod('tea1_description', 'A bold and robust flavor, perfect for any time of day.')); ?></p>
            </div>
            <!-- Tea 2 -->
            <div class="col-md-4">
                <img class="img-fluid rounded mb-3" src="<?php echo esc_url(get_theme_mod('tea2_img', get_stylesheet_directory_uri() . '/img/green-tea.jpg')); ?>" alt="Green Tea">
                <h5><?php echo esc_html(get_theme_mod('tea2_title', 'Green Tea')); ?></h5>
                <p><?php echo esc_html(get_theme_mod('tea2_description', 'Refreshing and rich in antioxidants, it’s a tea lover’s favorite.')); ?></p>
            </div>
            <!-- Tea 3 -->
            <div class="col-md-4">
                <img class="img-fluid rounded mb-3" src="<?php echo esc_url(get_theme_mod('tea3_img', get_stylesheet_directory_uri() . '/img/herbal-tea.jpg')); ?>" alt="Herbal Tea">
                <h5><?php echo esc_html(get_theme_mod('tea3_title', 'Herbal Tea')); ?></h5>
                <p><?php echo esc_html(get_theme_mod('tea3_description', 'A soothing and caffeine-free blend, ideal for relaxation.')); ?></p>
            </div>
        </div>
    </div>
</div>



<!-- Footer Start -->
<?php get_footer(); ?>