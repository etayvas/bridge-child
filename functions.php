<?php

// enqueue the child theme stylesheet

function wp_schools_enqueue_scripts() {
  wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css'  );
  wp_enqueue_style( 'childstyle' );
}

function custom_pon_scripts() {
  wp_register_style( 'custom_pon', get_stylesheet_directory_uri() . '/custom_pon.css'  );
  wp_enqueue_style( 'custom_pon' );
}

add_action( 'wp_enqueue_scripts', 'wp_schools_enqueue_scripts', 11);

add_action( 'wp_enqueue_scripts', 'custom_pon_scripts', 11);
