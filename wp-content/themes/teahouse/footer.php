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
                &copy; <a class="fw-medium" href="#">Your Site Name</a>, All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Designed By <a class="fw-medium" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="fw-medium" href="https://themewagon.com">ThemeWagon</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/wow/wow.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/easing/easing.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/waypoints/waypoints.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>


<?php wp_footer(); ?>
</body>

</html>