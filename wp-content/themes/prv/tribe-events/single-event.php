<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version  4.3
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural = tribe_get_event_label_plural();

$event_id = get_the_ID();

?>

<?php
	echo  do_shortcode('[vc_row el_class="mobile-only"]'. do_shortcode('[vc_column]'. do_shortcode('[templatera id="265"]') . '[/vc_column]') . '[/vc_row]');
	echo  do_shortcode('[vc_row el_class="hide-on-mobile"]'. do_shortcode('[vc_column]'. do_shortcode('[templatera id="8"]') . '[/vc_column]') . '[/vc_row]');
?>

<!-- <div class="vc_row wpb_row vc_row-fluid vc_row-o-full-height vc_row-o-columns-stretch vc_row-o-equal-height vc_row-flex">
	<div class="wpb_column vc_column_container vc_col-sm-12">
		<div class="vc_column-inner vc_custom_1492762248471">
			<div class="wpb_wrapper">
				<div class="wpb_text_column wpb_content_element " >
					<div class="wpb_wrapper"> -->

<div id="tribe-events-content" class="tribe-events-single">

	<?php while ( have_posts() ) :  the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<!-- Event featured image, but exclude link -->
			<?php echo tribe_event_featured_image( $event_id, 'full', false ); ?>

			<!-- Event content -->
			<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
			<div class="tribe-events-single-event-description tribe-events-content">

				<?php the_content(); ?>
			</div>
			<!-- .tribe-events-single-event-description -->
			<?php do_action( 'tribe_events_single_event_after_the_content' ) ?>

			<!-- Event meta -->
			<?php do_action( 'tribe_events_single_event_before_the_meta' ) ?>
			<?php tribe_get_template_part( 'modules/meta' ); ?>
			<?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>
		</div> <!-- #post-x -->
		<?php if ( get_post_type() == Tribe__Events__Main::POSTTYPE && tribe_get_option( 'showComments', false ) ) comments_template() ?>
	<?php endwhile; ?>

</div><!-- #tribe-events-content -->

<!-- </div></div></div></div></div></div> -->
<?php
	echo  do_shortcode('[vc_row css=".vc_custom_1497473398640{background-color: #ffffff !important;}" el_class="width-1366 upcoming-feed"][vc_column][vc_column_text][single-feed][/vc_column_text][/vc_column][/vc_row]');
?>

</script>

<?php
	echo  do_shortcode('[vc_row css=".vc_custom_1492721458888{margin-top: 0px !important;margin-bottom: 0px !important;}"]'. do_shortcode('[vc_column css=".vc_custom_1492721506115{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;}"]'. do_shortcode('[templatera id="169"]') . '[/vc_column]') . '[/vc_row]');
	echo do_shortcode('[vc_row el_class="mobile-only" el_id="mobile-footer"]'.do_shortcode('[vc_column]'. do_shortcode('[templatera id="861"]'). '[/vc_column]') . '[/vc_row]');
?>
