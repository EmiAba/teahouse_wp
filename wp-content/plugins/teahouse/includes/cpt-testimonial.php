<?php
/**
 * Register a custom post type called "testimonial"
 * @see get_post_type_labels() for labels keys
 * Version: 1.0
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



function dpc_add_testimonial_meta_box() {
    add_meta_box(
        'testimonial_profession', 
        'Client Profession',
        'dpc_testimonial_meta_box_callback', 
        'testimonial', 
        'normal', 
        'high' 
    );
}


add_action('add_meta_boxes', 'dpc_add_testimonial_meta_box');

function dpc_testimonial_meta_box_callback($post) {
    $profession = get_post_meta($post->ID, 'client_profession', true);
    ?>
    <label for="client_profession">Profession</label>
    <input type="text" id="client_profession" name="client_profession" value="<?php echo esc_attr($profession); ?>" style="width: 100%;">
    <?php
}

function dpc_save_testimonial_meta($post_id) {
    if (array_key_exists('client_profession', $_POST)) {
        update_post_meta($post_id, 'client_profession', sanitize_text_field($_POST['client_profession']));
    }
}
add_action('save_post', 'dpc_save_testimonial_meta');
