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


		<?php 
				$query = new WP_Query('pagename=about-maylory');
				//query the maylory product list from posts
				$products_id = $query->queried_object->ID;

				$args = array (
					'orderby'=>name,
					'order'   => 'ASC',
					'post_type' => 'page',
					'post_parent' => $products_id 
					);

				$queryList = new WP_Query($args);


				
				if ($query->have_posts()){
					while($query-> have_posts()){
						$query->the_post();
						echo '<div class="indent">';
						echo '<div class="entry-content">';
						//content of the page
						echo '<h1 class="stretch center-container">'. get_the_title().'</h1>';
						echo '<p>'.the_content( ).'</p>';
						echo '</div>'; //end div.entry-content						
						echo '</div>'; // end div.indent

						if ($queryList->have_posts()){
							while ($queryList->have_posts()){
								$queryList-> the_post();
								echo '<section class="section-container">';
								echo '<div class="indent">';
								echo '<div class="entry-content">';
								echo '<h1 class="stretch center-container">'. get_the_title().'</h1>';
								echo '<p>'.the_content( ).'</p>';
								echo '</div>'; //end div.entry-content						
								echo '</div>'; // end div.indent
								echo '</section>';
							}//end while queryList

						}//end if queryList

					}
				}
				//reset post data otherwise the page will continue running with this query as main query
				wp_reset_postdata();
			?>

		<section>
				<!--九星名廚-->
				<img class="u-full-width u-max-full-width no-img-gap" src="<?php bloginfo('stylesheet_directory'); ?>/img/about-maylory-9-star-cook.jpg" alt="九星名廚圖片">
				<!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/img/about-maylory-3-oil.png"> -->
		</section>	

		<?php 
			$query = new WP_Query('pagename=9starcook-recommendation');
			if ($query->have_posts()){
				while($query-> have_posts()){
					$query->the_post();
					echo '<div class="indent">';
					echo'<div class="entry-content">';
					the_content( );
					echo '</div>';
					echo '</div>';
				}
			}
			wp_reset_postdata();	
		?>	


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
