<?php
/**
 * Loads up all the widgets defined by this theme. Note that this function will not work for versions of WordPress 2.7 or lower
 *
 */


include_once (TEMPLATEPATH . '/includes/widgets/my-recent-posts.php');
include_once (TEMPLATEPATH . '/includes/widgets/my-social-widget.php');
include_once (TEMPLATEPATH . '/includes/widgets/my-twitter-widget.php');
include_once (TEMPLATEPATH . '/includes/widgets/my-flickr-widget.php');
include_once (TEMPLATEPATH . '/includes/widgets/my-banners-widget.php');
add_action("widgets_init", "load_my_widgets");

function load_my_widgets() {
	register_widget("MY_PostWidget");
	register_widget("My_SocialNetworksWidget");
	register_widget("MY_TwitterWidget");
	register_widget("MY_FlickrWidget");
	register_widget("MY_BannersWidget");
}
?>