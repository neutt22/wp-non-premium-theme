<?php

function jimmy_script_enqueue() {
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/jimmy.css', array(), '0.0.1', 'all');
	wp_enqueue_script('custom-js', get_template_directory() . '/js/jimmy.js', array(), '0.0.1', true); // true = printed in footer
}

add_action('wp_enqueue_scripts', 'jimmy_script_enqueue');