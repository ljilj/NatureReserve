<?php
/**
 * Flexible Section
 * Single Contact form
 */
?>

<?php

$info_title = get_sub_field( 'title' );
$info_phone = get_sub_field( 'phone_number' );
$info_email = get_sub_field( 'e-mail' );
$info_address = get_sub_field( 'address' );
$info_address_map = get_sub_field( 'address_google_map_url' );
$contact_form = get_sub_field( 'contact_form_shortcode' );
$background_image = get_sub_field( 'background_image' );

?>


<section class="contact-form">

    <div class="contact-form__bg-wrap">
        <img class="contact-form__bg" src="<?php echo $background_image['url']; ?>" alt="<?php echo $background_image['alt']; ?>" loading="lazy" width="auto" height="710px">
    </div>


    <div class="container">

        <div class="contact-form__section-title">
            <h3><?php echo _e('Contact Us', 'NatureReserve') ?></h3>
        </div>

        <div class="row contact-form__row">

            <div class="contact-form__form-wrap col-lg-8">

                <div class="contact-form__form">
                    <h4 class="contact-form__form--title"><?php echo _e('Contact form', 'NatureReserve') ?></h4>

                    <?php
                    if( $contact_form ) :
                    ?>

                        <?php echo do_shortcode( $contact_form ); ?>

                    <?php endif; ?>

                </div>

            </div>

            <div class="contact-form__info--wrap col-lg-4">
                <div class="contact-form__info">
                    <div class="contact-form__info-title">
                        <h4><?php echo $info_title; ?></h4>
                    </div>

                    <div class="contact-form__info-phone">
                        <p><i class="icon-phone"></i><?php echo _e('Phone number', 'NatureReserve') ?><span></span></p>
                        <a href="tel:<?php echo $info_phone; ?>"><?php echo $info_phone; ?></a>
                    </div>

                    <div class="contact-form__info-email">
                        <p><i class="icon-email"></i><?php echo _e('E-mail', 'NatureReserve') ?><span></span></p>
                        <a href="mailto:<?php echo $info_email; ?>"><?php echo $info_email; ?></a>
                    </div>

                    <div class="contact-form__info-address">
                        <p><i class="icon-location-pin"></i><?php echo _e('Address', 'NatureReserve') ?><span></span></p>
                        <a href="<?php echo $info_address_map; ?>"><?php echo $info_address; ?></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>