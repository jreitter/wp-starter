<?php
// Setup Theme
function jr_setup() {
    load_theme_textdomain( 'jr' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus(
		array(
			'mobile'    	=> __( 'Mobilemenü', 'jr' ),
			'main' => __( 'Hauptmenü', 'jr' ),
			'footer'  	=> __( 'Footermenü', 'jr' ),
		)
    );
    
    add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
			'navigation-widgets',
		)
	);
    
    add_theme_support(
		'post-formats',
		array(
			'link',
			'aside',
			'gallery',
			'image',
			'quote',
			'status',
			'video',
			'audio',
			'chat',
		)
	);
	    
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'jr_setup' );

// Enqueue Scripts & Styles
function jr_scripts() {
	// Main Stylesheet
  	wp_register_style( 'theme', get_stylesheet_uri() );
	wp_enqueue_style( 'theme' );
	
	// Move jQuery to the Footer
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
	wp_enqueue_script( 'jquery' );  

	// Main Javascript File
  	wp_register_script( 'main', get_template_directory_uri() . '/inc/js/main.js', NULL, 'jquery', true );
	wp_enqueue_script( 'main' );  
}
add_action( 'wp_enqueue_scripts', 'jr_scripts' );