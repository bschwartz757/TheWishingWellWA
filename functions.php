<?php

/*
Theme Name: TheWishingWellWA
Authors: 
Site URI: 
Description: This is a custom theme developed for the ITC210/WEB210 class at SCC.
Version: 1.0
*/


// Register sidebars:
register_sidebar(array(
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>'
));

// Get my title tag:
function get_my_title_tag() {

global $post;

if (is_front_page()) {
	bloginfo('description');	
}

else if (is_page() || is_single()) {
	the_title();	
}

else {
	bloginfo('description');	
}

if ($post->post_parent) {
	echo ' | ';
	echo get_the_title($post->post_parent);	
}

	echo ' | ';
	bloginfo('name'); // site name
	echo ' | ';
	echo 'Seattle, WA';	// Write the city and state 
}

// Register menus:
register_nav_menus(array(
'main-menu' => __('Main'),
));

// Enable Featured Images & Post Thumbnails:
add_theme_support('post-thumbnails');

// Add Excerpt support:
add_post_type_support('page', 'excerpt');

// Remove Inline Styles from Captions
add_shortcode('wp_caption', 'fixed_img_caption_shortcode');
add_shortcode('caption', 'fixed_img_caption_shortcode');
function fixed_img_caption_shortcode($attr, $content = null) {
	
	if ( ! isset( $attr['caption'] ) ) {
		if ( preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches ) ) {
			$content = $matches[1];
			$attr['caption'] = trim( $matches[2] );
		}
	}
	$output = apply_filters('img_caption_shortcode', '', $attr, $content);
	if ( $output != '' )
		return $output;
	extract(shortcode_atts(array(
		'id'	=> '',
		'align'	=> 'alignnone',
		'width'	=> '',
		'caption' => ''
	), $attr));
	if ( 1 > (int) $width || empty($caption) )
		return $content;
	if ( $id ) $id = 'id="' . esc_attr($id) . '" ';
	return '<div ' . $id . 'class="wp-caption ' . esc_attr($align) . '" >'
	. do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></div>';
}
//
//Create Custom Image Sizes
add_image_size('gateway-spotlight', 940, 450, array('center', 'center')); //Creates the 940x450 hard crop mode (from center)

?>