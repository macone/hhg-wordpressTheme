<?php

  $functions_path = TEMPLATEPATH . '/functions/';
  $includes_path = TEMPLATEPATH . '/includes/';
  //Loading jQuery and Scripts
  require_once $includes_path . 'theme-scripts.php';

  // Register Custom Navigation Walker
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
	


  function checkme_enqueue_styles() {

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css' );
    

  }
  add_action( 'wp_enqueue_scripts', 'checkme_enqueue_styles');

  wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.4.0.min.js', array( 'jquery' ),'',true );
  function checkme_enqueue_scripts() {
		wp_enqueue_script('jquery');
    wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
		wp_enqueue_script( 'bootstrap_min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
  }
  add_action( 'wp_enqueue_scripts', 'checkme_enqueue_scripts');



	
	//Widget and Sidebar
	require_once $includes_path . 'sidebar-init.php';
	require_once $includes_path . 'register-widgets.php';
	
	//Theme initialization
	require_once $includes_path . 'theme-init.php';
	
	//Additional function
	require_once $includes_path . 'theme-function.php';
	
	//Shortcodes
	require_once $includes_path . 'theme_shortcodes/shortcodes.php';
	include_once(TEMPLATEPATH . '/includes/theme_shortcodes/alert.php');
	include_once(TEMPLATEPATH . '/includes/theme_shortcodes/tabs.php');
	include_once(TEMPLATEPATH . '/includes/theme_shortcodes/toggle.php');
	include_once(TEMPLATEPATH . '/includes/theme_shortcodes/html.php');
	
	//tinyMCE includes
	include_once(TEMPLATEPATH . '/includes/theme_shortcodes/tinymce/tinymce_shortcodes.php');
	
	// removes detailed login error information for security
	add_filter('login_errors',create_function('$a', "return null;"));
	
	if ( !function_exists( 'optionsframework_init' ) ) {
	
	
	/*-----------------------------------------------------------------------------------*/
	/* Options Framework Theme
	/*-----------------------------------------------------------------------------------*/
	
	/* Set the file path based on whether the Options Framework Theme is a parent theme or child theme */
	
	if ( STYLESHEETPATH == TEMPLATEPATH ) {
		define('OPTIONS_FRAMEWORK_URL', TEMPLATEPATH . '/admin/');
		define('OPTIONS_FRAMEWORK_DIRECTORY', get_bloginfo('template_directory') . '/admin/');
	} else {
		define('OPTIONS_FRAMEWORK_URL', STYLESHEETPATH . '/admin/');
		define('OPTIONS_FRAMEWORK_DIRECTORY', get_bloginfo('stylesheet_directory') . '/admin/');
	}
	
	require_once (OPTIONS_FRAMEWORK_URL . 'options-framework.php');
	
	}
		
	// Removes Trackbacks from the comment cout
	add_filter('get_comments_number', 'comment_count', 0);
	function comment_count( $count ) {
		if ( ! is_admin() ) {
			global $id;
			$comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
			return count($comments_by_type['comment']);
		} else {
			return $count;
		}
	}
  
	
	// enable shortcodes in sidebar
	add_filter('widget_text', 'do_shortcode');
	
	// custom excerpt ellipses for 2.9+
	function custom_excerpt_more($more) {
		return 'Read More &raquo;';
	}
	add_filter('excerpt_more', 'custom_excerpt_more');
	// no more jumping for read more link
	function no_more_jumping($post) {
		return '&nbsp;<a href="'.get_permalink($post->ID).'" class="read-more">'.'Continue Reading'.'</a>';
	}
	add_filter('excerpt_more', 'no_more_jumping');
	
	
	// category id in body and post class
	function category_id_class($classes) {
		global $post;
		foreach((get_the_category($post->ID)) as $category)
			$classes [] = 'cat-' . $category->cat_ID . '-id';
			return $classes;
	}
	
	add_filter('post_class', 'category_id_class');
	add_filter('body_class', 'category_id_class');

?>
<?php
/* Disable the Admin Bar. */
 add_filter( 'show_admin_bar', '__return_false' ); ?>
<?php function yoast_hide_admin_bar_settings() {
?>
	<style type="text/css">
		.show-admin-bar {
			display: none;
		}
	</style>
<?php
}

function yoast_disable_admin_bar() {
    add_filter( 'show_admin_bar', '__return_false' );
    add_action( 'admin_print_scripts-profile.php', 
         'yoast_hide_admin_bar_settings' );
}
add_action( 'init', 'yoast_disable_admin_bar' , 9 );

add_action( 'admin_menu', 'my_theme_init_custom_fields' );

function my_theme_init_custom_fields() {
    if( function_exists( 'x_add_metadata_field' ) && function_exists( 'x_add_metadata_group' ) ) {
        x_add_metadata_field( 'my_field', array( 'user', 'post' ) );
    }
}

function custom_menu_order($menu_ord) {
       if (!$menu_ord) return true;
       return array(
        //'index.php', // this represents the dashboard link
        'edit.php?post_type=ogloszenie', // this is a custom post type menu
				'edit.php?post_type=referencje',
        'edit.php?post_type=rozwiazania',
        'edit.php?post_type=innowacje',
        'edit.php?post_type=onas',
        'edit.php?post_type=page', // this is the default page menu
        'edit.php', // this is the default POST admin menu
		'edit.php?post_type=slider',
    );
   }
   add_filter('custom_menu_order', 'custom_menu_order');
	 add_filter('menu_order', 'custom_menu_order');

	 