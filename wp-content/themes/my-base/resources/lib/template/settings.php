<?php
	include 'menu/settings.php';
	include 'sidebar/settings.php';
	include 'social/settings.php';
	
	// Template Page
	options::$menu[] = array( ' my theme | Template Options' , ' My Theme Options' , 'administrator' , 'my_template' , 'my_template_og');
	options::$menu[] = array( ' my theme | Social Networks Options' , '&nbsp;&nbsp;&raquo;social' , 'administrator' , 'my_social' , 'my_social_og');
	
	
	function my_template_og(){
		include 'ui/template.php';
	}
	
	function my_social_og(){
		include 'ui/social.php';
	}
	
	// template functions
	function get_my_template(){
		if(get_option('fs_template')){
			$value = get_option('fs_template');
		}else{
			$value = _TEMPLATE_;
		}
		
		return $value;
	}
	
	function my_template() {
		do_action('my_template');
	}

	// actions
	add_action('my_template' , 'get_my_template');
	add_action('my_template' , 'get_menu_limit');
	add_action('my_template' , 'get_home_label');
	
	
	function get_my_sidabars( $template ){
		$template = str_replace( '-sidebar' , '' , $template );
		
		$sidebars = explode( '.' , $template );
		
		return $sidebars;
	}
	
	function content_class( $class = null ){
	
			$sb = new sidebars();
			$sidebars = get_my_sidabars( get_my_template() );
			
			if( $class ){
				$result = $sb -> getClassContent( $sidebars )." ".$class;
			}else{
				$result = $sb -> getClassContent( $sidebars );
			}
			
			print $result;
	}
	
	function sidebar_left_class( $class = null ){
	
			$sb = new sidebars();
			$sidebars = get_my_sidabars( get_my_template() );
			
			if( $class ){
				$result = $sb -> getClassLeftSide( $sidebars )." ".$class;
			}else{
				$result = $sb -> getClassLeftSide( $sidebars );
			}
			
			print $result;
	}
	
	function sidebar_right_class( $class = null ){
	
			$sb = new sidebars();
			$sidebars = get_my_sidabars( get_my_template() );
			
			if( $class ){
				$result = $sb -> getClassRightSide( $sidebars )." ".$class;
			}else{
				$result = $sb -> getClassRightSide( $sidebars );
			}
			
			print $result;
	}
	
	//social functions
	function get_my_twitter(){
		if( strlen( get_option( 'fs_twitter' ) ) > 0 ){
			$result = get_option( 'fs_twitter' );
		}else{
			$result = '';
		}
		
		return $result;
	}
	
	function get_my_facebook(){
		if( strlen( get_option( 'fs_facebook' ) ) > 0 ){
			$result = get_option( 'fs_facebook' );
		}else{
			$result = '';
		}
		
		return $result;
	}
	
	function my_social(){
		do_action('my_social');
	}
	
	add_action('my_social'		, 'get_my_twitter');
	add_action('my_social'		, 'get_my_facebook');
	
	function out_my_twitter(){		
		if( get_my_twitter() ){ 
			echo '<a href="http://twitter.com/'. get_my_twitter() . '" class ="twitter" title="twitter account : ' . get_my_twitter() . '"><img src="'.get_bloginfo('template_directory').'/resources/images/twitter-hover.png" width="1" height="1" alt="" /></a>';
		}
	}
	
	function out_my_facebook(){
		if( get_my_facebook() ){ 
			echo '<a href="' . get_my_facebook() . '" class ="facebook" title="facebook account : ' . get_my_facebook() .  '"><img src="'.get_bloginfo('template_directory').'/resources/images/facebook-hover.png" width="1" height="1" alt="" /></a>';
		}
	}
?>