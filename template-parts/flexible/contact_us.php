<?php
/**
 * Flexible Section
 * Contact Us
 * Formidable form & Google Map
 */
?>

<?php

$info_title = get_sub_field( 'title' );
$info_phone = get_sub_field( 'phone_number' );
$info_email = get_sub_field( 'e-mail' );
$info_address = get_sub_field( 'address' );
$info_address_map = get_sub_field( 'address_google_map_url' );
$contact_form = get_sub_field( 'contact_form_shortcode' );

?>

<section class="contact-form">
    <div class="container">

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


<section class="contact-form__map">
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