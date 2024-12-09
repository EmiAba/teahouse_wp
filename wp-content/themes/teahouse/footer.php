<div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-4">

            <div class="col-lg-3 col-md-6">
                <?php get_sidebar('footer-1'); ?>
            </div>


            <div class="col-lg-3 col-md-6">
                <?php get_sidebar('footer-2'); ?>
            </div>


            <div class="col-lg-3 col-md-6">
                <?php get_sidebar('footer-3'); ?>
            </div>


            <div class="col-lg-3 col-md-6">
                <?php get_sidebar('footer-4'); ?>
            </div>
        </div>
    </div>
</div>



<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <?php echo esc_html(get_theme_mod('footer_year', date('Y'))); ?> 
                <a class="fw-medium" href="#"><?php echo esc_html(get_theme_mod('footer_site_name', 'Your Site Name')); ?></a>, All Rights Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
                <?php echo wp_kses_post(get_theme_mod('footer_attribution', 'Designed by <a href="https://htmlcodex.com">HTML Codex</a>')); ?>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->



<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>





<?php wp_footer(); ?>
</body>

</html>