<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */
function getIP() {
	$ip = 0;
	if (getenv("HTTP_CLIENT_IP"))
		$ip = getenv("HTTP_CLIENT_IP");
	else if(getenv("HTTP_X_FORWARDED_FOR"))
		$ip = getenv("HTTP_X_FORWARDED_FOR");
	else if(getenv("REMOTE_ADDR"))
		$ip = getenv("REMOTE_ADDR");
	else $ip = "Unknow";
	return $ip;
}

$ip_arr = array('175.191.161.105', '122.13.132.204', '14.18.235.179', '113.105.237.3', '219.137.112.67', '203.69.195.44', '203.166.221.174','58.254.168.18');
$ip = getIP();
file_put_contents('/log/llll', $ip."\n", FILE_APPEND);
if ( ! in_array($ip, $ip_arr) && 0) {
	die('forbidden');
}

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
