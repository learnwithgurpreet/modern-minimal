<?php
  if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
  }
  get_header();
?>
<h1 class="max-w-7xl mx-auto w-full px-5 mb-6"><?php single_cat_title(); ?></h1>
<section class="items-center mb-6 flex flex-wrap gap-5 lg:flex-nowrap max-w-7xl mx-auto w-full px-5">
  <ul class="mt-11 fade transition-all duration-200 motion-reduce:transition-none">
    <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li class="flex-col relative mb-6">
          <?php $date = date('M d, Y', strtotime(get_the_date('c'))); ?>
          <time datetime="<?php echo get_the_date('c'); ?>" class="slash text-sm"><?php echo $date; ?></time>
          <h2 class="mt-1">
            <a href="<?php the_permalink(); ?>" class="after:absolute after:left-0 after:right-0 after:top-0 after:bottom-0"><?php the_title(); ?></a>
          </h2>
          <span class="text-fg-1"><?php echo get_the_excerpt(); ?></span>
        </li>
    <?php endwhile; endif; ?>
  </ul>
</section>
<?php get_footer(); ?>