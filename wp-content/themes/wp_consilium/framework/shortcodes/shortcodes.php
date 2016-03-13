<?php
$wooshops = array(
		'shopcarousel'
);
$elements = array(
		'accordions',
		'alert',
		'buttons',
		'buttongroup',
		'columns',
		'counter',
		'coverbox',
		'dropcap',
		'dropdown',
		'fancybox',
		'interactivebanner',
		'fullbox',
		'gallery',
		'googlemapv3',
		'greyscale',
		'highlight',
		'icon',
		'iconhead',
		'panel',
		'piechart',
		'popover',
		'portfolio',
		'portfoliocarousel',
		'postcarousel',
		'recentpost',
		'pricing',
		'image',
		'labels',
		'lists',
		'progressbar',
		'servicebox',
		'slider',
		'tables',
		'tabs',
		'thumbnail',
		'tooltip',
		'video',
		'team',
		'testimonial',
		'client',
		'twitter',
		'logo',
		'menu',
		'custombtn',
);
/*
 * Base
 */
remove_shortcode('gallery');
include 'base/gallery.php';
/*
 * Elements
 */
foreach ($elements as $element) {
	include($element .'/'. $element.'.php');
}
/*
 * Woocommerce
 */
if(class_exists('Woocommerce')){
	foreach ($wooshops as $wooshop) {
		include($wooshop .'/'. $wooshop.'.php');
	}
}
/*
 * Events Manager
 */
if(class_exists('EM_MS_Globals')){
    include 'eventscarousel/eventscarousel.php';
}