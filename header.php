<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="keywords" content="Usługi rekrutacyjne, rekrutacja pracowników, Headhunters Group, executive search, ogłoszenia rekrutacyjne, oferty pracy"/>
	<title><?php if (is_category()) {
    echo 'Category Archive for &quot;';
    single_cat_title();
    echo '&quot; | ';
    bloginfo('name');
} elseif (is_tag()) {
    echo 'Tag Archive for &quot;';
    single_tag_title();
    echo '&quot; | ';
    bloginfo('name');
} elseif (is_archive()) {
    wp_title('');
    echo ' Archive | ';
    bloginfo('name');
} elseif (is_search()) {
    echo 'Search for &quot;'.wp_specialchars($s).'&quot; | ';
    bloginfo('name');
} elseif (is_home() || is_front_page()) {
    bloginfo('name');
} elseif (is_404()) {
    echo 'Error 404 Not Found | ';
    bloginfo('name');
} elseif (is_single()) {
    wp_title('');
    echo ' - HEADHUNTERS GROUP';
} else {
    echo wp_title(' - ', false, right).'HEADHUNTERS GROUP';
} ?></title>
	<meta name="description" content="<?php wp_title(); echo ' | '; bloginfo('description'); ?>" />
	<meta charset="<?php bloginfo('charset'); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<!-- The HTML5 Shim is required for older browsers, mainly older versions IE -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
  <!--[if lt IE 7]>
    <div style=' clear: both; text-align:center; position: relative;'>
    	<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
    </div>
  <![endif]-->
	<!-- <link rel="stylesheet" type="text/css" media="all" title="polski" href="<?php bloginfo('stylesheet_url'); ?>" /> -->
	<link rel="alternate stylesheet" type="text/css" media="all" title="angielski" href="<?php bloginfo('template_url'); ?>/style_angielski.css" />
	<?php
        /* We add some JavaScript to pages with the comment form
         * to support sites with threaded comments (when in use).
         */
        if (is_singular() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
        /* Always have wp_head() just before the closing </head>
         * tag of your theme, or you will break many plugins, which
         * generally use this hook to add elements to <head> such
         * as styles, scripts, and meta tags.
         */
        wp_head();
    ?>
 <link rel="icon" href="<?php bloginfo('template_url'); ?>/images/hhgfav.gif" type="image/gif" />
 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/styleswitcher.js"></script>
  <script type="text/javascript">

			// prettyphoto init
			jQuery("a[rel^='prettyPhoto']").prettyPhoto({
				animation_speed:'normal',
				slideshow:5000,
				autoplay_slideshow: false
			});
	

  </script>

  <script type="text/javascript">
  $(function () {
    var counter = 0,
        divs = $('#oglhome0, #oglhome1, #oglhome2, #oglhome3, #oglhome4, #oglhome5, #oglhome6');
    function showDiv () {
        divs.hide() // hide all divs
            .filter(function (index) { return index == counter % 7; }) // figure out correct div to show
            .show('slow'); // and show it
        counter++;
    }; // function to loop through divs and show correct div
    showDiv(); // show first div    
    setInterval(function () {
        showDiv(); // show next div
    }, 10 * 1000); // do this every 10 seconds    
});
  </script>
  <!-- Custom CSS -->
	<?php if (of_get_option('custom_css') != '') {
        ?>
  <style type="text/css">
  	<?php echo of_get_option('custom_css') ?>
  </style>
  <?php
    }?>
  <style type="text/css">
		/* Body styling options */
		<?php $background = of_get_option('body_background');
            if ($background != '') {
                if ($background['image'] != '') {
                    echo 'body { background-image:url('.$background['image']. '); background-repeat:'.$background['repeat'].'; background-position:'.$background['position'].';  background-attachment:'.$background['attachment'].'; }';
                }
                if ($background['color'] != '') {
                    echo 'body { background-color:'.$background['color']. '}';
                }
            };
        ?>
  	/* Header styling options */
		<?php $header_styling = of_get_option('header_color');
            if ($header_styling != '') {
                echo '#header {background-color:'.$header_styling.'}';
            }
        ?>
		/* Links and buttons color */
		<?php $links_styling = of_get_option('links_color');
            if ($links_styling) {
                echo 'a{color:'.$links_styling.'}';
                echo '.button {background:'.$links_styling.'}';
            }
        ?>
		/* Body typography */
		<?php $body_typography = of_get_option('body_typography');
            if ($body_typography) {
                echo 'body {font-family:'.$body_typography['face'].'; color:'.$body_typography['color'].'}';

                echo '#main {font-size:'.$body_typography['size'].'; font-style:'.$body_typography['style'].';}';
            }
        ?>
  </style>

</head>
<body <?php body_class(); ?>>
<?php if (is_front_page()) {
            ?>
<div id="main"><!-- this encompasses the entire Web site -->
	<header id="header">

				<div class="container logo-cont">
				<div class="row" style="width:100%">
					<nav class="navbar navbar-brand navbar-expand-lg dark navbar-light" >
						<a href="<?php bloginfo('url'); ?>/" id="logo"><img src="<?php bloginfo('template_url'); ?>/images/logo_main.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>"></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNav">
					<?php 
							wp_nav_menu( array(
								'menu' => 'top_menu',
								'depth' => 2,
								'container' => false,
								'menu_class' => 'nav navbar-nav ml-auto',

								'walker' => new wp_bootstrap_navwalker())
							);
						?>
						
						<div class="polski">		 
							<a href="#" onclick="setActiveStyleSheet('angielski'); return false;"><img src="<?php bloginfo('template_url'); ?>/images/flag_en.png" alt="" style="float: right" title="English version" /></a></div>
						<div class="angielski">
							<a href="#" onclick="setActiveStyleSheet('polski'); return false;"><img src="<?php bloginfo('template_url'); ?>/images/flag_pl.png" alt="" style="float: right" title="Wersja polska" /></a>
						</div>
						</div>
					</nav>
				</div>
			</div>
    
	</header>
	<section id="slider-wrapper">
				<?php include_once(TEMPLATEPATH . '/slider2.php'); ?>
  	</section><!--#slider-->
	<?php
        } else {
            ?>
<div id="main"><!-- this encompasses the entire Web site -->
	<header id="header">

				<div class="container logo-cont">
				<div class="row" style="width:100%">
					<nav class="navbar navbar-brand navbar-expand-lg dark navbar-light" >
						<a href="<?php bloginfo('url'); ?>/" id="logo"><img src="<?php bloginfo('template_url'); ?>/images/logo_main.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>"></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNav">
					<?php 
							wp_nav_menu( array(
								'menu' => 'top_menu',
								'depth' => 2,
								'container' => false,
								'menu_class' => 'nav navbar-nav ml-auto',

								'walker' => new wp_bootstrap_navwalker())
							);
						?>
						
						<div class="polski">		 
							<a href="#" onclick="setActiveStyleSheet('angielski'); return false;"><img src="<?php bloginfo('template_url'); ?>/images/flag_en.png" alt="" style="float: right" title="English version" /></a></div>
						<div class="angielski">
							<a href="#" onclick="setActiveStyleSheet('polski'); return false;"><img src="<?php bloginfo('template_url'); ?>/images/flag_pl.png" alt="" style="float: right" title="Wersja polska" /></a>
						</div>
						</div>
					</nav>
				</div>
			</div>
    
	</header>
	<?php
        } ?>