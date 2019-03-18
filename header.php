<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tacensi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Thiago Censi">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="https://fonts.googleapis.com/css?family=Bitter:400,400i,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page-top"></div>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tacensi' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="container">

			<div class="row row-bottom">

				<div class="site-branding grid-auto">
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
					$tacensi_description = get_bloginfo( 'description', 'display' );
					if ( $tacensi_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $tacensi_description; /* WPCS: xss ok. */ ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation grid-auto">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- #site-navigation -->

			</div> <!-- .row -->

		</div> <!-- .container -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
