<?php
/**
 * Template Name: Modelo Subir
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device);

if ($device == "desktop") {
	include('custom-eixo/desktop/modelo-subir.php');
}else{
	include('custom-eixo/mobile/modelo-subir.php');
}

get_footer($device);
?>



