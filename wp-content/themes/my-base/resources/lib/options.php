<?php
	class options
	{
		static $menu;
		static $register;
		
		
		static function Init( ){
			if (is_admin()){
				add_action('admin_menu', 'options::Menu' );
				add_action('admin_init', 'options::Register' );
			}
		}
		
		
		
		/*
			$args = array(
				array('Menu item','Page title','acces type','page','group');
				array('Menu item','Page title','acces type','page','group');
				..................
			);
		*/
		static function Menu(  ){
			$args = self::$menu;
			foreach( $args  as $key => $value ){
				add_theme_page( $value[0] , $value[1] , $value[2] , $value[3] , $value[4] );
			}
		}
		
		
		
		
		/*
			$args  = array(
				'group1' => array( 'field11' , 'field12' , 'field13' ),
				'group2' => 'field21',
				.....................
			);
		*/
		static function Register(  ){
			$args = self::$register;
			foreach( $args as $group => $field ){
				if( is_array( $field ) ){
					foreach( $field  as $key => $value ){
						register_setting( $group , $value );
					}
				}else{
					register_setting( $group , $field );
				}
			}
		}
	}
?>