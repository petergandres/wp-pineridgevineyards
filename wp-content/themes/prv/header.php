<?php
header("Access-Control-Allow-Origin: *");
?>
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank_template
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N2V7RQ9');</script>
<!-- End Google Tag Manager -->

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="https://prv.wpengine.com/wp-content/uploads/2017/06/favicon.ico" type="image/x-icon">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/785512/6262172/css/fonts.css" />
<!-- <script>try{Typekit.load({ async: true });}catch(e){}</script> -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N2V7RQ9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blank_template' ); ?></a>

	<div id="content" class="site-content">
