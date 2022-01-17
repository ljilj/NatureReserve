<?php
/**
 * Flexible Section
 * Home Reserve
 */
?>

<section class="home-reserve">
    <div class="container">
        <div class="row">

        <?php if ( have_rows( 'reserve' ) ) : ?>
            <?php while ( have_rows( 'reserve' ) ) : the_row(); ?>

                <div class="home-reserve__content col-md-6">
                    <?php $reserve_url = get_sub_field( 'reserve_url' ); ?>
                    <?php $reserve_image = get_sub_field( 'reserve_image' ); ?>

                    <a href="<?php echo $reserve_url; ?>">

                    <div class="home-reserve__image-wrap">

                        <?php
                        if ( $reserve_image ) :
                        ?>

                            <img class="home-reserve__image" src="<?php echo $reserve_image['url']; ?>" alt="<?php echo $reserve_image['alt']; ?>" width="685px" height="695px" loading="lazy" />

                        <?php endif; ?>
                    </div>

                    <?php $reserve_logo = get_sub_field( 'reserve_logo' ); ?>

                    <?php
                    if ( $reserve_logo ) :
                    ?>

                        <img class="home-reserve__logo" src="<?php echo $reserve_logo['url']; ?>" alt="<?php echo $reserve_logo['alt']; ?>" width="auto" height="170px" loading="lazy" />

                    <?php endif; ?>

                    </a>

                </div>

            <?php endwhile; ?>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>

        </div>
    </div>
</section>
