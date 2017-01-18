<?php

/*
 *	Plugin Name: 13:20 Time Plugin
 *	Plugin URI: http://1320time.net/wordpress-plugin
 *	Description: Daily Kin, Kin Decoder, Kin Custom Post Type, Daily Orlacles
 *	Version: 1.0
 *	Author: Zac Gordon
 *	Author URI: http://zacgordon.com
 *	License: GPL3
 *
*/

$constant_json_feed_url = 'http://api.1320time.net/json/1320-constants.json';
$kin_json_feed_url = 'http://api.1320time.net/json/kin.json';

include( plugin_dir_path(__FILE__) . 'inc/PageTemplater.class.php');

function ttt_backend_styles() {

	wp_enqueue_style( 'ttt_frontend_css', plugins_url( 'thirteen-twenty-time/inc/admin.css' ) );

}
add_action( 'admin_head', 'ttt_backend_styles' );

function ttt_frontend_scripts_and_styles() {

	wp_enqueue_style( 'ttt_backend_css', plugins_url( 'thirteen-twenty-time/inc/front-end.css' ) );	

}
add_action( 'wp_enqueue_scripts', 'ttt_frontend_scripts_and_styles' );


function ttt_badges_menu() {

	add_menu_page(
		'13:20 Time',
		'13:20 Time',
		'manage_options',
		'1320-time',
		'ttt_options_page'
	);

}
add_action( 'admin_menu', 'ttt_badges_menu' );

