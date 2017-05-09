<?php 
	function wp_boilerplate_styles() {
		wp_enqueue_style('wp_boilerplate_stylesheet', get_stylesheet_uri());
		wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/node_modules/font-awesome/css/font-awesome.min.css');
		wp_enqueue_style('raleway', "https://fonts.googleapis.com/css?family=Raleway:400");

   	    wp_enqueue_script('jquery');
   	    wp_enqueue_script('App', get_stylesheet_directory_uri() . '/app/temp/scripts/App.js', array('jquery'), '1.0', true);
	}

	add_action('wp_enqueue_scripts', 'wp_boilerplate_styles');

	register_nav_menus( array(
		'main_menu' => __('Main Menu', 'menu')
	) );

	add_theme_support('post-thumbnails' );

	add_image_size('entry', 400, 150, true);

?>
