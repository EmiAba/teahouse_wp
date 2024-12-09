<?php
add_theme_support('title-tag');

add_theme_support('post-thumbnails');

add_post_type_support('excerpt', array());



/**
 *Function that enqueue styles and scripts for the theme.
 */
function teahouse_enqueue_assets() {
    
    wp_enqueue_style(
        'bootstrap-css',
        get_stylesheet_directory_uri() . '/css/bootstrap.min.css',
        array(), 
        '5.0.0'
    );

   
    wp_enqueue_style(
        'teahouse-style', 
        get_stylesheet_directory_uri() . '/css//style.css', 
        array(), 
        '1.0.1'
    );

    wp_enqueue_style(
        'font-awesome', 
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css', 
        array(), 
        null
    );

    wp_enqueue_style(
        'bootstrap-icons', 
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css', 
        array(), 
        null
    );

    wp_enqueue_style(
        'animate-css',
        get_stylesheet_directory_uri() . '/lib/animate/animate.min.css',
        array(),
        null
    );

    wp_enqueue_style(
        'owl-carousel',
        get_stylesheet_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css',
        array(),
        null
    );

   
    wp_enqueue_script('jquery');

    wp_enqueue_script(
        'bootstrap-bundle', 
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', 
        array('jquery'), 
        '5.0.0', 
        true
    );

    wp_enqueue_script(
        'wow-js', 
        get_stylesheet_directory_uri() . '/lib/wow/wow.min.js', 
        array(), 
        null, 
        true
    );

    wp_enqueue_script(
        'easing-js', 
        get_stylesheet_directory_uri() . '/lib/easing/easing.min.js', 
        array('jquery'), 
        null, 
        true
    );

    wp_enqueue_script(
        'waypoints-js', 
        get_stylesheet_directory_uri() . '/lib/waypoints/waypoints.min.js', 
        array('jquery'), 
        null, 
        true
    );

    wp_enqueue_script(
        'owl-carousel', 
        get_stylesheet_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', 
        array('jquery'), 
        null, 
        true
    );

    wp_enqueue_script(
        'main-js', 
        get_stylesheet_directory_uri() . '/js/main.js', 
        array('jquery', 'bootstrap-bundle', 'wow-js', 'easing-js', 'waypoints-js', 'owl-carousel'), 
        '1.0.0', 
        true
    );


    wp_enqueue_script(
        'print-js', 
        get_stylesheet_directory_uri() . '/js/print.js', 
        array('jquery'), 
        null, 
        true
    );
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

  
  $fields = [
      
      ['tea_house_title', 'Main Title', 'Welcome to Our Tea House'],
      ['tea_house_subtitle', 'Subtitle', 'A cozy retreat where you can savor the finest teas and relax with friends.'],

   
      ['about_title', 'About Title', 'Our Story'],
      ['about_paragraph1', 'About Paragraph 1', 'Nestled in the heart of the city, our Tea House is a haven for tea enthusiasts.'],
      ['about_paragraph2', 'About Paragraph 2', 'We source our teas from the finest gardens worldwide, ensuring every sip is a journey of flavors and aromas.'],
      ['about_paragraph3', 'About Paragraph 3', 'Our tea house is more than just a place to drink tea – it’s a community where everyone is welcome to relax, unwind, and discover the beauty of tea culture.'],

    
      ['services_title', 'Services Title', 'What We Offer'],
      ['service1', 'Service 1', 'Enjoy a cup of freshly brewed tea at our tables.'],
      ['service2', 'Service 2', 'Take home a selection of our finest teas.'],
      ['service3', 'Service 3', 'Host tea parties or gatherings at our venue.'],

  
      ['featured_title', 'Featured Teas Title', 'Discover Our Teas'],
      ['featured_subtitle', 'Featured Teas Subtitle', 'A curated selection of the world’s finest teas awaits you.'],

    
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
/**
 * function that deals with Menu Page
 *
 * @param [type] $wp_customize
 * @return void
 */
function teahouse_customize_menu_with_categories($wp_customize) {
    
    $wp_customize->add_section('full_menu_section', array(
        'title' => 'Full Menu Settings',
        'priority' => 35,
    ));

    $wp_customize->add_setting('menu_page_title', ['default' => 'Our Full Menu']);
    $wp_customize->add_setting('menu_page_subtitle', ['default' => 'Explore our wide selection of teas, treats, and beverages.']);
    $wp_customize->add_control('menu_page_title', ['label' => 'Menu Page Title', 'section' => 'full_menu_section', 'type' => 'text']);
    $wp_customize->add_control('menu_page_subtitle', ['label' => 'Menu Page Subtitle', 'section' => 'full_menu_section', 'type' => 'text']);

   
    for ($i = 1; $i <= 5; $i++) {
        $wp_customize->add_setting("tea_category_title_$i", ['default' => "Tea Category $i"]);
        $wp_customize->add_control("tea_category_title_$i", [
            'label' => "Tea Category $i Title",
            'section' => 'full_menu_section',
            'type' => 'text'
        ]);

        for ($j = 1; $j <= 4; $j++) {
            $wp_customize->add_setting("tea_img_{$i}_{$j}", ['default' => get_stylesheet_directory_uri() . "/img/default-tea.jpg"]);
            $wp_customize->add_setting("tea_title_{$i}_{$j}", ['default' => "Tea $j"]);
            $wp_customize->add_setting("tea_description_{$i}_{$j}", ['default' => "Description for Tea $j"]);
            $wp_customize->add_setting("tea_price_{$i}_{$j}", ['default' => "$5.00"]);

            $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "tea_img_{$i}_{$j}", [
                'label' => "Tea $j Image (Category $i)",
                'section' => 'full_menu_section',
            ]));
            $wp_customize->add_control("tea_title_{$i}_{$j}", [
                'label' => "Tea $j Title (Category $i)",
                'section' => 'full_menu_section',
                'type' => 'text'
            ]);
            $wp_customize->add_control("tea_description_{$i}_{$j}", [
                'label' => "Tea $j Description (Category $i)",
                'section' => 'full_menu_section',
                'type' => 'textarea'
            ]);
            $wp_customize->add_control("tea_price_{$i}_{$j}", [
                'label' => "Tea $j Price (Category $i)",
                'section' => 'full_menu_section',
                'type' => 'text'
            ]);
        }
    }

    $wp_customize->add_setting('salty_cakes_title', ['default' => 'Salty Cakes']);
    $wp_customize->add_control('salty_cakes_title', ['label' => 'Salty Cakes Title', 'section' => 'full_menu_section', 'type' => 'text']);

    for ($i = 1; $i <= 3; $i++) {
        $wp_customize->add_setting("salty_cake_img_$i", ['default' => get_stylesheet_directory_uri() . "/img/default-salty-cake.jpg"]);
        $wp_customize->add_setting("salty_cake_title_$i", ['default' => "Salty Cake $i"]);
        $wp_customize->add_setting("salty_cake_price_$i", ['default' => "$3.50"]);

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "salty_cake_img_$i", [
            'label' => "Salty Cake $i Image",
            'section' => 'full_menu_section',
        ]));
        $wp_customize->add_control("salty_cake_title_$i", ['label' => "Salty Cake $i Title", 'section' => 'full_menu_section', 'type' => 'text']);
        $wp_customize->add_control("salty_cake_price_$i", ['label' => "Salty Cake $i Price", 'section' => 'full_menu_section', 'type' => 'text']);
    }

   
    $wp_customize->add_setting('cookies_cakes_title', ['default' => 'Cookies and Cakes']);
    $wp_customize->add_control('cookies_cakes_title', ['label' => 'Cookies and Cakes Title', 'section' => 'full_menu_section', 'type' => 'text']);

    for ($i = 1; $i <= 3; $i++) {
        $wp_customize->add_setting("cookie_cake_img_$i", ['default' => get_stylesheet_directory_uri() . "/img/default-cookie-cake.jpg"]);
        $wp_customize->add_setting("cookie_cake_title_$i", ['default' => "Cookie or Cake $i"]);
        $wp_customize->add_setting("cookie_cake_price_$i", ['default' => "$2.50"]);

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "cookie_cake_img_$i", [
            'label' => "Cookie or Cake $i Image",
            'section' => 'full_menu_section',
        ]));
        $wp_customize->add_control("cookie_cake_title_$i", ['label' => "Cookie or Cake $i Title", 'section' => 'full_menu_section', 'type' => 'text']);
        $wp_customize->add_control("cookie_cake_price_$i", ['label' => "Cookie or Cake $i Price", 'section' => 'full_menu_section', 'type' => 'text']);
    }

   
    $wp_customize->add_setting('soft_drinks_title', ['default' => 'Soft Drinks']);
    $wp_customize->add_control('soft_drinks_title', ['label' => 'Soft Drinks Title', 'section' => 'full_menu_section', 'type' => 'text']);

    for ($i = 1; $i <= 16; $i++) {
        $wp_customize->add_setting("soft_drink_title_$i", ['default' => "Soft Drink $i"]);
        $wp_customize->add_setting("soft_drink_price_$i", ['default' => "$1.50"]);

        $wp_customize->add_control("soft_drink_title_$i", ['label' => "Soft Drink $i Title", 'section' => 'full_menu_section', 'type' => 'text']);
        $wp_customize->add_control("soft_drink_price_$i", ['label' => "Soft Drink $i Price", 'section' => 'full_menu_section', 'type' => 'text']);
    }

   
    $wp_customize->add_setting('buy_tea_img', ['default' => get_stylesheet_directory_uri() . '/img/buy-tea.jpg']);
    $wp_customize->add_setting('buy_tea_title', ['default' => 'Take Your Favorite Tea Home!']);
    $wp_customize->add_setting('buy_tea_description', ['default' => 'Choose from our premium collection of teas and enjoy them wherever you like.']);

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'buy_tea_img', [
        'label' => 'Buy Tea Image',
        'section' => 'full_menu_section',
    ]));
    $wp_customize->add_control('buy_tea_title', ['label' => 'Buy Tea Title', 'section' => 'full_menu_section', 'type' => 'text']);
    $wp_customize->add_control('buy_tea_description', ['label' => 'Buy Tea Description', 'section' => 'full_menu_section', 'type' => 'textarea']);
}

