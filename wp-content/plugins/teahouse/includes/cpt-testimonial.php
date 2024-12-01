<?php
/**
 * Register a custom post type called "testimonial"
 */
function dpc_register_testimonials_post_type() {
    $labels = array(
        'name'               => _x('Testimonials', 'post type general name', 'teahouse'),
        'singular_name'      => _x('Testimonial', 'post type singular name', 'teahouse'),
        'menu_name'          => _x('Testimonials', 'admin menu', 'teahouse'),
        'name_admin_bar'     => _x('Testimonial', 'add new on admin bar', 'teahouse'),
        'add_new'            => _x('Add New', 'Testimonial', 'teahouse'),
        'add_new_item'       => __('Add New Testimonial', 'teahouse'),
        'new_item'           => __('New Testimonial', 'teahouse'),
        'edit_item'          => __('Edit Testimonial', 'teahouse'),
        'view_item'          => __('View Testimonial', 'teahouse'),
        'all_items'          => __('All Testimonials', 'teahouse'),
        'search_items'       => __('Search Testimonials', 'teahouse'),
        'not_found'          => __('No Testimonials found.', 'teahouse'),
        'not_found_in_trash' => __('No Testimonials found in Trash.', 'teahouse'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'has_archive'        => false,
        'rewrite'            => array('slug' => 'testimonial'),
        'menu_icon'          => 'dashicons-format-quote',
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array('title', 'editor', 'thumbnail', 'author'),
        'show_in_rest'       => true,
    );

    register_post_type('testimonial', $args);
}
add_action('init', 'dpc_register_testimonials_post_type');

/**
 * Add Metabox for Testimonial Details
 */
function dpc_add_testimonial_meta_box() {
    add_meta_box(
        'testimonial_details',
        'Testimonial Details',
        'dpc_testimonial_meta_box_callback',
        'testimonial',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'dpc_add_testimonial_meta_box');

/**
 * Render Metabox Fields for Profession and Company
 */
function dpc_testimonial_meta_box_callback($post) {
    $profession = get_post_meta($post->ID, 'client_profession', true);
    $company = get_post_meta($post->ID, 'client_company', true);

   
    wp_nonce_field('save_testimonial_details', 'testimonial_nonce');

    ?>
    <p>
        <label for="client_profession"><strong>Profession:</strong></label><br>
        <input type="text" id="client_profession" name="client_profession" value="<?php echo esc_attr($profession); ?>" style="width: 100%;">
    </p>
    <p>
        <label for="client_company"><strong>Company:</strong></label><br>
        <input type="text" id="client_company" name="client_company" value="<?php echo esc_attr($company); ?>" style="width: 100%;">
    </p>
    <?php
}

/**
 * Save Metabox Data for Profession and Company
 */
function dpc_save_testimonial_meta($post_id) {
  
    if (!isset($_POST['testimonial_nonce']) || !wp_verify_nonce($_POST['testimonial_nonce'], 'save_testimonial_details')) {
        return;
    }

  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;


    if (!current_user_can('edit_post', $post_id)) return;

  
    if (isset($_POST['client_profession'])) {
        update_post_meta($post_id, 'client_profession', sanitize_text_field($_POST['client_profession']));
    }

   
    if (isset($_POST['client_company'])) {
        update_post_meta($post_id, 'client_company', sanitize_text_field($_POST['client_company']));
    }
}
add_action('save_post', 'dpc_save_testimonial_meta');

/**
 * Add Metabox for Testimonial Rating
 */
function dpc_add_rating_meta_box() {
    add_meta_box(
        'testimonial_rating',
        'Testimonial Rating',
        'dpc_testimonial_rating_callback',
        'testimonial',
        'side',
        'high'
    );
}
add_action('add_meta_boxes', 'dpc_add_rating_meta_box');

/**
 * Render Metabox Field for Rating
 */
function dpc_testimonial_rating_callback($post) {
    $rating = get_post_meta($post->ID, 'testimonial_rating', true);

    ?>
    <p>
        <label for="testimonial_rating"><strong>Rating (1-5):</strong></label>
        <input type="number" id="testimonial_rating" name="testimonial_rating" value="<?php echo esc_attr($rating); ?>" min="1" max="5" style="width: 100%;">
    </p>
    <?php
}

/**
 * Save Metabox Data for Rating
 */
function dpc_save_testimonial_rating($post_id) {
   
    if (!isset($_POST['testimonial_nonce']) || !wp_verify_nonce($_POST['testimonial_nonce'], 'save_testimonial_details')) {
        return;
    }


    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

  
    if (!current_user_can('edit_post', $post_id)) return;

  
    if (isset($_POST['testimonial_rating'])) {
        update_post_meta($post_id, 'testimonial_rating', intval($_POST['testimonial_rating']));
    }
}
add_action('save_post', 'dpc_save_testimonial_rating');
