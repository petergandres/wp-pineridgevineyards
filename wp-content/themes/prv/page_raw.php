<?php
/**
 * Template Name: Raw Output
 *
 * This outputs ONLY the headers and the content on the page -- nothing else.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blank_template
 */
send_origin_headers();
//wp_head();

			while ( have_posts() ) : the_post();

				 the_content();

			endwhile; // End of the loop.
//wp_footer();
