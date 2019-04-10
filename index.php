<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package zmagazine
 */
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Z magazine</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="<?= get_template_directory_uri(); ?>/assets/css/main.css">
</head>
<body>
  <header>
    <h1>Z magazine</h1>
    <nav class="nav" id="nav">
      <div class="nav__toggle" id="nav__toggle">
        <p>Menu</p>
        <span class="nav__bar"></span>
        <span class="nav__bar"></span>
      </div>
    </nav>
  </header>
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
  <footer class="footer">
    <p>&copy;<?php echo date('Y')?> Z magazine</p>
  </footer>
  <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/js/main.js"></script>
</body>
</html>