function create_kin_post_type() {

	// Check if post type kin already exists

	register_post_type( 'kin',
		array(
			'labels' => array(
				'name' => __( '260 Kin' ),
				'singular_name' => __( 'Kin' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array( 'title' )
		)
	);

}
add_action( 'init', 'create_kin_post_type' );

function ttt_kin_shortcode( $atts, $content = null ) {

	global $post;

	extract( shortcode_atts( array(
		'kin' => ''		
	), $atts ) );

	$all_kin = get_all_kin();

	ob_start();

	require( 'inc/kin-listing.php' );

	$content = ob_get_clean();

	return $content;

}
add_shortcode( 'kin', 'ttt_kin_shortcode' );


function ttt_metaboxes( $meta_boxes ) {

	$prefix = '_1320_'; // Prefix for all fields
	$meta_boxes[] = array(
		'id' 			=> 'kin_info_metabox',
		'title' 		=> 'Kin Info',
		'pages' 		=> array('kin'), 
		'context' 		=> 'side',
		'priority' 		=> 'high',
		'show_names' 	=> true, 
		'fields' 		=> array(
			array(
				'name' 		=> 'Number',				
				'id' 		=> $prefix . 'kin_num',
				'type' 		=> 'text_small'
			),
			array(
				'name' 		=> 'Color',				
				'id' 		=> $prefix . 'kin_color',
				'type' 		=> 'text_small'
			),
			array(
				'name' 		=> 'Tone',				
				'id' 		=> $prefix . 'kin_tone',
				'type' 		=> 'text'
			),
			array(
				'name' 		=> 'Glyph',				
				'id' 		=> $prefix . 'kin_glyph',
				'type' 		=> 'text'
			),
			array(
				'name' 		=> 'Img',				
				'id' 		=> $prefix . 'kin_img_url',
				'type' 		=> 'text'				
			),
			array(
				'name' 		=> 'Your Description',				
				'id' 		=> $prefix . 'kin_description',								
				'type'    	=> 'wysiwyg',
				'options' 	=> array(	'textarea_rows' => 10, )
			)
		),
	);

	return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'ttt_metaboxes' );
add_action( 'init', 'ttt_initialize_meta_boxes', 9999 );

function ttt_kin_table_head( $defaults ) {
	unset( $defaults['date'] );
	unset( $defaults['title'] );
    $defaults['kin']  = 'Kin';
    return $defaults;
}
add_filter('manage_kin_posts_columns', 'ttt_kin_table_head');

function ttt_kin_table_content( $column_name, $post_id ) {
    if ($column_name == 'kin') {
	  $kin_img = get_post_meta( $post_id, '_1320_kin_img_url', true );
	  $edit_url = get_admin_url() . 'post.php?post=' . $post_id . '&action=edit';
      //echo  '<img width="24" class="alignleft" src="' . $kin_img . '">';
      echo '<a class="name" href="' . $edit_url . '">';      
      echo get_the_title( $post_id );
      echo '</a>';
    }

}
add_action( 'manage_kin_posts_custom_column', 'ttt_kin_table_content', 10, 2 );


function ttt_kin_column_auto_orderby( $query ) {  
    
    if( ! is_admin() )  
        return;  

    $orderby = $query->get( 'orderby');  
    $query->set('orderby','ID');
    $query->set('order','asc');  

} 
add_action( 'pre_get_posts', 'ttt_kin_column_auto_orderby' );  


function ttt_sortable_kin_column( $columns ) {
    
    $columns['kin'] = 'kin';

    //To make a column 'un-sortable' remove it from the array
    //unset($columns['date']);
 
    return $columns;
}
add_filter( 'manage_edit-kin_sortable_columns', 'ttt_sortable_kin_column' );


function ttt_kin_column_orderby( $vars ) {
    
    if ( isset( $vars['orderby'] ) && 'kin' == $vars['orderby'] ) {    	
        $vars = array_merge( $vars, array(           
            'orderby' => 'ID'
        ) );
    }

    return $vars;
}
add_filter( 'request', 'ttt_kin_column_orderby' );


function kin_template( $template ) {
  if ( is_post_type_archive('kin') ) {
    
    $theme_files = array('archive-kin.php', '1320/archive-kin.php');
    $exists_in_theme = locate_template($theme_files, false);
    if ( $exists_in_theme != '' ) {
    	return $exists_in_theme;      
    } else {    
    	return 'page.php';
      	//return plugin_dir_path(__FILE__) . 'inc/archive-kin.php';            
    }
  }
  return $template;
}
//add_filter('template_include', 'kin_template');


function single_kin_template() {

	if( is_singular( 'kin' ) ) {
	     // do conditional stuff
		$content = "Test";
		include( plugin_dir_path( __FILE__ ) . 'inc/single-kin.php');

	}

}
add_filter( 'the_content', 'single_kin_template' );

function ttt_initialize_meta_boxes() {
	if ( !class_exists( 'cmb_Meta_Box' ) ) {
		require_once( 'inc/metaboxes/init.php' );
	}
}

function ttt_options_page() {	

	$options 	= get_option( '1320_time' );
	$kin_added 	= $options['kin_added'];

	require( 'inc/options-page.php' );

}

function ttt_process_update_kin() {	

	if( isset( $_POST['add_kin_form_submitted'] ) ) {
		
		add_kin();	
		add_kin_page();	

		$options['kin_added']		= true;		
		$options['last_updated']	= time();
		update_option( '1320_time', $options );		
		
	}

	if( isset( $_POST['remove_kin_form_submitted'] ) ) {
		
		remove_kin();		

		$options['kin_added']		= false;		
		$options['last_updated']	= time();
		update_option( '1320_time', $options );		
		
	}

}
add_action( 'admin_init', 'ttt_process_update_kin' );

function add_kin() {

	$all_kin = get_all_kin();

	if( !empty( $all_kin ) ) {

		foreach( $all_kin as $kin ) {

			$kin_to_add = array(
				'post_title' 	=> $kin->name,
				'post_status'	=> 'publish',
				'post_type'		=> 'kin'
			);

			$kin_id = wp_insert_post( $kin_to_add );

			if( $kin_id != 0 ) {
				
				update_post_meta( $kin_id, '_1320_kin_num', $kin->num );
				update_post_meta( $kin_id, '_1320_kin_color', $kin->color );
				update_post_meta( $kin_id, '_1320_kin_tone', $kin->tone );
				update_post_meta( $kin_id, '_1320_kin_glyph', $kin->glyph );
				update_post_meta( $kin_id, '_1320_kin_img_url', $kin->img_url );				

			}

		}

	} else {

		// Need to send error message if fails		
		// $error = new WP_Error( 'api_offline', __( "Unable to connect to 1320 API", "api_offline_error" ) );
		// $error->add( 'api_offline', 'API is offline, please try Internet connection' );

	}

}

function add_kin_page() {

	$args = array(
		'post_title' 	=> 'Kin',
		'post_status'	=> 'publish',
		'post_type'		=> 'page',
		'post_content'	=> '[kin]'
	);

	$page_id = wp_insert_post( $args );

}

function remove_kin() {

	global $wp_post_types;

	// Get ids of all kin 

	$args = array(	
		'post_type' => 'kin',
		'posts_per_page' => -1, // ALL posts
	);

	$all_kin = new WP_Query( $args );
    
    foreach ( $all_kin->posts as $kin ) {

    	wp_delete_post( $kin->ID );    	    	

    }
	
	remove_menu_page( 'edit.php?post_type=kin' );
    unset( $wp_post_types[ 'kin' ] );
	$args=array(
		'name' => 'kin',
		'post_type' => 'page',
		'post_status' => 'publish',
		'posts_per_page' => 1
	);
	$kin_page = get_posts( $args );
	if( $kin_page ) {
		wp_delete_post( $kin_page[0]->ID, true );				
	}

}

function get_all_kin() {

	global $kin_json_feed_url;	
	$args = array( 'timeout' => 120 );

	$json_feed = wp_remote_get( $kin_json_feed_url, $args );
	$all_kin = json_decode( $json_feed['body'] );	

	return $all_kin;

}

function out( $obj ){
	echo '<pre><code>';
	var_dump( $obj );
	echo '</pre></code>';

}

?>