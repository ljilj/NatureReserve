<?php

	define( 'FACEBOOK_APP_ID', '1509700726081962' );
	define( 'FACEBOOK_APP_SECRET', 'eeaee3073cd9950e283e1df7db8e1464' );
	define( 'FACEBOOK_REDIRECT_URI', get_template_directory_uri() . '/includes/instagramGraphApi/obtaining_access_token.php' );
	define( 'ENDPOINT_BASE', 'https://graph.facebook.com/v5.0/' );

	// accessToken
	$accessToken = get_field( 'access_token', 'option' );

	// // page id
	$pageId = '102737888742787';

	// // instagram business account id
	$instagramAccountId = '17841448773671626';