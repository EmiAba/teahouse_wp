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
      'header-menu' => __('Header Menu', 'teahouse'),
  ));
}
add_action('init', 'teahouse_register_menus');
