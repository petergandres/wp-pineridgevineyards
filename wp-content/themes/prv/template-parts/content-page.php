<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blank_template
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blank_template' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	<!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
