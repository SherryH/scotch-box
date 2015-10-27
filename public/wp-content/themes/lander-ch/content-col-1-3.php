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

    <section>
    	<div class="indent">
    		<?php the_content(); 
    		echo 'col-13 content loop'
    		?>
    	</div>
    </section>


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
