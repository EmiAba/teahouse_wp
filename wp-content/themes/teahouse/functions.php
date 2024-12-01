<?php
add_theme_support('title-tag');

add_theme_support('post-thumbnails');

add_post_type_support('excerpt', array());

/**
 * Function that display the latest articles
 *
 * @param integer $number_of_posts
 * @return void
 */

function display_latest_articles($number_of_posts=5){

include 'latest-articles.php';

}

/**
 * Adding one more class to the body for extra customization*
 *
 * @param [type] $classes
 * @return void
 */ 
function teahouse_body_class($classes) {
      $classes[] = 'teahouse-custom-class';
    
    return $classes;
}
add_filter('body_class', 'teahouse_body_class');

/**
 * This is the the function that registers menu
 *
 * @return void
 */
 
function teahouse_register_menus() {
  register_nav_menus(array(
      'header-menu' => __('Primary Menu', 'teahouse'),
     
  ));
}
add_action('after_setup_theme', 'teahouse_register_menus', 0);

require_once get_template_directory() . '/templates/class-wp-bootstrap-navwalker.php';

/**
 * This is the the function that registers Sidebar
 *
 * @return void
 */

function teahouse_register_sidebars() {

register_sidebar(
array(
'id' => 'footer-1',
'name' => __( 'Footer 1 Sidebar' ),
'description' => __( 'A short description of the sidebar.' ),
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
)
);
register_sidebar(
  array(
  'id' => 'footer-2',
  'name' => __( 'Footer 2 Sidebar' ),
  'description' => __( 'A short description of the sidebar.' ),
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>',
  )
  );
  register_sidebar(
    array(
    'id' => 'footer-3',
    'name' => __( 'Footer 3 Sidebar' ),
    'description' => __( 'A short description of the sidebar.' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    )
    );

    register_sidebar(
      array(
      'id' => 'footer-4',
      'name' => __( 'Footer 4 Sidebar' ),
      'description' => __( 'A short description of the sidebar.' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
      )
      );

}
add_action( 'widgets_init', 'teahouse_register_sidebars' );