<?php
  if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
  }
  get_header();
?>
<section class="items-center mb-6 gap-5 max-w-6xl mx-auto px-5 w-full">
  <h1><?php the_title(); ?></h1>
  <div class="text-sm text-gray-600 my-5 flex flex-col lg:flex-row gap-3 dark:text-gray-200 border-b border-b-gray-600 dark:border-b-gray-200 pb-8">
    <time datetime="<?php echo get_the_date('c'); ?>" class="slash"><?php echo get_the_date(); ?></time>
    <?php 
      $categories = get_the_category( $post->ID );
      
      foreach($categories as $category) {
        $category_link = get_category_link( $category->cat_ID );
        echo '<a href="'.$category_link.'">'.$category->cat_name.'</a>';
      }
    ?>
  </div>
  <article class="prose lg:prose-lg max-w-none dark:prose-invert">
    <?php the_content(); ?>
  </article>
</section>
<?php get_footer(); ?>