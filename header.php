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
  <?php wp_head(); // apply the admin bar ?>
</head>
<body>
  <header>
    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
    <nav class="nav" id="nav">
      <div class="nav__toggle" id="nav__toggle">
        <p>Menu</p>
        <span class="nav__bar"></span>
        <span class="nav__bar"></span>
      </div>
    </nav>
  </header>