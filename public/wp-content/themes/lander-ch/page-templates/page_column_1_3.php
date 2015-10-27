<?php
/**
 * Template Name: Column 1 To 3 Page
 *
 * This generic page is used specifically for generating Maylory oil sub pages
 *Other pages such as crastan will need to use post types if different templates are required
 * @package lander-ch
 */

?>

	<div id="primary" >
		<main id="main" class="site-main" role="main">

			<!--Loop through sub pages-->
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'col-1-3' ); ?>
			<?php endwhile; // end of the loop. ?>

<?php echo 'this is g_page_column13'; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
