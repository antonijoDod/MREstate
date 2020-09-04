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

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'my-real-estate'); ?></a> -->
        <div class="relative container mx-auto px-4">
            Ideom

        </div> <!-- end of top nav -->
        <header class="relative z-50 w-full top-0 flex flex-wrap items-center justify-between py-3 navbar-expand-lg">
            <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
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

                <nav id="site-navigation" class="main-navigation">
                    <!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'my-real-estate'); ?></button> -->
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            'class' => 'jsdffksdjfl'
                        )
                    );
                    ?>
                </nav><!-- #site-navigation -->
            </div>
        </header><!-- #masthead -->