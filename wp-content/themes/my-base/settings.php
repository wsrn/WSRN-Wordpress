<?php
	// lib settings
		// template - menu
		define('_HOME_LABEL_','Home');
		define('_LIMIT_',6);

		// template - sidebar
		define('_TEMPLATE_', 'blue-sidebar');
	
	// wp settings
	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails');
	add_editor_style('editor-style.css');
	
	define('HEADER_TEXTCOLOR', '');
	define('HEADER_IMAGE', get_bloginfo('stylesheet_directory') . '/resources/images/bkg-body.png');
	define('HEADER_IMAGE_WIDTH', 950); 
	define('HEADER_IMAGE_HEIGHT', 104);
	define('NO_HEADER_TEXT', false );
	
	// gets included in the site header
	function header_style() {
		print '<style type="text/css">';
		print 'div#header {';
		print "background-image: url('"; header_image(); print "');";
		print '}';
		if( strlen(HEADER_TEXTCOLOR)> 0){
			print 'div#header div#blog-info .title-blog a { color:#' . HEADER_TEXTCOLOR . '; }';
			print 'div#header div#blog-info .description-blog { color:#' . HEADER_TEXTCOLOR . '; }';
		}
		print '</style>';
	}
	
	function admin_header_style() {
		print '<style type="text/css">';
        print '#headimg {';
        print 'width:' . HEADER_IMAGE_WIDTH . 'px;';
        print 'height:' . HEADER_IMAGE_HEIGHT . 'px;';
        print '}';
		print '#headimg h1{ position:absolute; width:500px; margin:20px 0px 0px 400px; text-align:right;  border:none; font:normal 28px "Trebuchet MS",verdana,sans-serif,tahoma; }';
		print '#headimg a { text-decoration:none; }';
		print '#headimg #desc { position:absolute; width:500px; margin:55px 0px 0px 400px;  padding:0px; text-align:right; font:normal 14px "Trebuchet MS",Tahoma,sans-serif,Verdana,arial; border:none; }';
		print '</style>';
	}
	
	add_custom_image_header('header_style', 'admin_header_style');
	add_custom_background();
?>