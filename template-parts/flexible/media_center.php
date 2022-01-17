<?php
/**
 * Flexible Section
 * Instagram API, Twitter API
 */
?>

<section class="media-center">
    <div class="container">
        <div class="row">

            <div class="media-center__nav col-lg-12">
                <h3><?php echo _e('Media Center', 'NatureReserve') ?></h3>
                <ul class="media-center__nav--tabs">
                    <li><a class="media-center__nav--tab-gallery" href="#photo-gallery"><i class="icon-media-gallery"> </i><?php echo _e('Photo Gallery', 'NatureReserve') ?></a></li>
                    <li><a class="media-center__nav--tab-twitter" href="#twitter-news"><i class="icon-twitter"> </i><?php echo _e('Twitter News', 'NatureReserve') ?></a></li>
                </ul>
            </div>

        </div>

        <div class="row tabs-content__row">

        <div class="tab-content photo-gallery" id="photo-gallery">

            <?php

            get_template_part( 'template-parts/component/api_instagram' );

            ?>

            </div>

            <div class="tab-content twitter-news container" id="twitter-news">

                <div class="row">
                    <?php twitterResponsive(); ?>
                </div>
                <div class="row">
                    <a class="see-more-on-twitter" href="https://twitter.com/IARDAKSA" target="_blank"><i class="icon-Twitter-01"></i><?php echo _e('Twitter profile', 'NatureReserve') ?></a>
                </div>

            </div>
        </div>

    </div>
</section>
