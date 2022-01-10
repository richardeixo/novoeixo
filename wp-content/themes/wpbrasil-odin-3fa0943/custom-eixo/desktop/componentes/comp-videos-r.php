<?php
$args2 = array(
    'post_type'=> 'videos',
    'order'    => 'ASC'
    );

$the_query2 = new WP_Query( $args2 );
?>
<div class='container container-videos'>
    <h2>VÍDEOS RECOMENDADOS</h2>
    <div class="carousel" data-flickity='{ "freeScroll": true }'>
    <?php foreach ($the_query2->posts as $key => $post) { ?>
        <a href="<?php echo get_post_meta($post->ID, 'link_videos', true); ?>" style="background: url(<?=get_the_post_thumbnail_url($post->ID) ?>); background-size:cover">
            <div class="carousel-cell">
                <div class="itemcarousel">
                    <div class="card-video">
                        
                    </div>
                </div>
            </div>
        </a>
        <?php } ?>

    </div>
</div>

