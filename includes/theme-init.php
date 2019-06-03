<?php

add_action( 'after_setup_theme', 'my_setup' );

if ( ! function_exists( 'my_setup' ) ):

function my_setup() {

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// This theme uses post thumbnails
	if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 219, 152, true ); // Normal post thumbnail
		add_image_size( 'medium-post-thumbnail', 220, 161, true ); // Medium post thumbnail
		add_image_size( 'post-thumbnail-xl', 620, 300, true ); // Extra Large post thumbnail
		add_image_size( 'slider-post-thumbnail', 1680, 543, true ); // Slider thumbnail
		add_image_size( 'portfolio-post-thumbnail', 299, 159, true ); // Portfolio thumbnail
		add_image_size( 'portfolio-post-thumbnail-small', 219, 242, true ); // Portfolio Small thumbnail
		add_image_size( 'portfolio-post-thumbnail-large', 459, 240, true ); // Portfolio Large thumbnail
		add_image_size( 'portfolio-post-thumbnail-xl', 600, 300, true ); // Portfolio Extra Large thumbnail
		add_image_size( 'team-post-thumbnail', 219, 155, true ); // Team thumbnail
		add_image_size( 'support-post-thumbnail', 219, 160, true ); // Support thumbnail
	}

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// custom menu support
	add_theme_support( 'menus' );
	if ( function_exists( 'register_nav_menus' ) ) {
	  	register_nav_menus(
	  		array(
					'header_menu' => 'Header Menu',
					'skMenu' => 'Strefa Klienta',
					'kandydat' => 'Strefa Kandydata',
					'praca' => 'Oferty Pracy'
	  		)
	  	);
	}
}
endif;


/* Slider */
function my_post_type_slider() {
	register_post_type( 'slider',
                array( 
				'label' => __('Slides'), 
				'singular_label' => __('Slide', 'theme1407'),
				'_builtin' => false,
				'exclude_from_search' => true, // Exclude from Search Results
				'capability_type' => 'page',
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => false,
				'rewrite' => array(
					'slug' => 'slide-view',
					'with_front' => FALSE,
				),
				'query_var' => "slide", // This goes to the WP_Query schema
				'menu_icon' => get_template_directory_uri() . '/includes/images/icon_slides.png',
				'supports' => array(
						'title',
						'custom-fields',
						'editor',
            'thumbnail')
					) 
				);
}

add_action('init', 'my_post_type_slider');



/* Portfolio */
function my_post_type_portfolio() {
	register_post_type( 'portfolio',
                array( 
				'label' => __('Portfolio'), 
				'singular_label' => __('Porfolio Item', 'theme1407'),
				'_builtin' => false,
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => true,
				'hierarchical' => true,
				'capability_type' => 'page',
				'menu_icon' => get_template_directory_uri() . '/includes/images/icon_portfolio.png',
				'rewrite' => array(
					'slug' => 'portfolio-view',
					'with_front' => FALSE,
				),
				'supports' => array(
						'title',
						'editor',
						'thumbnail',
						'excerpt',
						'custom-fields',
						'comments')
					) 
				);
	register_taxonomy('portfolio_category', 'portfolio', array('hierarchical' => true, 'label' => 'Portfolio Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));
}

add_action('init', 'my_post_type_portfolio');



/* Our Team */
function my_post_type_team() {
	register_post_type( 'team',
                array( 
				'label' => __('Our Team'), 
				'singular_label' => __('Person', 'theme1407'),
				'_builtin' => false,
				'exclude_from_search' => true, // Exclude from Search Results
				'capability_type' => 'page',
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => false,
				'menu_position' => 5,
				'rewrite' => array(
					'slug' => 'team-view',
					'with_front' => FALSE,
				),
				'supports' => array(
						'title',
						'custom-fields',
						'editor',
						'excerpt',
            'thumbnail')
					) 
				);
}

add_action('init', 'my_post_type_team');


/* History */
function my_post_type_history() {
	register_post_type( 'history',
                array( 
				'label' => __('History'), 
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => false,
				'menu_position' => 5,
				'rewrite' => array(
					'slug' => 'history-view',
					'with_front' => FALSE,
				),
				'supports' => array(
						'title',
						'custom-fields',
						'editor')
					) 
				);
}

add_action('init', 'my_post_type_history');


/* Services */
function my_post_type_services() {
	register_post_type( 'services',
                array( 
				'label' => __('Services'), 
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => false,
				'menu_position' => 5,
				'rewrite' => array(
					'slug' => 'services-view',
					'with_front' => FALSE,
				),
				'supports' => array(
						'title',
						'thumbnail',
						'editor')
					) 
				);
}

add_action('init', 'my_post_type_services');


/* Partners */
function my_post_type_partners() {
	register_post_type( 'partners',
                array( 
				'label' => __('Partners'), 
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => false,
				'menu_position' => 5,
				'rewrite' => array(
					'slug' => 'partners-view',
					'with_front' => FALSE,
				),
				'supports' => array(
						'title',
						'thumbnail',
						'custom-fields', 
						'editor')
					) 
				);
}

add_action('init', 'my_post_type_partners');



?>