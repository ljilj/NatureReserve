<?php
/**
 * Component
 * DA Page header
 */
?>

<?php

$text = get_field( 'text' );
$header_title = get_field( 'header_title', 'option' );
$event_date = get_field( 'date' );

?>

<div class="page-header">
    <div class="container">
        <div class="row page-header__wrap">
            <div class="page-header__info col-lg-6">

            <?php
            if( is_archive('recruitment') && !is_home() ) :
            ?>

                <div class="page-header-subtitle">
                <i> <?php echo _e('Development Authority', 'NatureReserve'); ?></i>
                </div>

                <?php echo _e(NatureReserve_archive_title('<h1 class="page-header__title">', '</h1>')); ?>

            </div>

            <?php
            if( $header_title ) :
            ?>

            <div class="page-header__text col-lg-6">
                <?php echo $header_title; ?>
            </div>

            <?php endif; ?>

            <?php else :
            ?>

                <?php
                $theParent = wp_get_post_parent_id(get_the_ID());

                if( $theParent ) :
                ?>
                    <p class="page-header__parent-title"><i><?php echo get_the_title($theParent); ?></i></p>

                <?php endif; ?>

                <?php
                if( 'king-khalid-reserve' == get_post_type() ) :
                ?>

                <div class="page-header-subtitle">
                    <i><?php echo _e('King Khalid Royal Reserve', 'NatureReserve'); ?></i>
                </div>

                <?php endif; ?>

                <?php
                if( 'iabm-reserve' == get_post_type() ) :
                ?>

                <div class="page-header-subtitle">
                    <i><?php echo _e('Imam Abdulaziz Bin Muhammad', 'NatureReserve'); ?></i>
                </div>

                <?php endif; ?>

                <h1 class="page-header__title"><?php echo the_title(); ?></h1>

                <?php
                if( $event_date ) :
                ?>

                    <?php echo $event_date; ?>

                <?php endif; ?>

            </div>

            <?php
            if( $text ) :
            ?>

            <div class="page-header__text col-lg-6">
                <?php echo $text; ?>
            </div>

            <?php endif; ?>

            <?php endif; // End if is_archive ?>

        </div>
    </div>
</div>
