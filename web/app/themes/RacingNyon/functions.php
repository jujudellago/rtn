<?php

// enqueue the child theme stylesheet

Function qode_child_theme_enqueue_scripts() {
	wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css'  );
	wp_enqueue_style( 'childstyle' );
}
add_action( 'wp_enqueue_scripts', 'qode_child_theme_enqueue_scripts', 11);


function yabo_setup() {
	add_image_size( 'small_thumb', 172,140, true );
}
add_action( 'after_setup_theme', 'yabo_setup' );
