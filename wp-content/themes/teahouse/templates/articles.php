<?php
/**
 *Template Name: Articles 
 */
?>
<?php get_header();?>


<!-- Articles Page -->
<div class="container-xxl py-5">
    <div class="container">
       
        <div class="section-title text-center mx-auto mb-5">
            <p class="fs-5 fw-medium fst-italic text-primary"><?php the_title(); ?></p>
            <h1 class="display-6">All Articles</h1>
        </div>

        <div class="row g-4">
            <?php
           
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 10, 
                'paged'          => $paged, 
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    ?>
                   
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="card border-0 shadow-sm">
                            <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                              
                                <?php if (has_post_thumbnail()) : ?>
                                    <img class="card-img-top rounded" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>" style="max-height: 250px; object-fit: cover;">
                                <?php endif; ?>
                               
                                <div class="card-body">
                                    <h5 class="card-title text-primary"><?php the_title(); ?></h5>
                                    <p class="card-text text-muted">
                                        <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm rounded-pill">Read More</a>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
                endwhile;

              
                echo '<div class="col-12 mt-4">';
                echo paginate_links(array(
                    'total' => $query->max_num_pages,
                ));
                echo '</div>';

                wp_reset_postdata();
            else :
                echo '<p>No articles found.</p>';
            endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>




<!-- Footer Start -->
<?php get_footer(); ?>

