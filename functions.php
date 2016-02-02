<?php

function jimmy_script_enqueue() {
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/jimmy.css', array(), '0.0.1', 'all');
	wp_enqueue_script('custom-js', get_template_directory() . '/js/jimmy.js', array(), '0.0.1', true); // true = printed in footer
}

add_action('wp_enqueue_scripts', 'jimmy_script_enqueue');

function jimmy_theme_setup() {
	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('footer', 'Footer Navigation');
}

add_action('init', 'jimmy_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('aside', 'image', 'video'));

function jimmy_widget_setup() {

	register_sidebar(
		array(
			'name' => 'Main Sidebar',
			'id' => 'sidebar-1',
			'class' => 'custom-class',
			'description' => 'simple widget description',
			'before_widget' => '<aside id="%1s" class="widget %2s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title',
			'after_title' => '</h5>',
		)
	);
}

add_action('widgets_init', 'jimmy_widget_setup');