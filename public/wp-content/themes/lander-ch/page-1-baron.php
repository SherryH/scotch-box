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
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', '1-baron' ); ?>
			<?php endwhile; // end of the loop. ?>

			<section class="">
				<div class="indent">
				<div class="container">
					<div class="row">
						<div class="four columns product-image">
						<?php $image=get_field('product_image');  ?>
							<img src="<?php echo $image['url'] ?>" alt=" <?php the_field("title"); ?> 圖片">
						</div>
						<div class="eight columns product-description">
							<div class="stretch-container">
								<h1 class="stretch"><?php the_field("title") ?></h1>
								<!--can't display subtitle-side inline -->
								<h5 class="subtitle-ch stretch"><?php the_field("subtitle_chinese") ?></h5>
								<h2 class="subtitle-en stretch"><?php the_field("subtitle_english") ?></h2>
							</div>
							<p><?php the_field("product_description") ?></p>
						</div> <!--end column-->
					</div> <!--end row-->
				</div> <!--end container-->

					
				</div>
			</section>

			<!--Loop through sub pages-->
<!-- 				<?php 
				$query = new WP_Query('pagename= maylory-list/1-baron');
					$products_id = $query->queried_object->ID;

					$args = array (
						'orderby'=>name,
						'order'   => 'ASC',
						'post_type' => 'page',
						'post_parent' => $products_id 
						);

					$querySubSection = new WP_Query($args);
				 ?> -->
<!-- 			<?php  
				if ($querySubSection->have_posts()){
					while ($querySubSection->have_posts()){
						$querySubSection-> the_post();
						

					    the_content(); //but css syles wont get applied on content? why css style applied fine on front-page.php?
					    //css applied if using get_template_part() =why?
					    //but i wanna apply global templates for individual sub pages... any func for querying those pages?
					    //or style everything in subpages?

					}//end while querySubSection

				}//end if querySubSection
			?> -->
<?php echo 'this is page-1-baron.php'; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
