<?php
/**
 * Template part for displaying recruitment posts.
 *
 * @package NatureReserve
 */

?>

<?php

$position = get_field( 'position', get_the_ID() );
$content = get_field( 'content', get_the_ID() );
$expiring_date = get_field( 'expiring_date', get_the_ID() );

?>

<div class="row recruitment__wrap">
    <div class="recruitment__info col-md-10">

        <div class="recruitment__head">
            <h2 class="recruitment__title"><?php the_title(); ?></h2>

            <?php
            if( $position ) :
            ?>

            <p class="recruitment__position"><?php echo $position; ?></p>

            <?php endif; ?>

        </div>

        <?php
        if( $content ) :
        ?>

        <div class="recruitment__content">
            <?php echo $content; ?>
        </div>

        <?php endif; ?>

        <div class="recruitment__footer">

            <?php
            if( $expiring_date ) :
            ?>

            <div class="recruitment__footer-expire">
                <p class="recruitment__footer-expire--text"><?php echo _e('Expiring Date:', 'NatureReserve') ?></p>
                <p class="recruitment__footer-expire--date"><?php echo $expiring_date; ?></p>
            </div>

            <?php endif; ?>

            <?php
            if( has_category() ) :
            ?>

            <div class="recruitment__footer-category">
                <p class="recruitment__footer-category--text"><?php echo _e('Category:', 'NatureReserve');?></p>
                <p class="recruitment__footer-category--category"><?php echo strip_tags(get_the_category_list(', ')); ?></p>

            </div>

            <?php endif; ?>

        </div>

    </div>

    <div class="recruitment__apply col-md-2">
        <div class="recruitment-button">
            <a href="<?php the_permalink(); ?>"><?php echo _e('Apply', 'NatureReserve'); ?><i class="icon-angle-left"></i><i class="icon-angle-right"></i></a>
        </div>

    </div>
</div>