add_action('customize_register', 'teahouse_customize_menu_with_categories');


/**
 * function that  play video on Home Page
 *
 * @param [type] $wp_customize
 * @return void
 */
function teahouse_customize_video_section($wp_customize) {
    // Add a Section
    $wp_customize->add_section('video_section', array(
        'title'    => __('Video Section', 'theme-text-domain'),
        'priority' => 30,
    ));

 
    $wp_customize->add_setting('video_headline', array(
        'default'           => 'Tea is a drink of <span class="text-white">health</span> and <span class="text-white">beauty</span>',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('video_headline', array(
        'label'    => __('Headline', 'theme-text-domain'),
        'section'  => 'video_section',
        'type'     => 'textarea',
    ));

   
    $wp_customize->add_setting('video_subheadline', array(
        'default'           => 'Tea has been celebrated for centuries as a drink of health and beauty.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('video_subheadline', array(
        'label'    => __('Subheadline', 'theme-text-domain'),
        'section'  => 'video_section',
        'type'     => 'textarea',
    ));


    $wp_customize->add_setting('video_id', array(
        'default'           => 'oqRUv07V6GI',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('video_id', array(
        'label'       => __('YouTube Video ID', 'theme-text-domain'),
        'section'     => 'video_section',
        'type'        => 'text',
        'description' => __('Enter the YouTube video ID. Example: oqRUv07V6GI', 'theme-text-domain'),
    ));
}
add_action('customize_register', 'teahouse_customize_video_section');

/**
 * function for customizing the copyright in the footer
 *
 * @param [type] $wp_customize
 * @return void
 */
function footer_copyright_customizer($wp_customize) {
    // Add a section for the copyright settings
    $wp_customize->add_section('footer_copyright_section', array(
        'title'    => __('Footer Copyright', 'teahouse'),
        'priority' => 120,
    ));

    // Add setting for the site name
    $wp_customize->add_setting('footer_site_name', array(
        'default'           => __('Your Site Name', 'teahouse'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add control for the site name
    $wp_customize->add_control('footer_site_name_control', array(
        'label'    => __('Site Name', 'teahouse'),
        'section'  => 'footer_copyright_section',
        'settings' => 'footer_site_name',
        'type'     => 'text',
    ));

    // Add setting for the footer year
    $wp_customize->add_setting('footer_year', array(
        'default'           => date('Y'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add control for the footer year
    $wp_customize->add_control('footer_year_control', array(
        'label'    => __('Year', 'teahouse'),
        'section'  => 'footer_copyright_section',
        'settings' => 'footer_year',
        'type'     => 'text',
    ));

    // Add setting for the attribution text
    $wp_customize->add_setting('footer_attribution', array(
        'default'           => __('Designed by <a href="https://htmlcodex.com">HTML Codex</a>', 'teahouse'),
        'sanitize_callback' => 'wp_kses_post', // Allows safe HTML tags
    ));

    // Add control for the attribution text
    $wp_customize->add_control('footer_attribution_control', array(
        'label'    => __('Attribution Text', 'teahouse'),
        'section'  => 'footer_copyright_section',
        'settings' => 'footer_attribution',
        'type'     => 'textarea',
    ));
}
add_action('customize_register', 'footer_copyright_customizer');






