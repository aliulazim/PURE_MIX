<?php 

function pure_theme_setup(){

	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-logo');

	$defaults = array(
 	'default-image'          => '',
	 'width'                  => 0,
 	'height'                 => 0,
 	'flex-height'            => false,
	 'flex-width'             => false,
 	'uploads'                => true,
 	'random-default'         => false,
	 'header-text'            => true,
	 'default-text-color'     => '',
	 'wp-head-callback'       => '',
	 'admin-head-callback'    => '',
	 'admin-preview-callback' => '',
	);
 	add_theme_support( 'custom-header',$defaults);

	//load textdomain
	load_theme_textdomain('PUREMIX', get_template_directory_uri().'/languages');

	register_nav_menus(array(

			'header_menu' => 'Main Menu',
			
			'portfolio_menu' => 'Portfolio Menu',


		));

	function read_more($word){
		$pure_content = explode(" ", get_the_content());
		$word_limit = array_slice($pure_content, 0, $word);
		echo implode(" ", $word_limit);
		
	}




}
add_action('after_setup_theme','pure_theme_setup');



/*
===================================================================
Custom CSS_JS Link
===================================================================
*/

function mix_css_js(){


	wp_enqueue_style('bootstrap-min',get_template_directory_uri().'/css/bootstrap.min.css', null,'v5.203','all');
	wp_enqueue_style('animate',get_template_directory_uri().'/css/animate.min.css', null,'v6.203','all');

	wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/font-awesome.min.css', null,'v2.203','all');
	wp_enqueue_style('ionicons',get_template_directory_uri().'/css/ionicons.min.css', null,'v1.203','all');

   wp_enqueue_style('style',get_template_directory_uri().'/css/style.css', null,'v15.203','all');

   wp_enqueue_style('fonts-googleapis','https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300', null,'v85.203','all');	
  

	wp_enqueue_style('main-style', get_stylesheet_uri(), array(''),'v5.25','all');



	wp_enqueue_script('mai-jquery', get_template_directory_uri().'/js/jquery.js', array('jquery'),'v2.403',true);
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'),'v3.403',true);

	wp_enqueue_script('isotope', get_template_directory_uri().'/js/isotope.js', array('jquery'),'v4.403',true);

	wp_enqueue_script('imagesloaded', get_template_directory_uri().'/js/imagesloaded.min.js', array('jquery'),'v5.403',true);

	wp_enqueue_script('wow-min-js', get_template_directory_uri().'/js/wow.min.js', array('jquery'),'v6.403',true);

	wp_enqueue_script('custom-js', get_template_directory_uri().'/js/custom.js', array('jquery'),'v7.403',true);


	wp_enqueue_script('jquery');

}
add_action('wp_enqueue_scripts','mix_css_js');


/*
===================================================================
Custom portfolio Area
===================================================================
*/

function pure_portfolio(){
	$portfolio_labels = array( 
		'name' => 'PURE Portfolio',
		'add_new' => 'Add portfolio',
		'all_items' => 'Portfolio ALL ',
		'add_new_item' => 'Add New Portfolio',
		'not_found' => 'No portfolio found',
		'search_items' => 'Search portfolio',
		'id' => 'portfolio'

		);

	$args = array(
		'labels' => $portfolio_labels,
		'public' => true,
		'has_archive' => true,
		'menu_position' => 10,
		'menu_icon' => 'dashicons-screenoptions',
		'supports' => array(
				'title',
				'editor',
				'thumbnail',
				'custom-fields',
				'excerpt',
				'revisions',
				'page-attributes'

			)
		);

	register_post_type('portfolio', $args);
}
add_action('init', 'pure_portfolio');


/*
===================================================================
Custom category
===================================================================
*/

function add_catagory(){
	register_taxonomy_for_object_type('category','portfolio');
}
add_action('init','add_catagory');



/*
===================================================================
Blog widget
===================================================================
*/

function awesome_widget(){


	register_sidebar(array(
			'name' => 'Home Header',
			'description' => 'You can add Home Header widget from here.',
			'id' => 'home_header'
			
		));

	register_sidebar(array(
			'name' => 'Footer Copyright',
			'description' => 'You can add Footer Copyright widget from here.',
			'id' => 'footer_copyright'
			
		));

		register_sidebar(array(
			'name' => 'Contact Phone',
			'description' => 'You can add Contact Phone widget from here.',
			'id' => 'contact_phone'
			
		));

			register_sidebar(array(
			'name' => 'Contact Email',
			'description' => 'You can add Contact Email widget from here.',
			'id' => 'contact_email'
			
		));

				register_sidebar(array(
			'name' => 'Contact Address',
			'description' => 'You can add Contact Address widget from here.',
			'id' => 'contact_address'
			
		));



}

add_action('widgets_init','awesome_widget');



/*
===================================================================
Custom About Us Area
===================================================================
*/

function pure_about(){
	$about_labels = array( 
		'name' => 'PURE About',
		'add_new' => 'Add About Post',
		'all_items' => 'About ALL Post',
		'add_new_item' => 'Add New About Post',
		'not_found' => 'No About found',
		'search_items' => 'Search About',
		'id' => 'about'

		);

	$args = array(
		'labels' => $about_labels,
		'public' => true,
		'has_archive' => true,
		'menu_position' => 10,
		'menu_icon' => 'dashicons-screenoptions',
		'supports' => array(
				'title',
				'editor',
				'thumbnail'
			)
		);

	register_post_type('about', $args);
}
add_action('init', 'pure_about');





















































?>