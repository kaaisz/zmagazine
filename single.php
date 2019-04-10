<?php get_header(); ?>
  <main>
    <?php 
      if(have_posts()): 
        while(have_posts()):
        the_post(); 
    ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p><?php the_content(); ?></p>
    <?php
      endwhile; 
      endif; 
    ?>
    <?php next_post_link( 'Next : <strong>%link</strong>' ); ?>
    <?php previous_post_link('Previous : <strong>%link</strong>'); ?>
  </main>
<?php get_footer(); ?>