<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package blank_template
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content_recipe', get_post_format() );

	

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<script type='application/ld+json'>
{			
  "@context" : "http://schema.org/",
  "@type": "Recipe",
  "name" :"<?php echo get_post_meta($post->ID, 'name' ,TRUE); ?>" ,
  "image": "<?php echo get_post_meta($post->ID, 'image' ,TRUE); ?>",
  "author": {
      "@type": "Person",
      "name": "<?php echo get_post_meta($post->ID, 'authorName' ,TRUE); ?>"
   },
  "description": "<?php echo get_post_meta($post->ID, 'description' ,TRUE); ?>",
  "recipeIngredient": "<?php echo get_post_meta($post->ID, 'recipeIngredient' ,TRUE); ?>",
  "recipeInstructions": "<?php echo get_post_meta($post->ID, 'recipeInstructions' ,TRUE); ?>"

}

</script>

<?php
get_sidebar();
get_footer();
