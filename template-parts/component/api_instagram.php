<?php // This is full Instagram API Page included on /flexible/media_center.php


	// include creds for api access
    include get_template_directory() . '/includes/instagramGraphApi/defines.php';

	/**
	 * Make a a curl call to an endpoint with params
	 *
	 * @param string $endpoint we are hitting
	 * @param string $type of request
	 * @param array $params to send along with the request
	 *
	 * @return array with the api response
	 */
	function makeApiCall( $endpoint, $type, $params ) {
		// initialize curl
		$ch = curl_init();

		// combine endpoint and params and set other curl options
		curl_setopt( $ch, CURLOPT_URL, $endpoint . '?' . http_build_query( $params ) );
		curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false );
		curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

		// get response
		$response = curl_exec( $ch );

		// close curl
		curl_close( $ch );

		// json decode and return response
		return json_decode( $response, true );
	}

	/**
	 * Get a page of instagram posts for a user
	 *
	 * @param string $instagramAccountId id of the instagram account
	 * @param string $accessToken access token needed to validate the request
	 * @param string $limit number of results to return
	 * @param string $cursorType specify getting the previous or next page with (before|after)
	 * @param string $cursor token for accessing the requested pages data
	 *
	 * @return array with the page of data
	 */

	// endpoint structure for getting users media -> https://graph.facebook.com/v5.0/{ig-account-id}/media
	$usersMediaEndpoint = ENDPOINT_BASE . $instagramAccountId . '/media';

	// endpoint params required
	$usersMediaParams = array(
		'fields' => 'id,caption,media_type,media_url,permalink,thumbnail_url,username',
		'limit' => 6,
		'access_token' => $accessToken
	);

	// make the api call
	$usersMedia = makeApiCall( $usersMediaEndpoint, 'GET', $usersMediaParams );
	// echo '<pre>'; print_r( $usersMedia ); echo '</pre>'; exit();
?>
			<?php
			$count = 0;

			foreach ( $usersMedia['data'] as $media ) : // loop over posts returned for the page

			$count++;

			?>
				<div class="photo-gallery__image col-lg-4 col-md-6 col-sm-6" id="dataInstagramAPI">

					<?php
					if ( 'IMAGE' == $media['media_type'] || 'CAROUSEL_ALBUM' == $media['media_type'] ) : // media is an image ?>
						<a data-featherlight="#lightbox<?php echo $count; ?>" href="#">
							<img src="<?php echo $media['media_url']; ?>" />
						</a>

						<div id="lightbox<?php echo $count; ?>" class="featherlight-hidden">
                            <img src="<?php echo $media['media_url']; ?>" />
                        </div>

					<?php else : // media is a video ?>
						<video class="video-box" controls>
							<source src="<?php echo $media['media_url']; ?>" >
						</video>
					<?php endif; ?>

					<a class="photo-gallery__instagram-link" href="<?php echo $media['permalink']; ?>" target="_blank">
						<i class="icon-instagram"></i>
					</a>

				</div>
			<?php endforeach; ?>

			<div class="load-more-button align-center col-lg-12">
				<a class="load-more__btn" data-next="<?php if(isset($usersMedia['paging']['next'])) echo $usersMedia['paging']['next']; ?>"><?php _e('Load More' , 'NatureReserve'); ?></a>
				<a class="see-more-on-instagram hidden" href="https://www.instagram.com/iardaksa/" target="_blank"><i class="icon-instagram"></i><?php echo _e('Instagram profile', 'NatureReserve') ?></a>
			</div>