<?php
/**
 * Custom post type for WSRN shows
 */
if ( ! function_exists( 'post_type_show') ) :
function post_type_show() {
	register_post_type( 'show',
		array(
			'labels' => array(
				'name' => __('Shows'),
				'singular_name' => __('Show'),
				'add_new_item' => __('Add New Show'),
				'not_found' => __('No shows found.'),
			),
			'public'=> true,
			'hierarchical' => true,
			'taxonomies' => array('post_tag', 'category'),
			'supports' => array('title', 'editor', 'page-attributes'),
			'rewrite' => array('slug'=>'show'),
		)
	);
}
endif;

add_action( 'init', 'post_type_show');

/**
 * Custom text boxes
 */
$new_meta_boxes = array (
	'personnel' => array (
		'name' => 'personnel',
		'std' => '',
		'title' => 'Personnel',
		'description' => 'Hosts for the show'
	)
);

function new_meta_boxes() {
	global $post, $new_meta_boxes;
	foreach ($new_meta_boxes as $meta_box) {
		$meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);

		if ($meta_box_value == '') {
			$meta_box_value = $meta_box['std'];
		}

		echo'<input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
		echo'<h2 style="display:inline;">'.$meta_box['title'].'</h2> ';
		echo'<input type="text" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'" size="55" /><br />';
		//echo'<p><label for="'.$meta_box['name'].'_value">'.$meta_box['description'].'</label></p>';
	}
}

function create_meta_box() {
	add_meta_box( 'new-meta-boxes', 'Show Information', 'new_meta_boxes', 'show', 'normal', 'high' );
}

function save_postdata( $post_id ) {
	global $post, $new_meta_boxes;
	foreach($new_meta_boxes as $meta_box) {
		//Verify
		if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'], plugin_basename(__FILE__) )) {
			return $post_id;
		}
		if ( 'page' == $_POST['post_type'] ) {
			if ( !current_user_can( 'edit_page', $post_id ))
				return $post_id;
		} else {
			if ( !current_user_can( 'edit_post', $post_id ))
				return $post_id;
		}
		$data = $_POST[$meta_box['name'].'_value'];
		if(get_post_meta($post_id, $meta_box['name'].'_value') == "")
			add_post_meta($post_id, $meta_box['name'].'_value', $data, true);
		elseif($data != get_post_meta($post_id, $meta_box['name'].'_value', true))
			update_post_meta($post_id, $meta_box['name'].'_value', $data);
		elseif($data == "")
			delete_post_meta($post_id, $meta_box['name'].'_value', get_post_meta($post_id, $meta_box['name'].'_value', true));
	}
}
add_action('admin_menu', 'create_meta_box');
add_action('save_post', 'save_postdata');
?>
