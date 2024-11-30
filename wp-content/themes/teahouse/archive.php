<?php get_header(); ?>

<!-- Latest Blog Section Start -->
<section id="latest-article-blog" class="py-4" style="background-color: #f8fdf4;">
    <div class="container py-4"> 
        <!-- Section Header -->
        <p class="fs-2 fw-bold mb-3" style="color: #88B44E; font-weight: 900; text-align: left;"><?php echo get_the_archive_title(); ?></p> <!-- Reduced margin-bottom -->

        <!-- Article Posts -->
        <div class="row g-4">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="card border-0 shadow-sm h-100">
                            <?php if (has_post_thumbnail()) : ?>

                                <div class="card-img-wrapper">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid w-100 rounded-top', 'alt' => get_the_title() ]); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="card-body d-flex flex-column">
                                <div class="text-muted mb-2">
                                    <small><?php echo get_the_date(); ?></small>
                                </div>
                                <h5 class="card-title">
                                    <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none">
                                        <?php the_title(); ?>
                                    </a>
                                </h5>

                                <p class="card-text mb-0">
                                    <?php
                                    $excerpt = get_the_excerpt();
                                    $content_url = get_permalink();
                                    echo wp_trim_words($excerpt, 20, ' <a href="' . esc_url($content_url) . '">[...]</a>');
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="col">
                    <p class="text-center text-muted">No article-posts available at the moment.</p>
                </div>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <div class="row mt-5">
            <div class="col">
                <nav class="d-flex justify-content-left">
                    <?php
                    the_posts_pagination([
                        'mid_size' => 3,
                        'prev_text' => __('&laquo; Previous', 'teahouse'),
                        'next_text' => __('Next &raquo;', 'teahouse'),
                        'screen_reader_text' => __('Posts navigation', 'teahouse'),
                    ]);
                    ?>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Latest Blog Section End -->

<?php get_footer(); ?>
