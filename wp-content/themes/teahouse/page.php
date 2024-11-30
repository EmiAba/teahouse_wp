<!-- Heaader Start -->
<?php get_header();?>

<!-- Tuk trqbva da e about bez snimka-->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 align-items-center">

            <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                <p class="fs-2 fw-medium fst-italic text-primary"><?php echo get_the_title(); ?> /About us</p>
                <p class="mb-4"><?php echo get_the_content(); ?></p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->





<!-- Footer Start -->
<?php get_footer(); ?>