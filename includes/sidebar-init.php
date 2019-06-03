<?php
function elegance_widgets_init() {
	// 1st Home Area
	// Location: at the top of the Home Page content
	register_sidebar(array(
		'name'					=> '1st Home Area',
		'id' 						=> 'home-area-1',
		'description'   => __( 'Located at the top of the Home Page content.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h1 class="grid_4">',
		'after_title' => '</h1>',
	));
	// 2nd Home Area
	// Location: at the middle of the Home Page content
	register_sidebar(array(
		'name'					=> '2nd Home Area',
		'id' 						=> 'home-area-2',
		'description'   => __( 'Located at the middle of the Home Page content.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	// 3rd Home Area
	// Location: at the bottom of the Home Page content
	register_sidebar(array(
		'name'					=> '3rd Home Area',
		'id' 						=> 'home-area-3',
		'description'   => __( 'Located at the bottom of the Home Page content.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	// Sidebar Widget
	// Location: the sidebar
	register_sidebar(array(
		'name'					=> 'Sidebar',
		'id' 						=> 'main-sidebar',
		'description'   => __( 'Located at the right side of pages.'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	// Footer Widget
	// Location: at the top of the footer, above the copyright
	register_sidebar(array(
		'name'					=> 'Footer',
		'id' 						=> 'footer-sidebar',
		'description'   => __( 'Located at the bottom of pages.'),
		'before_widget' => '<div id="%1$s" class="grid_3">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));

}
/** Register sidebars by running elegance_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'elegance_widgets_init' );
?>