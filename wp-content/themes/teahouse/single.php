<!-- Header Start -->
<?php get_header(); ?>


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-5">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="position-relative">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid bg-white rounded shadow-lg wow fadeIn" data-wow-delay="0.1s', 'title' => 'Tea Cup']);; ?>
                    </div>
                <?php endif ?>
            </div>
            <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                <p class="fs-2 fw-medium fst-italic text-primary"><?php echo get_the_title(); ?></p>
                <p class="mb-4"><?php echo get_the_content(); ?></p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Video Start -->
<?php get_template_part('partials/video', 'section');  ?>
<!-- Video End -->


<!-- Footer Start -->

<?php get_footer(); ?>