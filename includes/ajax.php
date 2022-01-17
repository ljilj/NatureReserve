<?php
// Ajax requests File

add_action('wp_ajax_change_calendar_month', 'change_calendar_month');
add_action('wp_ajax_nopriv_change_calendar_month', 'change_calendar_month');
function change_calendar_month ()
{

    ( isset($_POST[ 'currentMonth' ]) && $_POST[ 'currentMonth' ] ) ? $currentMonth = wp_strip_all_tags( $_POST[ 'currentMonth' ] ) : $currentMonth = '';

    ( isset($_POST[ 'changeMonth' ]) && $_POST[ 'changeMonth' ] ) ? $changeMonth = wp_strip_all_tags( $_POST[ 'changeMonth' ] ) : $changeMonth = '';

    $monthDirection = '';

    include_once ( get_template_directory().'/includes/calendar.class.php' );

    $posts = get_posts( array(

        'post_type' => 'post',
        'post_per_page' => -1,
        'suppress_filters' => false
    ) );

    if( $changeMonth == 'backwards' ) {
        $monthDirection = '-1';
    } elseif ( $changeMonth == 'forwards' ) {
        $monthDirection = '+1';
    }

    $prevMonth = date('Y-m-d', strtotime("$monthDirection months", strtotime($currentMonth)));

    $calendar = new Calendar( $prevMonth );

    if( $posts ) {

        foreach ( $posts as $post ) {


            $event_date = get_field( 'date', $post->ID );
            $calendar->add_event( get_the_title( $post->ID ) , $event_date, 1, '', $post->ID );
        }

        wp_reset_postdata();
    }

    echo $calendar;
    die();

}

add_action('wp_ajax_events_information_change', 'events_information_change');
add_action('wp_ajax_nopriv_events_information_change', 'events_information_change');
function events_information_change () {

    ( isset($_POST[ 'postID' ]) && $_POST[ 'postID' ] ) ? $postID = wp_strip_all_tags( $_POST[ 'postID' ] ) : $postID = '';

    if( $postID ) {
        $html = '';
        $postID = explode(',', $postID);
        foreach( $postID as $id ) {
            $content_post = get_post($id);

            $html .= '<div class="calendar__event-info--wrap">';
            $html .= '<a href="' . get_the_permalink($id) .'"><h3 class="event-title">' . get_the_title($id) . '</h3></a>';
            $html .= '<p class="event-date">' . get_field( 'date', $id ) . '</p>';
            $html .= '<p class="event-content">' . wp_trim_words($content_post->post_content, 55)  . '</p>';
            $html .= '</div>';
        }
    }

    echo $html;
    die();

}