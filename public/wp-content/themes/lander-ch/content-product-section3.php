<?php
/**
 * The template used for displaying oil product content in page.php
 *
 * @package lander-ch
 */
?>

<section class="section-container">
	<div class="indent">
		<div class="container">
			<div class="row">

				<div class="six columns product-image section-image-m">
					<?php $image=get_field('product_section_3_image');  ?>
					<img src="<?php echo $image['url'] ?>" alt=" <?php the_field("title"); ?> 圖片">
				</div><!--end column-->

				<div class="six columns product-description">
					<h1><?php the_field("product_section_3_title") ?></h1>
					<p><?php the_field("product_section_3_description") ?></p>
				</div> <!--end product description column-->

			</div> <!--end row-->
		</div> <!--end container-->
	</div>
</section>