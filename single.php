<?php get_header(); ?>
  <main>
    <?php 
      if(have_posts()): 
        while(have_posts()):
        the_post(); 
    ?>
      <article class="container">
        <div class="row">
          <div class="col">
            <!-- eyecatch -->
          </div>
          <div class="col">
            <!-- article -->
            <p class="article__category"><?php the_category(', '); ?></p>
            <h2 class="article__title"><?php the_title(); ?></h2>
            <p class="article__content"><?php the_content(); ?></p>
            <p class="article__date"><?php the_date(); ?></p>
            <?php next_post_link( 'Next : <strong>%link</strong>' ); ?>
            <?php previous_post_link('Previous : <strong>%link</strong>'); ?>
          </div>
        </div>
      </article>
    <?php
      endwhile; 
      endif; 
    ?>
  </main>
<?php get_footer(); ?>