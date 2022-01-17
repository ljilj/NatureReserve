<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package NatureReserve
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!-- <?php session_start(); // override session_start() from includes\instagramGraphApi\defines.php ?> -->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/fonticon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/fonticon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/fonticon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/images/fonticon/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/fonticon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<?php echo wp_kses( get_theme_mod( 'google_analytics_code' ), [ 'script' => [] ] ); ?>
	<meta name="theme-color" content="#010101">
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'NatureReserve' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="top-header">
			<span class="top-header__left"></span>
			<span class="top-header__right"></span>
			<div class="container">
				<div class="top-header__wrap">

					<form role="search" method="get" class="top-header__search" action="<?php echo home_url( '/' ); ?>">
						<label class="top-header__search-row">
							<span class="screen-reader-text"><?php echo _e( 'Search:', 'label' ) ?></span>
							<input type="search" class="search-field"
								placeholder="<?php echo esc_attr_e( 'Search', 'placeholder' ) ?>"
								value="<?php echo get_search_query() ?>" name="s"
								title="<?php echo esc_attr_e( 'Search for:', 'label' ) ?>" />
							<i class="icon-search"></i>
							<span class="focus-border"></span>
						</label>

					</form>

					<?php do_action('wpml_add_language_selector'); ?>

					<a class="top-header__link" href="<?php echo home_url( '/contact-us' ); ?>"><?php _e('Contact Us', 'NatureReserve'); ?></a>
				</div>
			</div>
		</div>

		<div class="container logo-menu-wrapper">
			<div class="justify-content-between align-items-center row">
				<div class="site-branding-main-logo site-branding">
					<div class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo( esc_url( get_header_image() ) ); ?>" alt="<?php echo( esc_attr( get_bloginfo( 'title' ) ) ); ?>" width="140" height="45" loading="lazy" />
						</a>
					</div>
					<?php if ( bloginfo( 'description' ) != '' ) : ?>
						<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php

						wp_nav_menu(
							array(
								'theme_location' 		=> 	'primary',
								'menu_id' 				=> 	'primary-menu',
								'menu_class' 			=> 	'main-header-menu',
								'container_class'		=>	'main-menu-container'
							)
						);

					?>

					<div class="top-header--mobile">

						<?php mobile_languages_list(); ?>

						<a class="mobile-contact-page" href="<?php echo home_url( '/contact-us' ); ?>"><?php _e('Contact Us', 'NatureReserve'); ?></a>

					</div>

				</nav><!-- #site-navigation -->

				<div class="menu-toggle-wrapper">

					<div class="mobile-search__wrap">
						<a href="#" data-featherlight="#searchPopup" data-featherlight-variant="searchPopup"><i class="icon-search"></i></a>
						<div class="search-popup" id="searchPopup" style="display: none;">
							<div class="mobile-search">
								<p class="mobile-search__title"><?php _e('What are you looking for?', 'NatureReserve') ?></p>
								<form role="search" method="get" class="top-header__search" action="<?php echo home_url( '/' ); ?>">
									<label class="top-header__search-row">
										<span class="screen-reader-text"><?php echo _e( 'Search:', 'label' ) ?></span>
										<input type="search" class="search-field"
											placeholder="<?php echo esc_attr_e( 'Search', 'placeholder' ) ?>"
											value="<?php echo get_search_query() ?>" name="s"
											title="<?php echo esc_attr_e( 'Search for:', 'label' ) ?>" />
									</label>
								</form>
							</div>
						</div>
					</div>

					<a href='#' class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<span></span>
						<span></span>
						<span></span>
					</a>
				</div>
			</div> <!-- /.row justify-content-between -->
		</div> <!-- /.container logo-menu-wrapper -->
	</header><!-- #masthead /.site-header -->

	<div id="content" class="site-content">