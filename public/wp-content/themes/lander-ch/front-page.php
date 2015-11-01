<?php
/**
 * The custom template for the one-page stype front page. Kicks in automatically
 *
 * @package lander-ch
 */

get_header(); ?>

<?php 
global $more;
 ?>

<!--header image which only displays on the front-page.php-->
    <figure class="header-background header-image u-full-width u-max-full-width">
        <img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
    </figure>
<!--*******************************************************-->

	<div id="primary" class="content-area lander-page">
		<main id="main" class="site-main" role="main">
		<section id="maylory-intro">
			<div class="indent">
				<?php 
					$query = new WP_Query('pagename= maylory-intro');
					//The loop
					if ($query->have_posts()){
						while($query-> have_posts()){
							$query->the_post();
							echo'<div class="entry-content">';
							//<!--mayloy logo-->
							echo '<img src="' ;
							bloginfo('stylesheet_directory'); 
							echo '/img/maylory-logo.png" alt="Maylory logo">';
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
		<section>
				<!--maylory terrace-->
				<img class="u-full-width u-max-full-width no-img-gap" src="<?php bloginfo('stylesheet_directory'); ?>/img/maylory-terrace.png" alt="美洛莉莊園圖片">
		</section>
		<section id="maylory-list">
			<div class="indent">
				<?php 
					$query = new WP_Query('pagename= maylory-list');
					//query the maylory product list from posts
					$products_id = $query->queried_object->ID;

					$args = array (
						'orderby'=>name,
						'order'   => 'ASC',
						'post_type' => 'page',
						'post_parent' => $products_id 
						);

					$queryList = new WP_Query($args);


					//The loop, this section includes the heading "Our Products"
					if ($query->have_posts()){
						while($query-> have_posts()){
							$query->the_post();
							echo'<div class="entry-content">';
							//content of the page
							the_content( );

							if ($queryList->have_posts()){
								echo '<div class="row">';
								while ($queryList->have_posts()){
									$queryList-> the_post();
									
									echo '<div class="display-inline">';
									echo '<a href="' . get_permalink() . '" title="Learn more about ' . get_the_title() . '">';
									the_post_thumbnail('maylory-product-list-mug'); //set in functions.php
									echo '<h6>'. get_the_title().'</h6>';
									echo '</a>';
									echo '</div>';
								}//end while queryList
								echo '</div>';

							}//end if queryList


							echo '</div>';
						}
					}
					//reset post data otherwise the page will continue running with this query as main query
					wp_reset_postdata();
				?>		


			</div>				
		</section>
		<section id="call-to-action">
			<div class="indent">
				<?php 
				$query = new WP_Query('pagename=seminar-form');
				//The loop
				if ($query->have_posts()){
					while($query-> have_posts()){
						$query->the_post();
						echo'<div class="entry-content">';
						the_content( );
						echo '</div>';
					}
				}
				//reset post data otherwise the page will continue running with this query as main query
				wp_reset_postdata();
				 ?>
			</div>
		</section>
		<section id="testimonials">
			<div class="indent">
				<?php 
					$args = array(
						'posts_per_page'=>3,
						'orderby'=>rand,
						'category_name'=> 'testimonials' //slugs, not really names
						);
					$query = new WP_Query($args);
					// The Loop
					if ( $query->have_posts() ) {
						echo '<ul class="testimonials">';
						while ( $query->have_posts() ) {
							$query->the_post();
							$more =0; //set more variable to false, it will only display content before $more
							echo '<li class="clear">';
							echo '<figure class="testimonial-thumb">';
							the_post_thumbnail('testimonial-mug'); //set in functions.php
							echo '</figure>';
							echo '<aside class="testimonial-text">';
							echo '<h3 class="testimonial-name">' . get_the_title() . '</h3>';
							echo '<div class="testimonial-excerpt">';
							the_content('');
							echo '</div>';
							echo '</aside>';
							echo '</li>';
						}
						echo '</ul>';
					}

					/* Restore original Post Data */
					wp_reset_postdata();
				 ?>
			<div class="indent">
		</section>
		<section id="services">
			<div class="indent">
				<?php 
				$query = new WP_Query( 'pagename=oil-products' );
				//find the ID of the products page
				$products_id = $query->queried_object->ID;

				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						$more = 0;
						echo '<h2 class="section-title">' . get_the_title() . '</h2>';
						echo '<div class="entry-content">';
						the_content('');
						echo '</div>';
					}
				}

				/* Restore original Post Data */
				wp_reset_postdata();

				/*Get children of products page*/
				$args = array(
					'post_type' => 'page',
					'post_parent' => $products_id 
				);

				$products_query = new WP_Query($args); //only querying children pages of the products page

				//The Loop
				if($products_query->have_posts()){
					echo '<ul class="services-list">';
					while ($products_query->have_posts()) {
						$products_query->the_post();
						$more =0;
						echo '<li class="clear">';
						echo '<a href="' . get_permalink() . '" title="Learn more about ' . get_the_title() . '">';
						echo '<h3 class="services-title">' . get_the_title() . '</h3>';
						echo '</a>';
						echo '<div class="services-lede">';
						the_content(' (更多資訊)');
						echo '</div>';
						echo '</li>';
					}
					echo '</ul>';
				}

				/* Restore original Post Data */
				wp_reset_postdata();


				?>
			</div>
		</section>
		<section id="meet">
			<div class="indent">
				<?php 
					$query = new WP_Query( 'pagename=about-us' );
					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							echo '<h2 class="section-title">' . get_the_title() . '</h2>';
							echo '<div class="entry-content">';
							the_content();
							echo '</div>';
						}
					}

					/* Restore original Post Data */
					wp_reset_postdata();
				?>
			</div>
		</section>
		<section id="contact">
			<div class="indent">
				<div class="front-left">
					<?php 
						$query = new WP_Query( 'pagename=where-buy' );
						// The Loop
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
								echo '<h2 class="section-title">' . get_the_title() . '</h2>';
								echo '<div class="entry-content">';
								the_content();
								echo '</div>';
							}
						}

						/* Restore original Post Data */
						wp_reset_postdata();
					?>
				</div>
			</div>
		</section>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
