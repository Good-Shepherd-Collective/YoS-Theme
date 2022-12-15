<?php 

# Function for getting the stylesheet into header

function YoS_Files(){
  wp_enqueue_style('style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'YoS_Files');

# Function for getting the stylesheet into header ends


function yos_title(){
  add_theme_support('title-tag');
  }

add_action('after_setup_theme','yos_title');

# Function for getting title into web browser tab ends

add_theme_support( 'post-thumbnails' );

# Function for getting tags

add_filter( 'widget_text', 'do_shortcode' );

# Function for setting excerpt count

function get_excerpt( $count ) {
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
  $excerpt = '<p>'.$excerpt.'...';
  return $excerpt;
  }

# Function for setting excerpt count ends


?>