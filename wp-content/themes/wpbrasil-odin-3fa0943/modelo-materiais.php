<?php
/**
 * Template Name: Modelo Materiais
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device);

if ($device == "desktop") {
	include('custom-eixo/desktop/modelo-materiais.php');
}else{
	include('custom-eixo/mobile/modelo-materiais.php');
}

get_footer($device);
?>



