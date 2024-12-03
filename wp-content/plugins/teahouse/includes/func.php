<?php

/**
 * This is the assets function where we'll enqueue our scripts and styles
 *
 */

function teahouse_plugin_enqueue_assets() {
     wp_enqueue_script(
          'ajax-script',
          plugins_url('../assets/scripts/scripts.js', __FILE__),
          array(),
          1.0
     );

     wp_localize_script(
          'ajax-script',
          'my_ajax_object',
          array('ajax_url' => admin_url('admin-ajax.php'))
     );
}
add_action('wp_enqueue_scripts', 'teahouse_plugin_enqueue_assets');

/**
 * This is our dynamic function that handles the AJAX Upvote
 *
 * @return void
 */
function teahouse_product_upvote(){

     if (!isset($_POST['product_id']) || !is_numeric($_POST['product_id'])) {
          wp_send_json_error(['message' => 'Invalid product ID']);
     }

     $product_id = intval($_POST['product_id']);

     $current_votes = get_post_meta($product_id, 'votes', true);
     if (empty($current_votes)) {
          $current_votes = 0;
     }


     $new_votes = $current_votes + 1;
     update_post_meta($product_id, 'votes', $new_votes);

     wp_send_json_success(['new_votes' => $new_votes]);
}
add_action('wp_ajax_nopriv_teahouse_product_upvote', 'teahouse_product_upvote');
add_action('wp_ajax_teahouse_product_upvote', 'teahouse_product_upvote');




/**
 * This is the callback function to display a product title with a shortcode
 *
 * @param [type] $atts
 * @return void
 */
function display_product_title($atts)
{

     $atts = shortcode_atts(array(
          'id' => 'id',
          'show_image' => '',
     ), $atts, 'bartag');

     if (! empty($atts['id'])) {
          $title = get_the_title($atts['id']);
     }

     if (! empty($atts['show_image'])) {
          $image = get_the_post_thumbnail_url($atts['id']);
     }

     $content = '<div class="shortcode-class">';

     if (! empty($title)) {
          $content .= $title;
     }

     if (! empty($image)) {
          $content .= '<img src="' . $image . '">';
     }

     $content .= '</div>';

     return $content;
}
add_shortcode('display_product_title', 'display_product_title');



