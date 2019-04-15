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
        'posts_per_page' => 10, // numbers of posts
        'paged' => $paged // to show previous posts(It won't be appeared even the link is acti)
      );
      
      $wp_query = new WP_Query( $args ); // set the conditions of fetching the posts data

      if( $wp_query -> have_posts() ) { // if the posts was there in this conditions above
        while ( $wp_query -> have_posts() ) {
          $wp_query -> the_post();
    ?>
      <div class="article">
        <a href="<?php the_permalink(); ?>"><img src="<?php echo first_img_to_eyecatch(); ?>" alt=""></a>
      </div>
    <?php
        }
      }
    ?>
    <div class="pager">
      <?php next_posts_link('<strong class="pager__next-post">Next Page</strong>'); ?>
      <?php previous_posts_link('<strong class="pager__previous-post">Previous Page</strong>'); ?>
    </div>
  </main>
  <?php get_footer(); ?>