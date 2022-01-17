<?php
/**
 * Flexible Section
 * DA About the Authority
 */
?>

<?php

$image   = get_sub_field( 'image' );
$title   = get_sub_field( 'title' );
$content = get_sub_field( 'content' );

?>

<section class="about-the-authority">
    <div class="about-the-authority-banner">
        <?php the_post_thumbnail( 'full', ['class' => 'about-the-authority__feature-image'] ); ?>
    </div>

    <div class="container">
        <div class="row about-the-authority__wrap">
            <div class="about-the-authority__image col-lg-6">

            <?php
            if( $image ) :
            ?>

				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" loading="lazy" />

			<?php endif; ?>

            </div>
            <div class="about-the-authority__content col-lg-6">

            <?php
            if( $title ) :
            ?>

                <h2><?php echo $title; ?></h2>

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