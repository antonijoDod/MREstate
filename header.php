<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MREstate
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'my-real-estate'); ?></a> -->

		<header class="relative top-0 z-50 w-full bg-blue-700">
			<div class="container mx-auto">
				<div class="flex justify-between py-3 text-sm text-gray-400 w-full border-b-2 border-gray-500">
					<ul>
						<li class="mr-5 inline-block">
							<span>
								<i class="fas fa-phone-alt"></i>
							</span>
							<a href="tel:+385911927797">(385) 91 192 7797</a>
						</li>
						<li class="inline-block">
							<span>
								<i class="far fa-envelope"></i>
							</span>
							<a href="mailto:antonijo@antonijo.com">info@antonijo.com</a>
						</li>
					</ul>
					<ul>
						<li class="mr-5 inline-block">
							<a href="tel:+385911927797">
								<i class="fab fa-facebook-square">
								</i>
							</a>
						</li>
						<li class="inline-block">
							<a href="mailto:antonijo@antonijo.com">
								<i class="fab fa-instagram-square"></i>
							</a>
						</li>
					</ul>
				</div> <!-- Top Head -->

				<div class="flex justify-between py-4 items-center">
					<div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
						<?php
						the_custom_logo();
						if (is_front_page() && is_home()) :
						?>
							<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
						<?php
						else :
						?>
							<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
						<?php
						endif;
						?>
						<button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button">
							<FontAwesomeIcon icon={faBars} class="text-gray-700" />
						</button>
					</div><!-- .site-branding -->
					<nav id="site-navigation" class="main-navigation text-blue-200 uppercase">
						<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'my-real-estate'); ?></button> -->
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>

			</div>
		</header><!-- #masthead -->