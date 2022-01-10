<?php
/**
 * Template Name: Modelo Cases
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device);

if ($device == "desktop") {
	include('custom-eixo/desktop/modelo-cases.php');
}else{
	include('custom-eixo/mobile/modelo-cases.php');
}

get_footer($device);
?>



