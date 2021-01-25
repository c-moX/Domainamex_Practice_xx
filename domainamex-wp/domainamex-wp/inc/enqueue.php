<?php

function domainamex_cs_js_enqueue(){ 
		
		wp_enqueue_style( 'flaticon',get_template_directory_uri().'/layout/styles/flaticon.css', array(), '1.0.0', 'all');
		wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/layout/styles/bootstrap.min.css', array(), '1.0.0', 'all' );
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/layout/styles/font-awesome.min.css', array(), '1.0.0', 'all' );
		wp_enqueue_style( 'framework', get_template_directory_uri() . '/layout/styles/framework.css', array(), '1.0.0', 'all' );
		wp_enqueue_style( 'domainamex-main-css', get_template_directory_uri() . '/layout/styles/layout.css', array(), '1.0', 'all' );
		
		
		wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/layout/scripts/bootstrap.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'backtotop', get_template_directory_uri() . '/layout/scripts/jquery.backtotop.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'jquery', get_template_directory_uri() . '/layout/scripts/jquery.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'mobilemenu', get_template_directory_uri() . '/layout/scripts/jquery.mobilemenu.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'domainamex-main-js', get_template_directory_uri() . '/layout/scripts/main.js', array('jquery'), '1.0', true );
		    
	
}
add_action('wp_enqueue_scripts','domainamex_cs_js_enqueue');

