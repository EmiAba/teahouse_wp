<?php
// Number of posts for "Latest Articles"
$number_of_posts = 5;

// Query for the first post and the rest
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => $number_of_posts + 1, // Current Article + Latest Articles
);
$query = new WP_Query($args);
?>

<div class="container-xxl py-5">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title text-center mx-auto mb-5">
            <p class="fs-5 fw-medium fst-italic text-primary">Articles</p>
            <h1 class="display-6">Current & Recent News</h1>
        </div>

        <div class="row g-4">
            <!-- Current Article (First Post) -->
            <div class="col-lg-8 wow fadeIn" data-wow-delay="0.1s">
                <?php if ($query->have_posts()) : ?>
                    <?php $query->the_post(); // Take the first post ?>
                    <div class="featured-article">
                        <a href="<?php the_permalink(); ?>">
                            <img class="img-fluid mb-3" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>" style="border-radius: 10px; max-height: 400px; object-fit: cover; width: 100%;">
                        </a>
                        <h2 class="h3 text-dark mb-3"><?php the_title(); ?></h2>
                        <p class="mb-4">
                            <?php echo wp_trim_words(get_the_excerpt(), 30, ' <a href="' . get_the_permalink() . '">[...]</a>'); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Latest Articles (Remaining Posts) -->
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="recent-articles">
                    <?php if ($query->have_posts()) : ?>
                        <?php while ($query->have_posts()) : $query->the_post(); // Fetch remaining posts ?>
                            <div class="recent-article mb-4 d-flex align-items-center">
                                <a href="<?php the_permalink(); ?>">
                                    <img class="img-fluid me-3" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>" style="width: 100px; height: 100px; object-fit: cover; border-radius: 8px;">
                                </a>
                                <div>
                                    <a href="<?php the_permalink(); ?>" class="text-dark">
                                        <h6 class="mb-1"><?php the_title(); ?></h6>
                                    </a>
                                    <small class="text-muted"><?php echo get_the_date(); ?></small>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); // Reset the query ?>
                    <?php else : ?>
                        <p>No recent articles found.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
