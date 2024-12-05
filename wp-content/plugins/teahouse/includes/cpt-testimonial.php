<?php
/**
 * Register a custom post type "testimonial".
 *
 * This class handles the registration of the "testimonial" post type for managing customer testimonials.
 * 
 * @version 1.0
 * @see get_post_type_labels() for available labels keys.
 */
if (!class_exists('Teahouse_Testimonials')):
    class Teahouse_Testimonials {
        public function __construct() {
            add_action('init', [$this, 'register_testimonials_post_type']);
        }

        public function register_testimonials_post_type() {
            $labels = [
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
            ];

            $args = [
                'labels'             => $labels,
                'capability_type'    => 'post',
                'public'             => true,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'has_archive'        => true,
                'rewrite'            => ['slug' => 'testimonial'],
                'menu_icon'          => 'dashicons-format-quote',
                'hierarchical'       => false,
                'menu_position'      => 5,
                'supports'           => ['title', 'editor', 'thumbnail', 'author'],
                'show_in_rest'       => true,
            ];

            register_post_type('testimonial', $args);
        }
    }

    new Teahouse_Testimonials();
endif;

/**
 * Register a custom meta box for the "Testimonial" post type.
 *
 * Adds a meta box to the 'testimonial' custom post type for capturing additional details.
 *
 * @return void
 */
function add_testimonial_meta_boxes() {
    add_meta_box(
        'testimonial_details',
        'Testimonial Details',
        'render_testimonial_meta_box',
        'testimonial',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_testimonial_meta_boxes');

/**
 * Renders the Metabox Fields for Profession and Company in the Testimonial Post Type.
 *
 *
 * @param WP_Post $post The current post object.
 */
function render_testimonial_meta_box($post) {
    $profession = get_post_meta($post->ID, 'client_profession', true);
    $company = get_post_meta($post->ID, 'client_company', true);

    wp_nonce_field('save_testimonial_meta', 'testimonial_meta_nonce');

    ?>
    <p>
        <label for="client_profession"><strong>Profession:</strong></label>
        <input type="text" id="client_profession" name="client_profession" value="<?php echo esc_attr($profession); ?>" style="width: 100%;">
    </p>
    <p>
        <label for="client_company"><strong>Company:</strong></label>
        <input type="text" id="client_company" name="client_company" value="<?php echo esc_attr($company); ?>" style="width: 100%;">
    </p>
    <?php
}

/**
 * Save Metabox Data for Testimonial.
 *
 *
 * @param int $post_id The ID of the post being saved.
 * @return void
 */
function save_testimonial_meta($post_id) {
    if (!isset($_POST['testimonial_meta_nonce']) || !wp_verify_nonce($_POST['testimonial_meta_nonce'], 'save_testimonial_meta')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['client_profession'])) {
        update_post_meta($post_id, 'client_profession', sanitize_text_field($_POST['client_profession']));
    }

    if (isset($_POST['client_company'])) {
        update_post_meta($post_id, 'client_company', sanitize_text_field($_POST['client_company']));
    }
}
add_action('save_post', 'save_testimonial_meta');



