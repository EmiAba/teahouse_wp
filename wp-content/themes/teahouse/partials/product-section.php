
<div class="container-fluid product py-5 my-5 products-background" style="background: url('http://localhost/softuni/wp-content/uploads/2024/11/product-bg.png') no-repeat center center; background-size: cover;">
    <div class="container py-5">
        <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p>
            <h1 class="display-6">Tea has a complex positive effect on the body</h1>
        </div>
        <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => -1, // Adjust the number of products displayed
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();

                    // Get the product description
                    $description = get_the_excerpt() ?: 'No description available'; // Fallback for empty excerpt
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