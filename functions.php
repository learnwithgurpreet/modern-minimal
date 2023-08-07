<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if (!defined('MM_VERSION')) {
  define('MM_VERSION', wp_get_theme()->get("Version"));
}

function modern_minimal_theme_support()
{
  // Adds dynamic title tag
  add_theme_support("title-tag");
  add_theme_support('post-thumbnails');
}
add_action("after_setup_theme", "modern_minimal_theme_support");


function modern_minimal_menus()
{
  $locations = array(
    "primary" => "Primary menu (top of page)",
    "secondary" => "Secondary menu (bottom of page)"
  );

  register_nav_menus($locations);
}
add_action("init", "modern_minimal_menus");


function modern_minimal_load_stylesheets() {
	wp_enqueue_style('modern-minimal-style', get_stylesheet_uri(), array(), MM_VERSION, "all");
	wp_enqueue_style('modern-minimal-style-custom', get_template_directory_uri() . "/assets/css/minified/style-custom.css", array("modern-minimal-style"), MM_VERSION, "all");
}
add_action("wp_enqueue_scripts", "modern_minimal_load_stylesheets");

function modern_minimal_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'modern_minimal_excerpt_length', 999 );