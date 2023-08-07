<?php
  if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
  }
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<main class="container mx-auto flex flex-grow flex-col">
  <header class="flex flex-col my-5 max-w-7xl mx-auto w-full px-5">
    <div class="flex justify-between items-center gap-5 flex-col sm:flex-row mb-4 lg:mb-11">
      <a class="block font-semibold text-3xl text-teal-600 dark:text-teal-500" href="/">gS</a>
      <nav>
        <div class="fade flex gap-4 flex-wrap items-start justify-start">
          <?php
            $menu_items = wp_get_nav_menu_items("primary");
            foreach( $menu_items as $menu_item ) {
          ?>
            <a class="underline" href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a>
          <?php
            }
          ?>
        </div>
      </nav>
    </div>
  </header>