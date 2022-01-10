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
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/css/header.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/css/comp-servicos.css">
	<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/css/comp-videos-r.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/css/comp-materiais.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/css/comp-clientes.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/css/hero.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/css/heroblog.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/css/roxoblog.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/css/sliderhome.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/css/ultimasblog.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/css/comp-premiord.css">
</head>

<body <?php body_class(); ?>>
<section class="menu-mobile">
       
      



    
       <nav class="navbar navbar-default">
           <div class="container-fluid">
             <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
			 <button type="button" class="navbar-toggle collapsed" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
               </button>
			    <div class="h-search">
			   		<input type="text">
					<button><img src="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/imagens/lupa.svg"></button>
				</div>
               <a class="navbar-brand" href="https://imeb.com.br">
                   <img alt="Brand" src="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/imagens/logo-eixo.png" class="img-ico-menu-m">
                </a>
             </div>
   
         
             <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="collapseExample">
               
               
                       <div class="tabb">
                           <div class="panel with-nav-tabs panel-default">
                               <div class="panel-body">
                                   <div class="tab-content">
                                       <div class="tab-pane fade in active estilizamenu" id="tab12default">
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
                           </div>
                       </div>
             </div>
</section>

