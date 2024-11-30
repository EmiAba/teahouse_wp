<?php
add_theme_support('title-tag');

add_theme_support('post-thumbnails');

add_post_type_support('excerpt', array());




/* display latest articles */
function display_latest_articles($number_of_posts=5){

include 'latest-articles.php';

}




/* carousedl  */
/* function initialize_carousel_script() {
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('.carousel').carousel({
                interval: 3000, // Auto-slide every 3 seconds
                wrap: true      // Enable looping of slides
            });
        });
    </script>
    <?php
}
add_action('wp_footer', 'initialize_carousel_script');


function enqueue_bootstrap_and_jquery() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-carousel', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_and_jquery'); */