<?php
/**
 * Flexible Section
 * DA Board of directors
 */
?>

<section class="board-of-directors">
    <div class="container">
        <div class="row">
        <?php if ( have_rows( 'board_of_director' ) ) : ?>
            <?php while ( have_rows( 'board_of_director' ) ) : the_row(); ?>

            <?php

            $name = get_sub_field( 'name' );
            $about = get_sub_field( 'about' );
            $image = get_sub_field( 'image' );
            $size = 'board-of-directors';

            ?>

            <div class="board-of-directors__box col-lg-4 col-md-6">

            <?php
            if( $image ) :
            ?>

                <div class="board-of-directors__image">
                    <?php echo wp_get_attachment_image( $image, $size ); ?>
                </div>

            <?php endif; ?>

            <div class="board-of-directors-inner">

                <?php
                if( $name ) :
                ?>

                    <div class="board-of-directors__name">
                        <h2><?php echo $name; ?></h2>
                    </div>

                <?php endif; ?>

                <?php
                if( $about ) :
                ?>

                    <div class="board-of-directors__about">
                        <?php echo $about; ?>
                    </div>

                <?php endif; ?>

            </div>


            </div>

            <?php endwhile; ?>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>

        </div>
    </div>
</section>