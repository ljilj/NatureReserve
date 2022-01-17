<?php
/**
 * Flexible Section
 * Organization Chart
 */
?>

<?php $image = get_sub_field( 'image' ); ?>

<section class="organization-chart">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

            <?php
            if ( $image ) :
            ?>

                <div class="organization-chart__image-holder">
                    <img class="organization-chart__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" loading="lazy" />
                </div>

            <?php endif; ?>

            </div>
        </div>
    </div>
</section>