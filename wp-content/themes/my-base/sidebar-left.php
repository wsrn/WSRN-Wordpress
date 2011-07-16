<?php	
	$sb = new sidebars();
	
	$sidebars = get_my_sidabars( get_my_template() );
	
	$class_left_sidebar  = $sb -> getClassLeftSide( $sidebars );
	
	if( $sidebars[ count($sidebars) - 1 ] != 'l' ){
		print "<div class=\"sidebar sidebar-left ".$class_left_sidebar."\">\n";
		if( strlen( $sb -> getMySidebar('red-sidebar') ) > 0 ){
			print $sb -> getMySidebar('red-sidebar');
		}
		
		
		if( strlen( $sb -> getMySidebar('green-sidebar') ) > 0 ){
			print "<div class=\"two-sidebar\">\n";
			print $sb -> getMySidebar('blue-sidebar');
			print $sb -> getMySidebar('green-sidebar');
			print "<div class=\"sidebar-end\"></div>";
			print "</div>";
		}else{
			print $sb -> getMySidebar('blue-sidebar');
		}
		
		if( strlen( $sb -> getMySidebar('orange-sidebar') ) > 0 ){
			print $sb -> getMySidebar('orange-sidebar');
		}
		print "</div>\n";
	}else{
		if( strlen( $sb -> getMySidebar('silver-sidebar') ) > 0 ){
			print "<div id=\"sidebar\" class=\"sidebar sidebar-left ".$class_left_sidebar."\">\n";
			print $sb -> getMySidebar('silver-sidebar');
			print "</div>\n";
		}
	}
?>