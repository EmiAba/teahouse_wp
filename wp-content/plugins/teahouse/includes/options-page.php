<?php
/**
 * Generated Option Page
 */


add_action('admin_menu', 'special_offers_add_admin_page');


add_action('admin_init', 'special_offers_register_settings');

/**
 * Add a custom options page under the "Settings" menu
 */
function special_offers_add_admin_page() {
    add_options_page(
        'Teahouse Special Offers Settings',  // Page title
        'Teahouse Plugin Special Offers',    // Menu title
        'manage_options',                    // Capability required
        'special-offers-options',            // Menu slug
        'special_offers_render_page'         // Callback function to render the page
    );
}

/**
 * Register settings
 */
function special_offers_register_settings() {
    // Register "Show Special Offers" option
    register_setting(
        'special_offers_settings_group',
        'show_special_offers',
        [
            'type' => 'boolean',
            'description' => 'Enable or disable the Tea Special Offers section',
            'sanitize_callback' => 'rest_sanitize_boolean',
            'default' => 1,
        ]
    );

    // Register "Article Time Limit" option
    register_setting(
        'special_offers_settings_group',
        'article_time_limit_days',
        [
            'type' => 'integer',
            'description' => 'Set the time limit (in days) for articles to appear.',
            'sanitize_callback' => 'absint',
            'default' => 30,
        ]
    );
}

/**
 * Render the custom options page
 */
function special_offers_render_page() {
    if (!current_user_can('manage_options')) {
        return;
    }
    ?>
    <div class="wrap">
        <h1>Teahouse Special Offers Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('special_offers_settings_group');
            do_settings_sections('special_offers_settings_group');
            ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Show Tea Special Offers</th>
                    <td>
                        <input type="checkbox" name="show_special_offers" value="1" <?php checked(get_option('show_special_offers', 1)); ?>>
                        <label for="show_special_offers">Enable the Tea Special Offers section</label>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Article Time Limit (in Days)</th>
                    <td>
                        <input type="number" name="article_time_limit_days" value="<?php echo esc_attr(get_option('article_time_limit_days', 30)); ?>" min="1">
                        <p class="description">Set the number of days an article should appear before it is hidden.</p>
                    </td>
                </tr>
            </table>
            <?php
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

/**
 * Modify the query to hide articles older than the specified time limit
 */
add_action('pre_get_posts', function ($query) {

    if (!is_admin() && $query->is_main_query() && $query->is_home()) {
        $time_limit_days = get_option('article_time_limit_days', 30); 
        $date_query = [
            [
                'column' => 'post_date',
                'after'  => $time_limit_days . ' days ago',
            ],
        ];
        $query->set('date_query', $date_query);
    }
});
