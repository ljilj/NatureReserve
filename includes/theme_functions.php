<?php

include_once('ajax.php');
include_once('TwitterAPIExchange.php');

/**
 *
 * Theme option
 *
 */
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

}

/**
 *
 * Twitter
 *
 */

 function twitterResponsive() {

      // settings for twitter api connection
	$settings = array (
		'oauth_access_token' => '954951125865762816-9v8oWxjSiaU8WwWWkYzcXQj9kK7Q9yN',
		'oauth_access_token_secret' => '2L9ive0IexA00twxCWjbx5UB5DyW51hNUgdgJKAoD2HrG',
		'consumer_key' => 'bXD9CGDxwdt5BzjdFqrhskht4',
		'consumer_secret' => '0DTyiNSXNPlKURS31T9U8t8C48PXKKPhr5pojVLa56QIRbQOym'
	);

      $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
      $requestMethod = 'GET';
      $getfield = '?screen_name=IARDAKSA&count=9';

      $twitter = new TwitterAPIExchange( $settings );
	$twitter->setGetfield( $getfield );
	$twitter->buildOauth( $url, $requestMethod );
	$response = $twitter->performRequest( true, array( CURLOPT_SSL_VERIFYHOST => 0, CURLOPT_SSL_VERIFYPEER => 0 ) );
	$tweets = json_decode( $response, true );

      $limit = 0;

      foreach ( $tweets as $tweet ) : ?>

            <div class="tweet col-lg-4 col-md-6 col-sm-6">
                  <div class="tweet__wrap">
                        <div class="tweet__header">

                              <div class="tweet__image">
                                    <a class="tweet__header-link" href="https://twitter.com/<?php echo $tweet['user']['screen_name']; ?>" target="_blank">
                                          <img src="<?php echo $tweet['user']['profile_image_url']; ?>" />
                                    </a>
                              </div>

                              <div class="tweet__author">
                                    <a class="tweet__author-link" href="https://twitter.com/<?php echo $tweet['user']['screen_name']; ?>" target="_blank">

                                          <div class="tweet__author-name">
                                                <p><?php echo $tweet['user']['name']; ?></p>
                                          </div>

                                          <div class="tweet__author-screen-name">
                                                <p>@<?php echo $tweet['user']['screen_name']; ?></p>
                                          </div>

                                    </a>
                              </div>

                              <div class="tweet__logo">
                                    <a class="tweet__header-link" href="https://twitter.com/<?php echo $tweet['user']['screen_name'];?>/status/<?php echo $tweet['id'] ?>" target="_blank">
                                          <i class="icon-twitter"></i>
                                    </a>
                              </div>

                        </div>

                        <div class="tweet__content">
                              <?php

                              $text = preg_replace('/http:\/\/t.co\/([a-zA-Z0-9]+)/i', '<a class="read-tweet" target="_blank" href="http://t.co/$1">http://$1</a>', $tweet['text']);
                              $text = preg_replace('/https:\/\/t.co\/([a-zA-Z0-9]+)/i', '<a class="read-tweet" target="_blank" href="https://t.co/$1">http://$1</a>', $tweet['text']);

                              ?>

                              <p class="tweet__content--text"><?php echo $text; ?></p>

                        </div>


                        <div class="tweet__date">

                        <?php

                        $dateandtime = new DateTime( $tweet['created_at'] );
                        $tweet_date = $dateandtime->format("d.m.Y.");
                        $tweet_time = $dateandtime->format("H:i");

                        ?>

                        <p><?php echo $tweet_time . ' · '; echo $tweet_date; ?>

                        </div>

                        <div class="tweet__read">
                              <a href="https://twitter.com/<?php echo $tweet['user']['screen_name'];?>/status/<?php echo $tweet['id'] ?>" target="_blank"><?php echo _e('Read Tweet', 'NatureReserve'); ?></a>
                        </div>

                  </div>
            </div>

            <?php

            $limit++;
            if( $limit >= 9 ) {
                  break;
            }
            ?>

      <?php endforeach;

      // echo '<pre>';
      // print_r ( json_decode( $response, true ));
 }

/**
 *
 * WMPL
 *
 */
 function mobile_languages_list() {

      $languages = apply_filters( 'wpml_active_languages', NULL, 'skip_missing=0&orderby=code' );

      if( !empty( $languages ) ) {

             echo '<div class="mobile_language_list"><ul>';

            foreach( $languages as $l ) {

                  if(!$l['active']) {

                        echo '<li class="switch-lang">';
                        if( $l['country_flag_url'] ) {
                              if( !$l['active'] ) echo '<a href="'.$l['url'].'">';
                              echo '<img src="'.$l['country_flag_url'].'" height="12" alt="'.$l['language_code'].'" width="18" />';
                        }
                        echo apply_filters( 'wpml_display_language_names', NULL, $l['native_name'] );
                        echo '</a>';
                        echo '</li>';

                  } else {
                  // Don't show current language
                  }

            }

            echo '</ul></div>';

      }

  }

/**
 *
 * Expire recruitment posts
 *
 */

add_action('pre_get_posts', 'expire_posts_function');

function expire_posts_function($query) {

      if ( ! is_admin() && $query->is_main_query() && is_post_type_archive('recruitment')) {

            $meta_query = array(
                  'meta_query' => array(
                        array(
                            'key'     => 'expiring_date',
                            'value'   => date('Ymd'),
                            'compare' => '>=',
                            'type'    => 'date'
                        ),
                  )
            );

            $query->set('meta_query',$meta_query);

      }

}