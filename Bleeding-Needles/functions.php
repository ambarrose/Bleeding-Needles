<?php


function custom_theme_assets() {
  wp_enqueue_style('my-custom-style', get_stylesheet_uri());
}

// load up custom dashboard css
function custom_dashboard_css() {
  wp_enqueue_style('new-dashboard-styles', get_template_directory_uri() . '/dashboard.css');
}

add_action('admin_enqueue_scripts','custom_dashboard_css');

add_action('wp_enqueue_scripts', 'custom_theme_assets');

register_nav_menus(['primary'=> 'Ambars Primary Menu']);

// customise the excerpt length
function new_excerpt_length() {
  $new_length = get_theme_mod("custom_excerpt_length");
  return $new_length;
}

// use a filter hook to modify Wordpress function at runtime
add_filter('excerpt_length', 'new_excerpt_length');

// creating our new custom post type
function create_testimonial_posttype() {
  // set up the arguments
  $args = array(
    'labels' => array(
      //name of the post type
      'name' => 'Testimonial',
      'singular_name' => 'Testimonial'
    ),
    'public' => true,
    'menu_icon' => 'dashicons-edit',
    'supports' => array('title', 'editor', 'thumbnail')
  );
  // Within our function, we need to register the post type
  register_post_type('testimonial', $args);
}

add_action('init','create_testimonial_posttype');

// add a custom section to your theme customiser
function my_first_customise_option($wp_customize) {
  $wp_customize->add_section("ambars_section", array(
    "title" => "Customization section",
    "priority" => 0
  ));

    // add a new number setting for custom excerpts
  $wp_customize->add_setting("custom_excerpt_length", array(
    "default" => 5
  ));

  // add a new color picker setting
  $wp_customize->add_setting("color_picker", array(
    "default" => "#"
  ));

  // add a new image upload setting
  $wp_customize->add_setting("custom_image", array(
    "default" => ""
  ));

  // add a new image upload setting
  $wp_customize->add_setting("custom_image2", array(
    "default" => ""
  ));

  // add a new image upload setting
  $wp_customize->add_setting("custom_image3", array(
    "default" => ""
  ));

  $wp_customize->add_setting('home_title', array(
  'default' => 'Let Our Needles Tell Your Storyyyy'
  ));

   $wp_customize->add_control('home_title', array(
  'label' => 'Enter page title',
  'section' => 'ambars_section',
  'settings' => 'home_title',
  'type' => 'text',
  'priority' => 1
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_picker', array(
      'label' => 'Home title Colors',
      'section' => 'ambars_section',
      'settings' => 'color_picker'
    )));

  // add our custom image control
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize, 'custom_image', array(
        'label' => 'Upload a custom image on home page',
        'settings' => 'custom_image',
        'section' => 'ambars_section',
        'priority' => 1000
    )));

    $wp_customize->add_control(new WP_Customize_Image_Control(
      $wp_customize, 'custom_image2', array(
          'label' => 'Upload a custom image on contact page',
          'settings' => 'custom_image2',
          'section' => 'ambars_section',
          'priority' => 1000
      )));

      $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize, 'custom_image3', array(
            'label' => 'Upload a custom image on about page',
            'settings' => 'custom_image3',
            'section' => 'ambars_section',
            'priority' => 1000
        )));

}

add_action("customize_register", "my_first_customise_option");

// add a custom section to your theme customiser
function bootstrap_changes($wp_customize) {
  $wp_customize->add_section("bootstrap_section", array(
    "title" => "Bootstrap settings",
    "priority" => 0
  ));
}

add_action("customize_register", "bootstrap_changes");

function generate_special_css() {
  $color_picker = get_theme_mod('color_picker');
  ?>
  <style type="text/css">
    .welcome-text {
      color: <?php echo $color_picker; ?>
    }

  </style>
  <?php
}

add_action('wp_head','generate_special_css');

?>
