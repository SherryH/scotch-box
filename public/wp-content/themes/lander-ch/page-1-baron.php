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
			<?php 
			$query = new WP_Query('pagename= maylory-list/1-baron');
				//query the maylory product list from posts
				$products_id = $query->queried_object->ID;

				$args = array (
					'orderby'=>name,
					'order'   => 'ASC',
					'post_type' => 'page',
					'post_parent' => $products_id 
					);

				$querySubSection = new WP_Query($args);
			 ?>

			<!--Display header of the page via thumbnail-->
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>

			<!--Loop through sub pages-->
			<?php  
				if ($querySubSection->have_posts()){
					while ($querySubSection->have_posts()){
						$querySubSection-> the_post();
						

					    the_content(); //but css syles wont get applied on content? why css style applied fine on front-page.php?
					    //css applied if using get_template_part() =why?
					    //but i wanna apply global templates for individual sub pages... any func for querying those pages?
					    //or style everything in subpages?

					}//end while querySubSection

				}//end if querySubSection
			?>
<?php echo 'this is page-1-baron.php'; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
