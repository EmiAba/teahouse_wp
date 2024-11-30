<?php

/**
 * Register a custom post type called "product"
 * @see get_post_type_labels() for labels keys
 * Version: 1.0
 */
function dpc_register_products_post_type() {
    $labels = array(
        'name'               => _x('Products', 'post type general name', 'teahouse'),
        'singular_name'      => _x('Product', 'post type singular name', 'teahouse'),
        'menu_name'          => _x('Products', 'admin menu', 'teahouse'),
        'name_admin_bar'     => _x('Product', 'add new on admin bar', 'teahouse'),
        'add_new'            => _x('Add New', 'product', 'teahouse'),
        'add_new_item'       => __('Add New Product', 'teahouse'),
        'new_item'           => __('New Product', 'teahouse'),
        'edit_item'          => __('Edit Product', 'teahouse'),
        'view_item'          => __('View Product', 'teahouse'),
        'all_items'          => __('All Products', 'teahouse'),
        'search_items'       => __('Search Products', 'teahouse'),
        'not_found'          => __('No products found.', 'teahouse'),
        'not_found_in_trash' => __('No products found in Trash.', 'teahouse'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'product'),
        'menu_icon'          => 'dashicons-cart',
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
        'show_in_rest'       => true,
    );

    register_post_type('product', $args);
}
add_action('init', 'dpc_register_products_post_type');

/**
 * Register a custom post type called "tea category taxonomy"
 * @see get_post_type_labels() for labels keys
 * Version: 1.0
 */
function dpc_register_tea_taxonomy() {
    
    $labels = array(
        'name'              => _x('Tea Categories', 'taxonomy general name', 'teahouse'),
        'singular_name'     => _x('Tea Category', 'taxonomy singular name', 'teahouse'),
        'search_items'      => __('Search Tea Categories', 'teahouse'),
        'all_items'         => __('All Tea Categories', 'teahouse'),
        'parent_item'       => __('Parent Tea Category', 'teahouse'),
        'parent_item_colon' => __('Parent Tea Category:', 'teahouse'),
        'edit_item'         => __('Edit Tea Category', 'teahouse'),
        'update_item'       => __('Update Tea Category', 'teahouse'),
        'add_new_item'      => __('Add New Tea Category', 'teahouse'),
        'new_item_name'     => __('New Tea Category Name', 'teahouse'),
        'menu_name'         => __('Tea Categories', 'teahouse'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'tea_category'),
        'show_in_rest'      => true,
    );

    register_taxonomy('tea_category', 'product', $args);
}
add_action('init', 'dpc_register_tea_taxonomy');