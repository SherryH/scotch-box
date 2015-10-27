<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Simone
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php 
    if (has_post_thumbnail()) {
        echo '<div class="single-post-thumbnail clear">';
        echo '<div class="image-shifter">';
        simone_the_responsive_thumbnail( get_the_ID() );
        echo '</div>';
        echo '</div>';
    }
    ?>
<!-- 	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<h6 class="font-thin">特級冷壓初榨橄欖油</h6>
	</header>-->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'simone' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
