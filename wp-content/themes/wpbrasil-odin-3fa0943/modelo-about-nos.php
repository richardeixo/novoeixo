<?php
/**
 * Template Name: Modelo About nós
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device);

if ($device == "desktop") {
	include('custom-eixo/desktop/modelo-about-nos.php');
}else{
	include('custom-eixo/mobile/modelo-about-nos.php');
}

get_footer($device);
?>



