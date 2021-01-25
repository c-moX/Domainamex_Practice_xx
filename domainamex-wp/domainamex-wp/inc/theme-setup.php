<?php

function domainamex_theme_set(){
	
	//Add theme supports
	add_theme_support('post-thumbnails');
	add_theme_support('title-tags');
	add_theme_support('custom-background');
	add_theme_support('custom-header');
	add_theme_support('custom-logo');
	add_theme_support('custom-footer');
	
	add_theme_support('html5',array(	
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));
	
	register_nav_menus( array(
		
		'top_menu' => __( 'Top Menu', 'domainamex' ),
		'head_menu' => __( 'Header Menu', 'domainamex' ),
		'foot_menu' => __( 'Footer Menu', 'domainamex' ),
	
	));
	
	//Custom Recent Post Img // From: custom-widget.php file //
	add_image_size( 'domainamex-recent-post', 200, 200, true ); 
}
add_action('after_setup_theme', 'domainamex_theme_set');


//Custom Comment Form Return__(reply) 
function domainamex_comment_form_fields($fields){
	
	$comment_field =$fields['comment'];
	unset($fields['comment']);
	unset($fields['cookies']);
	$fields['comment'] =$comment_field;
	return $fields;
}
add_filter('comment_form_fields','domainamex_comment_form_fields');