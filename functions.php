<?php
function load_css() {
    wp_register_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style');
  }
  add_action('wp_enqueue_scripts', 'load_css');

  add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

  function special_nav_class ($classes, $item) {
    if (in_array('current-page-ancestor', $classes) || in_array('current-menu-item', $classes) ){
      $classes[] = 'active ';
    }
    return $classes;
  }

// register a footer widget

function footer_widget() {
  register_sidebar(array(
    'name' => 'Footer Widget',
    'id' => 'footer_widget',
    'before_widget' => '<div class="footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));
}
add_action('widgets_init', 'footer_widget');


function load_scripts() {
    wp_register_script('main', get_template_directory_uri() . '/main.js', '', 1, true);
    wp_enqueue_script('main');
  }
  add_action('wp_enqueue_scripts', 'load_scripts');

  add_theme_support('menus');

  register_nav_menus(
    array(
      'top-menu' => 'Top Menu Location',
      'sidebar-menu' => 'Sidebar Menu Location',
      'small-menu' => 'Small Menu Location',
    )
  );


  add_theme_support('post-thumbnails');

  function total_posts_shortcode() {
    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => -1,
    );
    $posts = new WP_Query($args);
    return $posts->found_posts;
  }
  add_shortcode('total_posts', 'total_posts_shortcode');

function bloginfoSC($atts) {
  extract(shortcode_atts(array('value' => ''), $atts));
  return get_bloginfo($value);
}

add_shortcode('bloginfo', 'bloginfoSC');



