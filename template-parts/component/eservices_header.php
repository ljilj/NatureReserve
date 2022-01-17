<?php
/**
 * Component
 * DA eServices Page header
 */
?>

<?php

$header_title = get_field( 'header_title' );
$header_text = get_field( 'header_text' );

?>

<div class="page-header">
    <div class="container">
        <div class="row page-header__wrap">
            <div class="page-header__info col-lg-6">

                <p class="page-header__parent-title"><i><?php echo the_title(); ?></i></p>
                <h1 class="page-header__title"><?php echo $header_title; ?></h1>

            </div>

            <div class="page-header__text col-lg-6">

                <?php
                if( $header_text ) : ?>

                    <?php echo $header_text; ?>

                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
