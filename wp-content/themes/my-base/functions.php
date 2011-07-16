<?php
	get_template_part('settings');
	
	// LIBRARY SETTINGS
	include 'resources/lib/options.php'; 
	include 'resources/lib/template/settings.php'; 
	
	// INIT ADMIN SIDE SETTINGS 
	options::Init( );
	
	$sb = new sidebars();

	$sidebars = get_my_sidabars( get_my_template() );
	
	$class_content = $sb -> getClassContent( $sidebars );
	
	if ( ! isset( $content_width ) ) { 
		if( $class_content =='small-content' ){
			$content_width = 400; 
		}
		
		if( $class_content =='middle-content' ){
			$content_width = 570; 
		}
		
		if( $class_content =='large-content' ){
			$content_width = 750; 
		}
		
	}
	
?>