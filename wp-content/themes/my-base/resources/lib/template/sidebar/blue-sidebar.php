<?php
	if ( function_exists('dynamic_sidebar') ) { 
		if( !dynamic_sidebar('blue-sidebar') ){
?>
			<!-- default widget -->
			<li class="widget">
			  <h2 class="sidebartitle"><?php _e('Archives'); ?></h2>
			  <ul class="list-archives">
				<?php wp_get_archives('type=monthly'); ?>
			  </ul>
			</li>
<?php	
		}
	}
?>