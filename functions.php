<?php
	// Theme Support
	function ms_theme_setup(){
		add_theme_support('custom-logo');

		// Nav Menus
		register_nav_menus(array(
			'primary' => __('Primary Menu')
		));
	}

	add_action('after_setup_theme', 'ms_theme_setup');

// Widget Locations
function ms_init_widgets($id){
	register_sidebar(array(
		'name' 	=> 'Sidebar',
		'id' 	=> 'sidebar',
		'before_widget'	=> '<div class="callout">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	));

  register_sidebar(array(
		'name' 	=> 'Showcase',
		'id' 	=> 'showcase',
		'before_widget'	=> '',
		'after_widget'	=> '',
		'before_title'	=> '',
		'after_title'	=> ''
	));
}

add_action('widgets_init', 'ms_init_widgets');