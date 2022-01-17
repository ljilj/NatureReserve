<?php
/**
 * Component
 * Reserve Information sidebar
 */
?>

<?php

$kk_title        = get_field( 'kk_info_title', 'option' );
$kk_text         = get_field( 'kk_info_text', 'option' );
$kk_info_image   = get_field( 'kk_info_image', 'option' );

$iabm_title      = get_field( 'iabm_info_title', 'option' );
$iabm_text       = get_field( 'iabm_info_text', 'option' );
$iabm_info_image = get_field( 'iabm_info_image', 'option' );

?>

<?php
if( 'king-khalid-reserve' == get_post_type()) :
?>

<div class="reserve-info col-md-4">

    <?php
    if($kk_title) :
    ?>

        <h4><?php echo $kk_title; ?></h4>

    <?php endif; ?>

    <?php
    if($kk_text) :
    ?>

        <?php echo $kk_text; ?>

    <?php endif; ?>

    <?php
    if ( $kk_info_image ) :
    ?>
        <img src="<?php echo $kk_info_image['url']; ?>" alt="<?php echo $kk_info_image['alt']; ?>" loading="lazy" />

    <?php endif; ?>

</div>

<?php endif; ?>

<?php
if( 'iabm-reserve' == get_post_type() ) :
?>

<div class="reserve-info col-md-4">

    <?php
    if($iabm_title) :
    ?>

        <h4><?php echo $iabm_title; ?></h4>

    <?php endif; ?>

    <?php
    if($iabm_text) :
    ?>

        <?php echo $iabm_text; ?>

    <?php endif; ?>

    <?php
    if ( $iabm_info_image ) :
    ?>
        <img src="<?php echo $iabm_info_image['url']; ?>" alt="<?php echo $iabm_info_image['alt']; ?>" loading="lazy" />

    <?php endif; ?>

</div>

<?php endif; ?>
