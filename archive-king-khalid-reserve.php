<?php
/**
 * Template Name: King Khalid Royal Reserve
 */

get_header(); ?>

<?php

$title      = get_field( 'title' );
// $content    = get_field( 'content' );
$map_image  = get_field( 'map_image' );

$args = array(
	'post_type' 		=> 'king-khalid-reserve',
	'posts_per_page'	=> -1,
    'post_status'       => 'publish'
);

$query = new WP_Query( $args );

?>

<?php
get_template_part( 'template-parts/component/reserve_header' );
?>

<div class="reserve-navigation">
    <div class="reserve-navigation__wrap">
    <?php
    foreach($query->get_posts() as $post):
        $meta = get_post_meta($post->ID);
        foreach($meta as &$m){
            if(is_array($m)){
                $m = $m[0];
            }
        } ?>

        <div class="reserve-navigation__thumbnail">
            <?php echo get_the_post_thumbnail( $post->ID, 'reserve-nav' ); ?>
            <h3 class="reserve-navigation__title"><?php echo $post->post_title; ?></h3>
        </div>

    <?php endforeach;?>
    </div>
</div>

<div class="reserve-content">
    <div class="container">
        <div class="row">
            <div class="reserve-content__wrap col-md-8">

                <?php
                foreach($query->get_posts() as $post):

                    $reserve_content = get_field( 'content' );

                    $meta = get_post_meta($post->ID);
                    foreach($meta as &$m){
                        if(is_array($m)){
                            $m = $m[0];
                        }
                    } ?>

                    <div class="reverse-content__content">
                        <div class="reserve-content__content--text">
                            <h3><?php echo $post->post_title; ?></h3>
                            <?php echo $reserve_content; ?>
                        </div>

                        <div class="reserve-content__content--image">

                        <?php

                            $content_image = get_field( 'content_image' );
                            $size = 'reserve-post';

                        ?>

                        <?php if ( $content_image ) : ?>
                            <?php echo wp_get_attachment_image( $content_image, $size ); ?>
                        <?php endif; ?>
                        </div>
                    </div>

                <?php endforeach;?>

            </div>

            <?php

                get_template_part( 'template-parts/component/reserve_info_sidebar' );

            ?>

        </div>
    </div>
</div>

<?php
get_footer();
