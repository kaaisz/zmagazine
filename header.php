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
  <title><?php the_title(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" media="screen" href="<?= get_template_directory_uri(); ?>/assets/css/main.css">
  <?php //wp_head(); // apply the admin bar ?>
</head>
<body>
  <header>
    <nav id="nav" class="nav navbar fixed-top navbar-light">
      <a class="nav__title navbar-brand" href="<?php echo home_url(); ?>"><h1><?php bloginfo('name'); ?></h1></a>
      <!-- search -->
      <form class="search form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="search">
        <button class="btn my-2 my-sm-0" type="submit">Search</button>
      </form>
      <!-- menus = category -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler__txt">MENU</span>
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- nav -->
      <div class="collapse" id="navarToggleExternalContent">
        <ul class="nav__menu">
          <li>Category</li>
          <li>Category</li>
          <li>Category</li>
          <li>Category</li>
        </ul>
      </div>
    </nav>
  </header>