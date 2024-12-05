<?php
/**
 * Template Name: Full Menu Page
 */
?>

<?php get_header(); ?>

<!-- Menu Page -->
<div class="container-xxl py-5">
    <div class="container">
     
        <div class="section-title text-center">
            <h1 class="display-6"><?php echo esc_html(get_theme_mod('menu_page_title', 'Our Full Menu')); ?></h1>
            <p class="fs-5 text-muted"><?php echo esc_html(get_theme_mod('menu_page_subtitle', 'Explore our wide selection of teas, treats, and beverages.')); ?></p>
        </div>

        <!-- Tea Categories -->
        <div class="row mb-5">
            <div class="col-12">
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <div class="mb-5">
                        <h2 class="mb-4 text-primary"><?php echo esc_html(get_theme_mod("tea_category_title_$i", "Tea Category $i")); ?></h2>
                        <div class="row g-4">
                            <?php for ($j = 1; $j <= 4; $j++) : ?>
                                <?php 
                                    $slug = sanitize_title(get_theme_mod("tea_title_{$i}_{$j}", "Tea $j")); 
                                    $link = site_url("/product/$slug"); 
                                ?>
                                <div class="col-md-6">
                                    <div class="card position-relative">
                                        <a href="<?php echo esc_url($link); ?>">
                                            <img src="<?php echo esc_url(get_theme_mod("tea_img_{$i}_{$j}", get_stylesheet_directory_uri() . "/img/default-tea.jpg")); ?>" class="card-img-top" alt="Tea <?php echo $j; ?>" style="height: 150px; object-fit: cover;">
                                        </a>
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <a href="<?php echo esc_url($link); ?>">
                                                    <?php echo esc_html(get_theme_mod("tea_title_{$i}_{$j}", "Tea $j")); ?>
                                                </a>
                                            </h5>
                                            <p class="card-text text-muted"><?php echo esc_html(get_theme_mod("tea_description_{$i}_{$j}", "Description for Tea $j")); ?></p>
                                            <p class="fw-bold"><?php echo esc_html(get_theme_mod("tea_price_{$i}_{$j}", "$5.00")); ?></p>

                                           
                                            <a href="<?php echo esc_url($link); ?>" class="position-absolute top-0 end-0 me-2 mt-2 text-decoration-none small text-primary" >
                                                Vote
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>

        <!-- Other Categories -->
        <div class="row">
          
            <div class="col-lg-8">
                <!-- Salty Cakes -->
                <div class="mb-5">
                    <h3 class="mb-3 text-secondary"><?php echo esc_html(get_theme_mod('salty_cakes_title', 'Salty Cakes')); ?></h3>
                    <div class="row g-4">
                        <?php for ($i = 1; $i <= 3; $i++) : ?>
                            <div class="col-md-12">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo esc_url(get_theme_mod("salty_cake_img_$i", get_stylesheet_directory_uri() . "/img/default-salty-cake.jpg")); ?>" class="img-thumbnail me-3" alt="Salty Cake <?php echo $i; ?>" style="width: 100px;">
                                    <div>
                                        <h5><?php echo esc_html(get_theme_mod("salty_cake_title_$i", "Salty Cake $i")); ?></h5>
                                        <p class="fw-bold"><?php echo esc_html(get_theme_mod("salty_cake_price_$i", "$3.50")); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>

                <!-- Cookies and Cakes -->
                <div class="mb-5">
                    <h3 class="mb-3 text-secondary"><?php echo esc_html(get_theme_mod('cookies_cakes_title', 'Cookies and Cakes')); ?></h3>
                    <div class="row g-4">
                        <?php for ($i = 1; $i <= 3; $i++) : ?>
                            <div class="col-md-12">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo esc_url(get_theme_mod("cookie_cake_img_$i", get_stylesheet_directory_uri() . "/img/default-cookie-cake.jpg")); ?>" class="img-thumbnail me-3" alt="Cookie or Cake <?php echo $i; ?>" style="width: 100px;">
                                    <div>
                                        <h5><?php echo esc_html(get_theme_mod("cookie_cake_title_$i", "Cookie or Cake $i")); ?></h5>
                                        <p class="fw-bold"><?php echo esc_html(get_theme_mod("cookie_cake_price_$i", "$2.50")); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>

            <!--  Soft Drinks -->
            <div class="col-lg-4">
                <div>
                    <h3 class="mb-3 text-secondary"><?php echo esc_html(get_theme_mod('soft_drinks_title', 'Soft Drinks')); ?></h3>
                    <ul class="list-group">
                        <?php for ($i = 1; $i <= 16; $i++) : ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?php echo esc_html(get_theme_mod("soft_drink_title_$i", "Soft Drink $i")); ?>
                                <span class="fw-bold"><?php echo esc_html(get_theme_mod("soft_drink_price_$i", "$1.50")); ?></span>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Buy Tea Section -->
        <div class="text-center mt-5">
            <img src="<?php echo esc_url(get_theme_mod('buy_tea_img', get_stylesheet_directory_uri() . '/img/buy-tea.jpg')); ?>" class="img-fluid rounded mb-3" style="max-width: 600px;" alt="Buy Tea">
            <h3><?php echo esc_html(get_theme_mod('buy_tea_title', 'Take Your Favorite Tea Home!')); ?></h3>
            <p class="fs-5 text-muted"><?php echo esc_html(get_theme_mod('buy_tea_description', 'Choose from our premium collection of teas and enjoy them wherever you like.')); ?></p>
        </div>
    </div>
</div>

<?php get_footer(); ?>
