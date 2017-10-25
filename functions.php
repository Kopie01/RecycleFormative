<?php 

function recycleThemeEnqueues(){
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');
	wp_enqueue_style('customStyle', get_template_directory_uri() . '/css/recycleStyle.css', array(), '1.0.0', 'all');
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/js/bootstrap.min.js', array(), '3.3.7', true);
	wp_enqueue_script('customScript', get_template_directory_uri() . '/js/recycleScript.js', array(), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'recycleThemeEnqueues');

function recycleThemeSetUp(){
	add_theme_support('menus');
	register_nav_menu('primary', 'This is the main navigation, positioned at the top of the page');
	register_nav_menu('seconday', 'This is the seconday navigation, located at the bottom of the page');

}

add_action('init', 'recycleThemeSetUp');

add_theme_support( 'custom-logo' );

function customLogoSetUp(){
   $customLogoSetting = array(
       'height'      => 100,
       'width'       => 400,
       'flex-height' => true,
       'flex-width'  => true,
       'header-text' => array( 'site-title', 'site-description' ),
   );
   add_theme_support( 'custom-logo', $customLogoSetting );
};




















