<?php
$args3 = array(
    'post_type'=> 'clientes',
    'order'    => 'ASC'
    );

$the_query3 = new WP_Query( $args3 );
?>
<div class='container container-clientes'>
    <h2>CLIENTES</h2>
    <div class="carousel" data-flickity='{ "freeScroll": true }'>
        <a href="#">
            <div class="carousel-cell">
                <div class="itemcarousel">
                    <div class="lista-clientes">
                        <?php foreach ($the_query3->posts as $key => $post) { ?>
                            <img src="<?=get_the_post_thumbnail_url($post->ID) ?>">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

