<?php
/**
 * Month View Template
 * The wrapper template for month view.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/month.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

do_action( 'tribe_events_before_template' );

echo  do_shortcode('[vc_row]'. do_shortcode('[vc_column]'. do_shortcode('[templatera id="8"]') . '[/vc_column]') . '[/vc_row]');

// Tribe Bar
tribe_get_template_part( 'modules/bar' );

// Main Events Content
tribe_get_template_part( 'month/content' );

echo  do_shortcode('[vc_row css=".vc_custom_1492721458888{margin-top: 0px !important;margin-bottom: 0px !important;}"]'. do_shortcode('[vc_column css=".vc_custom_1492721506115{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;}"]'. do_shortcode('[templatera id="169"]') . '[/vc_column]') . '[/vc_row]');

do_action( 'tribe_events_after_template' );
