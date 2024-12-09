<?php

$slider_query = new WP_Query(array(
    'post_type' => 'slider',
    'posts_per_page' => -1, 
));

if ($slider_query->have_posts()) : ?>
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
     
        <div class="carousel-indicators">
            <?php
            $count = 0;
            while ($slider_query->have_posts()) : $slider_query->the_post(); ?>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="<?php echo $count; ?>" class="<?php if ($count == 0) echo 'active'; ?>" aria-current="true"></button>
                <?php $count++; ?>
            <?php endwhile; ?>
        </div>

   
        <div class="carousel-inner">
    <?php
    $count = 0;
    while ($slider_query->have_posts()) : $slider_query->the_post();
        $slider_image = get_field('slider_1_image');
        $slider_title = get_field('slider_1_title') ?: 'Default Title';
        $slider_subtitle = get_field('slider_1_subtitle') ?: 'Default Subtitle';

      
        $slider_image_url = $slider_image['url'];
    ?>
        <div class="carousel-item <?php if ($count == 0) echo 'active'; ?>">
            <img class="w-100" src="<?php echo esc_url($slider_image_url); ?>" alt="<?php echo esc_attr($slider_title); ?>">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="display-1 text-white"><?php echo esc_html($slider_title); ?></h1>
                <p class="lead text-light"><?php echo esc_html($slider_subtitle); ?></p>
            </div>
        </div>
        <?php $count++; ?>
    <?php endwhile; ?>
</div>


     
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
<?php endif; wp_reset_postdata(); ?>
