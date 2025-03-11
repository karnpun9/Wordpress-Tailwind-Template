<?php 

function wp_theme_setup() {
	/**
	 * Load translation identity
	 * add default WordPress support for title, feed and enable post thumbnail in post/page.
	 */
	load_theme_textdomain( 'wp-theme-prototype' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
    add_theme_support('menus');
    add_theme_support('custom-logo');


	/**
	 * un comment these lines if you want to register your own image size
	 * it's effect when uploading new image.
	 */
	// add_image_size( 'product', 400, 400, array('center', 'center') );

	/**
	 * Register menu 
	 * It will show up in Appearance > Menus
	 */
	register_nav_menus( array(
	 	'top'    => __( 'Primary', 'wp-theme-prototype' ),
	 	// 'about' => __( 'About', 'wp-theme-prototype' ),
	 	// 'story' => __( 'Story', 'wp-theme-prototype' ),
	 	// 'sitemap' => __( 'Sitemap', 'wp-theme-prototype' ),
	 	'footer' => __( 'Footer', 'wp-theme-prototype' ),
	 	'mobile_menu' => __( 'Mobile', 'wp-theme-prototype' ),
	));
	
	/**
	 * Enable html5 power for comment, gallery and caption element.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
}
add_action( 'after_setup_theme', 'wp_theme_setup' );

function wp_theme_register_script() {
	/**
	 * Enqueue stylesheet 
	 */
	wp_enqueue_style('tailwind', get_theme_file_uri('/style.css'), array(), '1.0.0');
	wp_enqueue_style('wp-style', get_stylesheet_uri(), array(), '1.0.0');
	
	/**
	 * Register js script file(js/client.js) 
	 * dependency on jQuery, and place this before close body tag
	 */

	wp_register_script('custom', get_theme_file_uri('/js/custom.js'), array('jquery'), '1.0.0', true);
    wp_enqueue_script('custom');

	
}
add_action('wp_enqueue_scripts', 'wp_theme_register_script');






?>