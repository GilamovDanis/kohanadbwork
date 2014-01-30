<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'finalize' => TRUE,
	'preload'  => FALSE,
	'settings' => array(
		/**
		 * Use the application cache for HTML Purifier
		 */
		// 'Cache.SerializerPath' => APPPATH.'cache',
		'HTML.SafeIframe' => true,
		'URI.SafeIframeRegexp' => '%^http://(www.youtube(?:-nocookie)?.com/embed/|player.vimeo.com/video/)%', //allow YouTube and Vimeo
		'HTML.Trusted' => true
	),
);
