<?php get_header(); ?>

<!-- 404 Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                <h1 class="display-1">404</h1>
                <h1 class="mb-4"><?php _e('Page Not Found', 'teahouse'); ?></h1>
                <p class="mb-4">
                    <?php _e('We’re sorry, the page you are looking for does not exist!', 'teahouse'); ?>
                </p>
                <a class="btn btn-primary rounded-pill py-3 px-5" href="<?php echo esc_url(home_url('/')); ?>">
                    <?php _e('Go Back To Home Page', 'teahouse'); ?>
                </a>

            </div>
        </div>
    </div>
</div>
<!-- 404 End -->

<?php get_footer(); ?>
