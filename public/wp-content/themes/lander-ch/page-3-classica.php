<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package lander-ch
 */

/* This generic page is used specifically for generating Maylory oil pages and all the relevant sub pages
 *  Other pages such as crastan will need to use post types if different templates are required
 */
get_header(); ?>

	<div id="primary" >
		<main id="main" class="site-main" role="main">


			<!--Display header of the page via thumbnail-->
			<?php include 'content-product-headerImg.php'; ?>

			<!--Display product section on the page-->
			<?php include 'content-product-section.php'; ?>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
