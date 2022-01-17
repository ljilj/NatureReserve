<?php
/**
 * Component
 * DA Reserve Page header
 */
?>

<?php

$kk_logo = get_field( 'kk_rh_logo', 'option' );;
$kk_top_title = get_field( 'kk_rh_top_title', 'option' );
$kk_header_title = get_field( 'kk_rh_head_title', 'option' );;
$kk_subtitle = get_field( 'kk_rh_subtitle', 'option' );;

$iabm_logo = get_field( 'iabm_rh_blogo', 'option' );;
$iabm_top_title = get_field( 'iabm_rh_top_title', 'option' );;
$iabm_header_title = get_field( 'iabm_rh_head_title', 'option' );;
$iabm_subtitle = get_field( 'iabm_rh_subtitle', 'option' );;

?>

<?php
if( 'king-khalid-reserve' == get_post_type() ) :
?>

<div class="reserve-header">
    <div class="container">

        <div class="reserve-header__content">

            <?php
            if($kk_top_title) :
            ?>

            <p class="reserve-header__content--top-title"><?php echo $kk_top_title; ?></p>

            <?php endif; ?>

            <?php
            if($kk_header_title) :
            ?>

            <h2 class="reserve-header__content--head-title"><?php echo $kk_header_title; ?></h2>

            <?php endif; ?>

            <?php
            if($kk_subtitle) :
            ?>

            <h5 class="reserve-header__content--subtitle"><?php echo $kk_subtitle; ?></h5>

            <?php endif; ?>

        </div>

        <?php
        if ( $kk_logo ) :
        ?>

        <img class="reserve-header__logo" src="<?php echo $kk_logo['url']; ?>" alt="<?php echo $kk_logo['alt']; ?>" loading="lazy" />

        <?php endif; ?>

    </div>
</div>

<?php endif; ?>

<?php
if( 'iabm-reserve' == get_post_type() ) :
?>

<div class="reserve-header">
    <div class="container">

        <div class="reserve-header__content">

            <?php
            if($iabm_top_title) :
            ?>

            <p class="reserve-header__content--top-title"><?php echo $iabm_top_title; ?></p>

            <?php endif; ?>

            <?php
            if($iabm_header_title) :
            ?>

            <h2 class="reserve-header__content--head-title"><?php echo $iabm_header_title; ?></h2>

            <?php endif; ?>

            <?php
            if($iabm_subtitle) :
            ?>

            <h5 class="reserve-header__content--subtitle"><?php echo $iabm_subtitle; ?></h5>

            <?php endif; ?>

        </div>

        <?php
        if ( $iabm_logo ) : ?>

        <img class="reserve-header__logo" src="<?php echo $iabm_logo['url']; ?>" alt="<?php echo $iabm_logo['alt']; ?>" loading="lazy" />

        <?php endif; ?>

    </div>
</div>

<?php endif; ?>
