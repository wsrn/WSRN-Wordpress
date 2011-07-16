<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php $title = explode('|abcd' , wp_title('|abcd',false)); if( isset( $title[1] ) ) { print $title[1]; } if( isset( $title[2] ) ) { print ' - '.$title[2]; } ?> <?php if ( !is_home() ) { ?> | <?php } ?> <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?> </title>
<meta name="generator" content="mythem.es" />
<meta name="generator" content="my-base" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script src="<?php echo get_bloginfo('template_directory') . '/resources/js/jquery.min.js'; ?>" type="text/javascript"></script>
<script src="<?php echo get_bloginfo('template_directory') . '/resources/js/menu.js'; ?>" type="text/javascript"></script>
<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="header">	
		<!-- menu section -->
		<?php get_template_part('header/menu'); ?>
		<!-- social section -->
		<?php get_template_part('header/social'); ?>
		<!-- blog info section -->
		<?php get_template_part('header/info'); ?>
	</div>