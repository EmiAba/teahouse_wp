<?php get_header(); ?>
<!-- ACF plugin usage -->
<?php 
$id = get_the_ID();
$testimonial_email = get_field('author_email', $id);
$testimonial_location = get_field('author_location', $id);
?>

<!-- Single Testimonial Page -->
<div class="container-xxl py-5">
    <div class="container">
     
        <div class="row g-4 align-items-center">
            <div class="col-lg-5">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="position-relative">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid bg-white rounded shadow-lg', 'title' => get_the_title()]); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-7">
                <p class="fs-2 fw-medium fst-italic text-primary"><?php the_title(); ?></p>
                
            
                <p class="text-muted">
                    <?php 
                    $profession = get_post_meta(get_the_ID(), 'client_profession', true); 
                    $company = get_post_meta(get_the_ID(), 'client_company', true); 
                    ?>
                    <?php if ($profession) : ?>
                        <strong>Profession:</strong> <?php echo esc_html($profession); ?><br>
                    <?php endif; ?>
                    <?php if ($company) : ?>
                        <strong>Company:</strong> <?php echo esc_html($company); ?><br>
                    <?php endif; ?>
                    <?php if ($testimonial_email) : ?>
                        <strong>Email:</strong> <?php echo esc_html($testimonial_email); ?><br>
                    <?php endif; ?>
                    <?php if ($testimonial_location) : ?>
                        <strong>Location:</strong> <?php echo esc_html($testimonial_location); ?>
                    <?php endif; ?>
                </p>

         
                <blockquote class="blockquote border-start border-3 border-primary ps-3">
                    <p class="mb-4"><?php echo do_shortcode(get_the_content()); ?></p>
                </blockquote>

               
                <p class="text-muted"><small><strong>Testimonial Date:</strong> <?php echo get_the_date(); ?></small></p>
            </div>
        </div>

 
        <div class="container py-5 mt-5">
            <h2 class="text-center mb-4">More Testimonials</h2>
            <div class="row">
                <?php
                $related_args = array(
                    'post_type'      => 'testimonial',
                    'posts_per_page' => 3,
                    'post__not_in'   => array(get_the_ID()),
                    'orderby'        => 'rand',
                );
                $related_query = new WP_Query($related_args);

                if ($related_query->have_posts()) :
                    while ($related_query->have_posts()) : $related_query->the_post();
                        ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="card border-0 shadow-sm">
                                <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium', ['class' => 'card-img-top rounded']); ?>
                                    <?php endif; ?>
                                    <div class="card-body">
                                        <h5 class="card-title text-primary"><?php the_title(); ?></h5>
                                        <p class="card-text text-muted"><?php echo wp_trim_words(get_the_content(), 15, '...'); ?></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p class="text-center">No related testimonials available.</p>';
                endif;
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
