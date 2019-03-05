<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zmagazine
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/assets/images/favicon-szdp.png" type="image/x-icon">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'zmagazine' ); ?></a>

	<header id="header" class="header">
		<h1 class="header__logo">
			<a href="{{ home_url('/') }}">
				<img src="<?= get_template_directory_uri(); ?>/assets/svg/szdplogo-for-web.svg" />
			</a>
		</h1>
		<!-- //hamburger menu// -->
		<nav class="nav">
			<div id="nav__toggle" class="nav__toggle">
				menu
				<span class="nav__bar"></span>
				<span class="nav__bar"></span>
				<span class="nav__bar"></span>
			</div>
			<!-- //"nav__list" will be a toggle class for open and close// -->
				<?php wp_nav_menu(
					$args = array(
						'menu_class' => 'nav__list',
						'menu_id'    => 'nav__list',
					)
				);?>
		</nav>
	</header>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			// $zmagazine_description = get_bloginfo( 'description', 'display' );
			// if ( $zmagazine_description || is_customize_preview() ) :
				?>
				<!-- <p class="site-description"><?php echo $zmagazine_description; /* WPCS: xss ok. */ ?></p> -->
			<?php //endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'zmagazine' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
