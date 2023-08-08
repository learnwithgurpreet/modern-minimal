<?php
  if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
  }
  get_header();
?>
<section class="items-center mb-6 flex flex-wrap gap-5 lg:flex-nowrap max-w-7xl mx-auto w-full px-5">
  <div class="flex-grow flex flex-col justify-start prose max-w-none">
    <h1 class="items-center flex flex-row mb-4 font-bold text-5xl"><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <svg class="m-auto mt-10 w-full max-w-xs text-teal-700 dark:text-teal-400" width="300" viewBox="0 0 687 155" xmlns="http://www.w3.org/2000/svg"><g stroke="currentColor" stroke-width="7" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M20 58c27-13.33333333 54-20 81-20 40.5 0 40.5 20 81 20s40.626917-20 81-20 40.123083 20 80.5 20 40.5-20 81-20 40.5 20 81 20 40.626917-20 81-20c26.915389 0 53.748722 6.66666667 80.5 20" opacity=".1"></path><path d="M20 78c27-13.3333333 54-20 81-20 40.5 0 40.5 20 81 20s40.626917-20 81-20 40.123083 20 80.5 20 40.5-20 81-20 40.5 20 81 20 40.626917-20 81-20c26.915389 0 53.748722 6.6666667 80.5 20" opacity=".2"></path><path d="M20 98c27-13.3333333 54-20 81-20 40.5 0 40.5 20 81 20s40.626917-20 81-20 40.123083 20 80.5 20 40.5-20 81-20 40.5 20 81 20 40.626917-20 81-20c26.915389 0 53.748722 6.6666667 80.5 20" opacity=".6"></path><path d="M20 118c27-13.3333333 54-20 81-20 40.5 0 40.5 20 81 20s40.626917-20 81-20 40.123083 20 80.5 20 40.5-20 81-20 40.5 20 81 20 40.626917-20 81-20c26.915389 0 53.748722 6.6666667 80.5 20"></path></g></svg>
  </div>
  <aside class="flex flex-col gap-2">
    <ul reversed="" class="fade grid gap-3 lg:grid-rows-2 lg:grid-flow-col">
      <?php
        $recent_posts = wp_get_recent_posts(array(
          'numberposts' => 4, // Number of recent posts thumbnails to display
          'post_status' => 'publish' // Show only the published posts
        ));
        foreach( $recent_posts as $post_item ) {
          $date = date('M d, Y', strtotime($post_item['post_date']));
      ?>
        <li class="transition-all motion-reduce:transition-none duration-200 border border-gray-600 dark:border-gray-700 flex flex-col p-4 relative rounded-md bg-gray-100 hover:scale-105 dark:bg-gray-800">
          <time datetime="<?php echo $post_item['post_date']; ?>" class="slash text-sm"><?php echo $date; ?></time>
          <h2 class="font-semibold">
            <a href="<?php echo get_permalink($post_item['ID']) ?>" class="no-underline after:absolute after:left-0 after:right-0 after:top-0 after:bottom-0"><?php echo $post_item['post_title'] ?></a>
          </h2>
          <span class="mt-1 text-sm"><?php echo get_the_excerpt($post_item['ID']) ?></span>
        </li>
      <?php 
        } 
      ?>
    </ul>
    <a href="/posts" class="arrow self-end">See all articles</a>
  </aside>
</section>
<?php get_footer(); ?>