<?php
/*
Template Name: sidebar Output
*/
ob_start();
dynamic_sidebar('vin-sidebar');
$sidebar = ob_get_contents();
ob_end_clean();

// ob_start();
// dynamic_sidebar('vin-ff-sidebar');
// $ffsidebar = ob_get_contents();
// ob_end_clean();

	$myCode = new stdClass;
	// $myCode->main_nav = $main_nav;
	$myCode->sidebar = $sidebar;
	$output = 'jsonCallback('.json_encode($myCode).');';
	echo $output;

?>