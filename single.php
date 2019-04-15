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
            <div class="article__content"><?php the_content(); ?></div>
            <p class="article__date"><?php the_date(); ?></p>
            <div class="pager">
              <?php next_post_link( '<strong class="pager__next-post">%link</strong>' ); ?>
              <?php previous_post_link('<strong class="pager__previous-post">%link</strong>'); ?>
            </div>
          </div>
        </div>
      </article>
    <?php
      endwhile; 
      endif; 
    ?>
  </main>
<?php get_footer(); ?>