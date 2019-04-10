<?php
  /**
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   * @package zmagazine
   */
  get_header();
?>
  <main>
    <?php
      // define conditions of fetch the posts data
      $args = array(
        'post_type' => 'post', // post type
        'posts_per_page' => 5, // numbers of posts
      );
      
      $wp_query = new WP_Query( $args ); // set the conditions of fetching the posts data

      if( $wp_query -> have_posts() ) { // if the posts was there in this conditions above
        while ( $wp_query -> have_posts() ) {
          $wp_query -> the_post();
    ?>
      <div class="article">
        <?php the_title(); ?>
        <?php the_content(); ?>
      </div>
    <?php
        }
      }
    ?>
  </main>
  <?php get_footer(); ?>