<?php
add_theme_support('title-tag');

add_theme_support('post-thumbnails');

add_post_type_support('excerpt', array());



/**
 *Function that enqueue styles and scripts for the theme.
 */
function teahouse_enqueue_assets() {
   wp_enqueue_style('teahouse-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0.0');
 
 /*  wp_enqueue_script('teahouse-js', get_stylesheet_directory_uri() . '/js/custom-script.js', 
      array('jquery'),  '1.0.0',   true ); */
 
}


add_action('wp_enqueue_scripts', 'teahouse_enqueue_assets');

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


/**
 * function that deals with about section (Homepage) and page
 *
 * @param [type] $wp_customize
 * @return void
 */
function customize_about_section($wp_customize) {
  
  $wp_customize->add_section('about_section', array(
      'title' => 'About Us Section',
      'priority' => 30,
  ));

  
  $wp_customize->add_setting('about_subtitle', array(
      'default' => 'About Us',
  ));
  $wp_customize->add_control('about_subtitle', array(
      'label' => 'Subtitle',
      'section' => 'about_section',
      'type' => 'text',
  ));

 
  $wp_customize->add_setting('about_title', array(
      'default' => 'The success history of TEA House in 25 years',
  ));
  $wp_customize->add_control('about_title', array(
      'label' => 'Title',
      'section' => 'about_section',
      'type' => 'text',
  ));

  //Section 1
  $wp_customize->add_setting('about_section1_title', array(
      'default' => 'Our tea is one of the most popular drinks in the world',
  ));
  $wp_customize->add_control('about_section1_title', array(
      'label' => 'Section 1 Title',
      'section' => 'about_section',
      'type' => 'text',
  ));
  $wp_customize->add_setting('about_section1_text', array(
      'default' => 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.',
  ));
  $wp_customize->add_control('about_section1_text', array(
      'label' => 'Section 1 Text',
      'section' => 'about_section',
      'type' => 'textarea',
  ));

  // Section 2
  $wp_customize->add_setting('about_section2_title', array(
      'default' => 'Daily use of a cup of tea is good for your health',
  ));
  $wp_customize->add_control('about_section2_title', array(
      'label' => 'Section 2 Title',
      'section' => 'about_section',
      'type' => 'text',
  ));
  $wp_customize->add_setting('about_section2_text', array(
      'default' => 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.',
  ));
  $wp_customize->add_control('about_section2_text', array(
      'label' => 'Section 2 Text',
      'section' => 'about_section',
      'type' => 'textarea',
  ));

 
  for ($i = 1; $i <= 6; $i++) {
      $wp_customize->add_setting("about_img_$i", array(
          'default' => get_stylesheet_directory_uri() . "/img/about-$i.jpg",
      ));
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "about_img_$i", array(
          'label' => "Image $i",
          'section' => 'about_section',
          'settings' => "about_img_$i",
      )));
  }
}
add_action('customize_register', 'customize_about_section');



/**
 * function that deals with About Us Page
 *
 * @param [type] $wp_customize
 * @return void
 */
function customize_tea_house_section($wp_customize) {
  // Add Tea House Section
  $wp_customize->add_section('tea_house_section', array(
      'title' => 'Tea House About Settings',
      'priority' => 30,
  ));

  // Add Settings and Controls for Titles, Subtitles, Text, and Images
  $fields = [
      // Header Section
      ['tea_house_title', 'Main Title', 'Welcome to Our Tea House'],
      ['tea_house_subtitle', 'Subtitle', 'A cozy retreat where you can savor the finest teas and relax with friends.'],

      // About Section
      ['about_title', 'About Title', 'Our Story'],
      ['about_paragraph1', 'About Paragraph 1', 'Nestled in the heart of the city, our Tea House is a haven for tea enthusiasts.'],
      ['about_paragraph2', 'About Paragraph 2', 'We source our teas from the finest gardens worldwide, ensuring every sip is a journey of flavors and aromas.'],
      ['about_paragraph3', 'About Paragraph 3', 'Our tea house is more than just a place to drink tea – it’s a community where everyone is welcome to relax, unwind, and discover the beauty of tea culture.'],

      // Services Section
      ['services_title', 'Services Title', 'What We Offer'],
      ['service1', 'Service 1', 'Enjoy a cup of freshly brewed tea at our tables.'],
      ['service2', 'Service 2', 'Take home a selection of our finest teas.'],
      ['service3', 'Service 3', 'Host tea parties or gatherings at our venue.'],

      // Featured Teas Section
      ['featured_title', 'Featured Teas Title', 'Discover Our Teas'],
      ['featured_subtitle', 'Featured Teas Subtitle', 'A curated selection of the world’s finest teas awaits you.'],

      // Individual Teas
      ['tea1_title', 'Tea 1 Title', 'Black Tea'],
      ['tea1_description', 'Tea 1 Description', 'A bold and robust flavor, perfect for any time of day.'],
      ['tea2_title', 'Tea 2 Title', 'Green Tea'],
      ['tea2_description', 'Tea 2 Description', 'Refreshing and rich in antioxidants, it’s a tea lover’s favorite.'],
      ['tea3_title', 'Tea 3 Title', 'Herbal Tea'],
      ['tea3_description', 'Tea 3 Description', 'A soothing and caffeine-free blend, ideal for relaxation.']
  ];

  foreach ($fields as $field) {
      $wp_customize->add_setting($field[0], [
          'default' => $field[2],
          'sanitize_callback' => 'sanitize_text_field',
      ]);

      $wp_customize->add_control($field[0], [
          'label' => $field[1],
          'section' => 'tea_house_section',
          'type' => 'textarea',
      ]);
  }

  // Add Image Fields
  $image_fields = [
    'about_img1' => '/img/tea-house-interior.jpg',
    'service_img1' => '/img/tea-service.jpg',
    'tea1_img' => '/img/black-tea.jpg',
    'tea2_img' => '/img/green-tea.jpg',
    'tea3_img' => '/img/herbal-tea.jpg',
];

  foreach ($image_fields as $field => $default) {
      $wp_customize->add_setting($field, [
          'default' => get_stylesheet_directory_uri() . $default,
          'sanitize_callback' => 'esc_url_raw',
      ]);

      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $field, [
          'label' => ucfirst(str_replace('_', ' ', $field)),
          'section' => 'tea_house_section',
      ]));
  }
}
add_action('customize_register', 'customize_tea_house_section');

