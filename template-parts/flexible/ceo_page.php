<?php
/**
 * Flexible Section
 * DA CEO Page
 */
?>

<?php

$title = get_sub_field( 'title' );
$subtitle = get_sub_field( 'subtitle' );
$content = get_sub_field( 'content' );

$image = get_sub_field( 'image' );
$size = 'image-message';

?>

<section class="ceo-page">
    <div class="container">
        <div class="row ceo-page__wrap">
            <div class="ceo-page__image col-md-6">

            <?php
            if( $image ) :
            ?>

				<?php echo wp_get_attachment_image( $image, $size ); ?>

			<?php endif; ?>

            </div>

            <div class="ceo-page__content col-md-6">

            <?php
            if( $title ) :
            ?>
                <h2><?php echo $title; ?></h2>

            <?php endif; ?>

            <?php
            if( $subtitle ) :
            ?>

                <h3><?php echo $subtitle; ?></h3>

            <?php endif; ?>

            <?php
            if( $content ) :
            ?>
                <?php echo $content; ?>

            <?php endif; ?>

            </div>
        </div>
    </div>
</section>