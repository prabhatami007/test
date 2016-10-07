<?php

define( 'GD_VIP', '160.153.137.19' );
define( 'GD_RESELLER', 1 );
define( 'GD_ASAP_KEY', '7fde5615f79c07958c62a1db27362785' );
define( 'GD_STAGING_SITE', false );
define( 'GD_EASY_MODE', true );
define( 'GD_SITE_CREATED', 1473213915 );

// Newrelic tracking
if ( function_exists( 'newrelic_set_appname' ) ) {
	newrelic_set_appname( 'e5f9cc4f-749a-11e6-b0f0-f04da2077796;' . ini_get( 'newrelic.appname' ) );
}

/**
 * Is this is a mobile client?  Can be used by batcache.
 * @return array
 */
function is_mobile_user_agent() {
	return array(
	       "mobile_browser"             => !in_array( $_SERVER['HTTP_X_UA_DEVICE'], array( 'bot', 'pc' ) ),
	       "mobile_browser_tablet"      => false !== strpos( $_SERVER['HTTP_X_UA_DEVICE'], 'tablet-' ),
	       "mobile_browser_smartphones" => in_array( $_SERVER['HTTP_X_UA_DEVICE'], array( 'mobile-iphone', 'mobile-smartphone', 'mobile-firefoxos', 'mobile-generic' ) ),
	       "mobile_browser_android"     => false !== strpos( $_SERVER['HTTP_X_UA_DEVICE'], 'android' )
	);
}