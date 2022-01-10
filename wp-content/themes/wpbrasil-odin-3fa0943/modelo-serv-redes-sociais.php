<?php
/**
 * Template Name: Modelo Servicos Rede Social
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device);

if ($device == "desktop") {
	include('custom-eixo/desktop/modelo-serv-redes-sociais.php');
}else{
	include('custom-eixo/mobile/modelo-serv-redes-sociais.php');
}

get_footer($device);
?>



