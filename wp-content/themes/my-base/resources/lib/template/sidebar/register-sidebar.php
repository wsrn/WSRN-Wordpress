<?php
	// sidebars
	if ( function_exists('register_sidebar') ) {
	
		$sidebars = get_my_sidabars( get_my_template() );
		
		if( in_array( 'red' , $sidebars ) ){
			// red sidebar
			register_sidebar(array(
				'name' => 'red-sidebar',
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'after_widget' => '</li>',
				'before_title' => '<h2 class="sidebartitle">',
				'after_title' => '</h2>',
			));
		}
		// blue sidebar
		register_sidebar(array(
			'name' => 'blue-sidebar',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h2 class="sidebartitle">',
			'after_title' => '</h2>',
		));
		
		if( in_array( 'green' , $sidebars ) ){
			// green sidebar
			register_sidebar(array(
				'name' => 'green-sidebar',
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'after_widget' => '</li>',
				'before_title' => '<h2 class="sidebartitle">',
				'after_title' => '</h2>',
			));
		}
		
		if( in_array( 'orange' , $sidebars ) ){
			// orange sidebar
			register_sidebar(array(
				'name' => 'orange-sidebar',
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'after_widget' => '</li>',
				'before_title' => '<h2 class="sidebartitle">',
				'after_title' => '</h2>',
			));
		}

		if( in_array( 'silver' , $sidebars ) ){
			// silver sidebar
			register_sidebar(array(
				'name' => 'silver-sidebar',
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'after_widget' => '</li>',
				'before_title' => '<h2 class="sidebartitle">',
				'after_title' => '</h2>',
			));
		}
	}
?>