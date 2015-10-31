<?php
/**
 * The template used for displaying oil product content in page.php
 *
 * @package lander-ch
 */
?>

<section>
	<div class="indent">
		<div class="container">
			<div class="row">
				<div class="four columns product-image">
				<?php $image=get_field('product_image');  ?>
					<img src="<?php echo $image['url'] ?>" alt=" <?php the_field("title"); ?> 圖片">
				</div>
				<div class="eight columns product-description">
					<div class="stretch-container lower-title">
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