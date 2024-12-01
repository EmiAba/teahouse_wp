<div class="container-fluid testimonial py-5 my-5">
    <div class="container py-5">
        <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium fst-italic text-white">Testimonial</p>
            <h1 class="display-6">What our clients say about our tea</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.5s">
            <?php
            $testimonial_args = array(
                'post_type'      => 'testimonial',
                'posts_per_page' => -1,
                'orderby'        => 'date',
                'order'          => 'DESC',
            );
            $testimonial_query = new WP_Query($testimonial_args);

            if ($testimonial_query->have_posts()) :
                while ($testimonial_query->have_posts()) : $testimonial_query->the_post();

                    $profession = get_post_meta(get_the_ID(), 'client_profession', true);
                    $company = get_post_meta(get_the_ID(), 'client_company', true);
            ?>
                    <div class="testimonial-item p-4 p-lg-5">
                        <!-- Shortened Content -->
                        <p class="mb-4">
                            <?php echo wp_trim_words(get_the_content(), 20, '...'); ?>
                            <a href="<?php the_permalink(); ?>" class="text-primary">Read More</a>
                        </p>
                        <div class="d-flex align-items-center justify-content-center">
                            <?php if (has_post_thumbnail()) : ?>
                                <img class="img-fluid flex-shrink-0" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>" style="border-radius: 50%; width: 70px; height: 70px; object-fit: cover;">
                            <?php else : ?>
                                <img class="img-fluid flex-shrink-0" src="<?php echo get_stylesheet_directory_uri(); ?>/img/default-avatar.png" alt="Default Avatar" style="border-radius: 50%; width: 70px; height: 70px; object-fit: cover;">
                            <?php endif; ?>

                            <div class="text-start ms-3">
                                <h5><?php the_title(); ?></h5>
                                <?php if ($profession) : ?>
                                    <span class="text-primary"><?php echo esc_html($profession); ?></span><br>
                                <?php endif; ?>
                                <?php if ($company) : ?>
                                    <span class="text-company"><?php echo esc_html($company); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No testimonials available.</p>';
            endif;
            ?>
        </div>
    </div>
</div>