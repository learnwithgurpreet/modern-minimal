<?php
  if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
  }
  get_header();
?>
<h1 class="max-w-7xl mx-auto w-full px-5 mb-6">Here is the 404 page :(</h1>
<section class="items-center mb-6 flex flex-wrap gap-5 lg:flex-nowrap max-w-7xl mx-auto w-full px-5">
  <article class="prose max-w-none">
    <a href="<?php echo get_home_url(); ?>">Go back to the home page</a>
  </article>
</section>
<?php get_footer(); ?>
