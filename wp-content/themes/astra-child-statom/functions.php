<?php
function astra_child_enqueue_styles() {
    wp_enqueue_style( 'astra-parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style(
        'astra-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('astra-parent-style'),
        filemtime( get_stylesheet_directory() . '/style.css' )
    );
    wp_enqueue_style(
        'astra-child-tailwind',
        get_stylesheet_directory_uri() . '/assets/css/tailwind.css',
        array( 'astra-child-style' ),
        filemtime( get_stylesheet_directory() . '/assets/css/tailwind.css' )
    );
}
add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_styles' );
