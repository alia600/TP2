<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
	<header class="entry-header">
		<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
	</header>
	<?php endif; ?>

	<div class="entry-content">
		<div class="wp-block-media-text alignwide" style="grid-template-columns:1fr">
			<figure class="wp-block-media-text__media">
            <?php 
            echo "<p> Le(s) prof(s) : ".get_field('prof')."</p>";
            /*$sProfs = get_field('prof'); 
            $aProf = explode(',', $sProfs);
            for($i = 0; $i< count($aProf); $i++){
                echo "<p>".$aProf[$i]."</p>";
            }*/
            echo "<p>".get_field('heure')." heures</p>";
            ?>
			<div class="wp-block-media-text__content">
				<?php
					the_content();
				?>
			</div>
            <?php
				$image = get_field('image_1');
				$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
					echo "<img src=".$image['url']." alt=".$image['alt']."/>";
                }
                $image = get_field('image_2');
				$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
					echo "<img src=".$image['url']." alt=".$image['alt']."/>";
                }
                $image = get_field('image_3');
				$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
					echo "<img src=".$image['url']." alt=".$image['alt']."/>";
				}
			?>
			</figure>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php twentynineteen_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
	<?php get_template_part( 'template-parts/post/author', 'bio' ); ?>
	<?php endif; ?>

</article><!-- #post-${ID} -->