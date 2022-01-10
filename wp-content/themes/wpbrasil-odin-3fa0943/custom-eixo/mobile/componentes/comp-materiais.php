<?php
$args = array(
    'post_type'=> 'materiais-gratuitos',
    'order'    => 'ASC'
    );

$the_query = new WP_Query( $args );
?>
<div class='container container-materiais'>
    <h2>MATERIAIS GRATUITOS</h2>
    <div class="carousel" data-flickity='{ "freeScroll": true }'>
    <?php foreach ($the_query->posts as $key => $post) { ?>
        <a href="<?php echo get_post_meta($post->ID, 'link_materiais', true); ?>" style="top:25%;">
            <div class="carousel-cell">
                <div class="itemcarousel">
                    <img src="<?=get_the_post_thumbnail_url($post->ID) ?>"> 
                </div>
            </div>
        </a>
        <?php } ?>

    </div>
</div>

