<?php
/**
 * Template part for displaying recipe posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blank_template
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header resp">
		 <?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php blank_template_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php
		echo  do_shortcode('[vc_row el_class="mobile-only"]'. do_shortcode('[vc_column]'. do_shortcode('[templatera id="265"]') . '[/vc_column]') . '[/vc_row]');
		echo  do_shortcode('[vc_row el_class="hide-on-mobile"]'. do_shortcode('[vc_column]'. do_shortcode('[templatera id="8"]') . '[/vc_column]') . '[/vc_row]');
		?>



		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'blank_template' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blank_template' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
		echo  do_shortcode('[vc_row css=".vc_custom_1492721458888{margin-top: 0px !important;margin-bottom: 0px !important;}"]'. do_shortcode('[vc_column css=".vc_custom_1492721506115{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;}"]'. do_shortcode('[templatera id="169"]') . '[/vc_column]') . '[/vc_row]');
		echo do_shortcode('[vc_row el_class="mobile-only" el_id="mobile-footer"]'.do_shortcode('[vc_column]'. do_shortcode('[templatera id="861"]'). '[/vc_column]') . '[/vc_row]');
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
