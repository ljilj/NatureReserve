<?php
include_once ( get_template_directory().'/includes/calendar.class.php' );

$posts = get_posts( array(

    'post_type' => 'post',
    'post_per_page' => -1,
    'suppress_filters' => false

) );

$calendar = new Calendar( date('Y-m-d') );

if( $posts ) {
    foreach ( $posts as $post ) {
        $event_date = get_field( 'date', $post->ID );
        $calendar->add_event( get_the_title( $post->ID ) , $event_date, 1, '', $post->ID );
    }

    wp_reset_postdata();
}

?>

<section class="calendar__events">

    <img class="calendar__bg-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-calendar.svg" loading="lazy" width="705px" height="268px" alt="Event calendar background image">

    <div class="container">
        <div class="row">

            <div class="calendar__events-section-title col-lg-12">
                <h3><?php echo _e('Upcoming events', 'NatureReserve'); ?></h3>
            </div>

            <div class="calendar__event col-lg-8">
                <?php echo $calendar; ?>
            </div>

            <div class="calendar__info col-lg-4">
                <div class="calendar__event-info">
                    <p clas="info-title"><?php echo _e('Upcoming Events', 'NatureReserve') ?></p>

                    <?php
                    if( $calendar->moreInformation() ) :
                    ?>

                        <div class="calendar__event-info--wrapper">
                            <?php echo $calendar->moreInformation(); ?>
                        </div>

                    <?php
                    else :
                    ?>

                        <div class="calendar__event-info--wrapper">
                            <div class="calendar__event-info--wrap">
                                <p><?php _e('There are no events today', 'NatureReserve'); ?></p>
                            </div>
                        </div>

                    <?php endif; ?>

                </div>
            </div>

        </div>
    </div>
</section>