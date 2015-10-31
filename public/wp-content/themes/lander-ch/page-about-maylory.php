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


		<section>
				<!--maylory olive-->
				<img class="u-full-width u-max-full-width no-img-gap" src="<?php bloginfo('stylesheet_directory'); ?>/img/about-maylory-logo.jpg" alt="橄欖樹圖片">
		</section>

	<div id="primary" class="content-area lander-page">
		<main id="main" class="site-main" role="main">
		<section>
			<div class="indent">
				<?php 
				$query = new WP_Query('pagename= about-maylory');
				//The loop
				if ($query->have_posts()){
					while($query-> have_posts()){
						$query->the_post();
						echo'<div class="entry-content">';
						//content of the page
						the_content( );
						echo '</div>';
					}
				}
				//reset post data otherwise the page will continue running with this query as main query
				wp_reset_postdata();
				?>				

			</div>
		</section>






		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
