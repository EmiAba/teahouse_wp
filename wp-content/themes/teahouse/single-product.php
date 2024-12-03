<!-- Header Start -->
<?php get_header(); ?>

<!-- About Start -->
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

                <!-- Like and Share Section -->
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
<!-- About End -->

<!-- Products Section -->
<div class="container-fluid product py-5 my-5">
    <div class="container py-5">
        <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p>
            <h1 class="display-6">Tea has a complex positive effect on the body</h1>
        </div>
        <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => -1,
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $description = get_the_excerpt() ?: 'No description available';
            ?>
                    <a href="<?php the_permalink(); ?>" class="d-block product-item rounded">
                        <div class="product-background" style="height: 300px; border-radius: 8px;">
                            <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>" alt="<?php the_title(); ?>" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                        </div>
                        <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                            <h4 class="text-primary"><?php the_title(); ?></h4>
                            <p class="text-body"><?php echo esc_html($description); ?></p>
                        </div>
                    </a>
            <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </div>
</div>
<!-- Products End -->

<!-- Articles Section -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/article.jpg" alt="">
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="section-title">
                    <p class="fs-5 fw-medium fst-italic text-primary">Featured Article</p>
                    <h1 class="display-6">The history of tea leaf in the world</h1>
                </div>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna. Tempor erat elitr rebum at clita.</p>
                <a href="" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- Articles End -->

<!-- Footer -->
<?php get_footer(); ?>