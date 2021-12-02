<?php
/**
 * Template Name: Modelo Blog
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device);

if ($device == "desktop") {
	include('custom-eixo/desktop/modelo-blog.php');
}else{
	include('custom-eixo/mobile/modelo-blog.php');
}

get_footer($device);
?>



