<?php

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Left Sidebar',
		'before_widget' => '', // Removes <li>
		'after_widget' => '</div>', // Removes </li>
		'before_title' => '<h2 class="menuheader">',
		'after_title' => '</h2><div class="menucontent">',
	));

// WP-techdesigns01 Page Navigation 	
	function widget_techdesigns01_pagenav() {
?>
<h2 class="menuheader">Pages</h2>
<div class="menucontent">
<ul>
<?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
</ul>
</div>
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Pages'), 'widget_techdesigns01_pagenav');

// WP-techdesigns01 Search 	
	function widget_techdesigns01_search() {
?>
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Search'), 'widget_techdesigns01_search');

// WP-techdesigns01 Links 	
	function widget_techdesigns01_links() {
?>


<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Links'), 'widget_techdesigns01_links');	 