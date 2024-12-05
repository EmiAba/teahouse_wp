<!-- Header Start -->
<?php get_header(); ?>


<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-5">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="position-relative">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid bg-white rounded shadow-lg wow fadeIn', 'data-wow-delay' => '0.1s', 'title' => 'Tea Cup']); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                <p class="fs-2 fw-medium fst-italic text-primary"><?php echo get_the_title(); ?></p>
                <p class="mb-4"><?php echo get_the_content(); ?></p>

               
                <div class="d-flex justify-content-between align-items-center mt-4">

                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="btn btn-primary" target="_blank">
                        Share on Facebook
                    </a>

                    <button class="btn btn-primary like-button" data-id="<?php echo get_the_ID(); ?>">
                        Like <span class="like-count"><?php echo get_post_meta(get_the_ID(), 'votes', true) ?: 0; ?></span>
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Single Product End -->



<!-- Video Start -->
<?php get_template_part( 'partials/video', 'section');  ?>
<!-- Video End -->


<!-- Footer -->
<?php get_footer(); ?>