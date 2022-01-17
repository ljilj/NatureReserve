<?php
/**
 * Flexible Section
 * Our Locations
 */
?>

<section class="our-locations">

    <img class="our-locations__bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-our-location.svg" alt="Our location background" loading="lazy" width="auto" height="862px">

    <div class="container">
        <div class="our-locations__section-title">
            <h3><?php echo _e('Our Locations', 'NatureReserve'); ?></h3>
        </div>
        <div class="row">

        <?php while ( have_rows( 'location_info_kk' ) ) : the_row(); ?>

            <?php

            $kk_logo = get_sub_field( 'logo_kk' );
            $kk_title = get_sub_field( 'title_kk' );
            $kk_address = get_sub_field( 'address_kk' );

            ?>


            <div class="our-locations__wrap col-lg-4">
                <div class="our-locations__kk">

                    <div class="our-locations__info">

                    <?php
                    if( $kk_title ) :
                    ?>

                        <p class="our-locations__info--office"><?php echo $kk_title; ?></p>

                    <?php endif; ?>

                    <?php
                    if( $kk_address ) :
                    ?>

                        <p class="our-locations__info--location"><i class="icon-location-pin"></i><?php echo _e('Address', 'NatureReserve'); ?></p>
                        <p class="our-locations__info--address"><?php echo $kk_address; ?></p>

                    <?php endif; ?>

                    </div>

                    <?php if ( $kk_logo ) :
                    ?>

                        <img src="<?php echo $kk_logo['url']; ?>" alt="<?php echo $kk_logo['alt']; ?>" width="32px" height="32px" loading="lazy" />

                    <?php endif; ?>

                </div>
            </div>

        <?php endwhile; ?>

        <?php while ( have_rows( 'location_info_iabm' ) ) : the_row(); ?>

            <?php
            $iabm_logo = get_sub_field( 'logo_iabm' );
            $iabm_title = get_sub_field( 'title_iabm' );
            $iabm_address = get_sub_field( 'address_iabm' );
            ?>

            <div class="our-locations__wrap col-lg-4">
                <div class="our-locations__iabm">

                    <div class="our-locations__info">

                    <?php
                    if( $iabm_title ) :
                    ?>

                        <p class="our-locations__info--office"><?php echo $iabm_title; ?></p>

                    <?php endif; ?>

                    <?php
                    if( $iabm_address ) :
                    ?>

                        <p class="our-locations__info--location"><i class="icon-location-pin"></i><?php echo _e('Address', 'NatureReserve'); ?></p>
                        <p class="our-locations__info--address"><?php echo $iabm_address; ?></p>

                    <?php endif; ?>

                    </div>

                    <?php if ( $iabm_logo ) :
                    ?>

                        <img src="<?php echo $iabm_logo['url']; ?>" alt="<?php echo $iabm_logo['alt']; ?>" width="32px" height="32px" loading="lazy" />

                    <?php endif; ?>

                </div>
            </div>

        <?php endwhile; ?>

        <?php while ( have_rows( 'location_info_office' ) ) : the_row(); ?>

            <?php
            $office_logo = get_sub_field( 'logo_office' );
            $office_title = get_sub_field( 'title_office' );
            $office_address = get_sub_field( 'address_office' );
            ?>

            <div class="our-locations__wrap col-lg-4">
                <div class="our-locations__office">

                    <div class="our-locations__info">

                    <?php
                    if( $office_title ) :
                    ?>

                        <p class="our-locations__info--office"><?php echo $office_title; ?></p>

                    <?php endif; ?>

                    <?php
                    if( $office_address ) :
                    ?>

                        <p class="our-locations__info--location"><i class="icon-location-pin"></i><?php echo _e('Address', 'NatureReserve'); ?></p>
                        <p class="our-locations__info--address"><?php echo $office_address; ?></p>

                    <?php endif; ?>

                    </div>

                    <?php if ( $office_logo ) :
                    ?>

                        <img src="<?php echo $office_logo['url']; ?>" alt="<?php echo $office_logo['alt']; ?>" width="32px" height="32px" loading="lazy" />

                    <?php endif; ?>

                </div>
            </div>

        <?php endwhile; ?>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="google-map col-lg-12">

                <div class="google-map__image">
                    <a href="https://www.google.com/maps/place/Riyadh+Saudi+Arabia/@25.8646141,45.3158587,6.5z/data=!4m13!1m7!3m6!1s0x15e7b33fe7952a41:0x5960504bc21ab69b!2sSaudi+Arabia!3b1!8m2!3d23.885942!4d45.079162!3m4!1s0x3e2f03890d489399:0xba974d1c98e79fd5!8m2!3d24.7119054!4d46.675415" target="_blank">
                        <span class="about-authority__map-pin" id="pin-1"></span>
                    </a>

                    <a href="https://www.google.com/maps/place/Riyadh+Saudi+Arabia/@25.8646141,45.3158587,6.5z/data=!4m13!1m7!3m6!1s0x15e7b33fe7952a41:0x5960504bc21ab69b!2sSaudi+Arabia!3b1!8m2!3d23.885942!4d45.079162!3m4!1s0x3e2f03890d489399:0xba974d1c98e79fd5!8m2!3d24.7119054!4d46.675415" target="_blank">
                        <span class="about-authority__map-pin" id="pin-2"></span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
