<?php
  if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
  }

  wp_footer();
?>
    </main>
    <footer class="w-full bg-gray-700 border-t-4 border-teal-600 text-gray-50 flex justify-between text-sm p-4">
      <span class="italic flex-grow">©<?php echo date_i18n('Y'); ?> <?php echo get_bloginfo( 'name' ) ?></span>
      <nav class="flex gap-2">
        <?php
          $footer_menu_items = wp_get_nav_menu_items("secondary");
          foreach( $footer_menu_items as $footer_menu_item ) {
        ?>
          <a rel="me" class="text-gray-50 underline" href="<?php echo $footer_menu_item->url; ?>"><?php echo $footer_menu_item->title; ?></a>
        <?php
          }
        ?>
      </nav>
    </footer>
  </body>
</html>