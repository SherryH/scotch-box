<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Simone
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
            <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'simone' ); ?></a>
                         
		</div>

		<nav id="site-navigation" class="main-navigation clear" role="navigation">
            <h1 class="menu-toggle"><a href="#"><?php _e( 'Menu', 'simone' ); ?></a></h1>
			<?php 
            if (is_front_page()){
                //custom menu
                //this asks if we have a menu called 'Front page menu'?
                wp_nav_menu( array( 
                    'menu' => 'Front Page Menu',
                    'container_class' => 'u-pull-right',
                    'menu_class' => 'menu-class'
                ) );                 
            }else{
                //ask if we have a menu displayed in theme location 'Primary'
                wp_nav_menu( array( 'theme_location' => 'primary' ) ); 
            }
            ?>
		</nav><!-- #site-navigation -->

                <div id="header-search-container" class="search-box-wrapper clear hide">
			<div class="search-box clear">
				<?php get_search_form(); ?>
			</div>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
