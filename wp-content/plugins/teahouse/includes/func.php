<?php

/**
 * Enqueue scripts and styles for the plugin.
 *
 *
 * @return void
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
 * Handles the AJAX Upvote functionality for products.
 *
 * *
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
 * This is the callback functions to display a phone number, address, email with shortcode
 *
 * @param [type] $atts
 * @return void
 */
function teahouse_contact_info_shortcode($atts) {
  
     $phone_number = '+012 345 67890'; 
     $address = '123 Street, New York, USA'; 
     $email = 'info@gmail.com'; 
     

     $atts = shortcode_atts(
         array(
             'type' => 'all', 
         ),
         $atts
     );
 
  
     switch ($atts['type']) {
         case 'phone':
             return esc_html($phone_number); 
         case 'address':
             return esc_html($address); 
         case 'email':
             return esc_html($email); 
         default: 
             return esc_html("Address: $address\nPhone: $phone_number\nEmail: $email");
     }
 }
 add_shortcode('contact_info', 'teahouse_contact_info_shortcode');




 
 


