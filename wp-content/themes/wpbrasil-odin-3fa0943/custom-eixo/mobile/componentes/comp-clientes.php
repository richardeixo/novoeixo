<?php
$args3 = array(
    'post_type'=> 'clientes-mobile',
    'order'    => 'ASC'
    );

$the_query3 = new WP_Query( $args3 );
?>
<div class='container container-clientes'>
    <h2>CLIENTES</h2>
    <div class="carousel" data-flickity='{ "freeScroll": true }'>
        
        <?php foreach ($the_query3->posts as $key => $post) { ?>
            <div class="carousel-cell">
            
                <div class="itemcarousel">
                    <div class="lista-clientes">
                        
                            <img src="<?=get_the_post_thumbnail_url($post->ID) ?>">
                        
                    </div>
                </div>
            
            </div>
            <?php } ?>
        
    </div>
</div>

