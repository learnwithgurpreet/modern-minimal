<?php
  if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
  }
  get_header();
?>
<h1 class="max-w-7xl mx-auto w-full px-5"><?php echo get_the_title( get_option('page_for_posts', true) ); ?></h1>
<section class="items-center mb-6 flex flex-wrap gap-5 lg:flex-nowrap max-w-7xl mx-auto w-full px-5">
  <ul class="mt-11 fade transition-all duration-200 motion-reduce:transition-none">
    <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li class="flex-col relative mb-6">
          <time datetime="<?php echo get_the_date('c'); ?>" class="slash text-sm"><?php echo get_the_date(); ?></time>
          <h2 class="mt-1">
            <a href="<?php the_permalink(); ?>" class="after:absolute after:left-0 after:right-0 after:top-0 after:bottom-0"><?php the_title(); ?></a>
          </h2>
          <span class="text-fg-1"><?php echo get_the_excerpt(); ?></span>
        </li>
    <?php endwhile; endif; ?>
  </ul>
</section>
<?php the_posts_pagination(array(
    'prev_text'          => __( '<< Prev', 'modern-minimal' ),
    'next_text'          => __( 'Next >>', 'modern-minimal' ),
    'screen_reader_text' => __( 'Post Navigation', 'modern-minimal' ),
    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'modern-minimal' ) . ' </span>',
    'after_page_number'  => '',
    'mid_size'           => 3,
    'end_size'           => 2,
) ); ?>
<?php get_footer(); ?>