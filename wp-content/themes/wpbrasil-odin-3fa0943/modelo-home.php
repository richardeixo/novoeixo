<?php
/**
 * Template Name: Modelo Home
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device);

if ($device == "desktop") {
	include('custom-eixo/desktop/modelo-home.php');
}else{
	include('custom-eixo/mobile/modelo-home.php');
}

get_footer($device);
?>



