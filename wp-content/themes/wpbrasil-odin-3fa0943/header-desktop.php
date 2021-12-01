<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/reset.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/bootstrap5/css/bootstrap.min.css">

	<!-- CSS HOME -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/header.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/comp-servicos.css">
	<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/comp-videos-r.css">
</head>

<body>
<div class="main-menu">
		<div class="container">
			<div class="menu-logo">
				<a href="<?php home_url() ?>/atrios/"><img src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/logo-eixo.png"></a>
			</div>
			<div class="menu-itens">
			<?php
    wp_nav_menu(
        array(
            'theme_location' => 'principal',
            'depth' => 2,
            'container' => false,
            'menu_class' => '',
            'fallback_cb' => 'Odin_Bootstrap_Nav_Walker::fallback',
            'walker' => new Odin_Bootstrap_Nav_walker()
        )
    );
?>
			</div>
		</div>
</div>