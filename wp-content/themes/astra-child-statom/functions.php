<?php
function astra_child_enqueue_styles() {
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css',
        array(),
        '6.5.2'
    );
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
    wp_enqueue_style(
        'swiper',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        array(),
        '11'
    );
}
add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_styles' );

function astra_child_enqueue_scripts() {
    wp_enqueue_script(
        'swiper',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        '11',
        true
    );
    wp_enqueue_script(
        'astra-child-swiper-init',
        get_stylesheet_directory_uri() . '/assets/js/swiper-init.js',
        array( 'swiper' ),
        filemtime( get_stylesheet_directory() . '/assets/js/swiper-init.js' ),
        true
    );
    wp_enqueue_script(
        'astra-child-stat-counter',
        get_stylesheet_directory_uri() . '/assets/js/stat-counter.js',
        array(),
        filemtime( get_stylesheet_directory() . '/assets/js/stat-counter.js' ),
        true
    );
    wp_enqueue_script(
        'astra-child-scroll-reveal',
        get_stylesheet_directory_uri() . '/assets/js/scroll-reveal.js',
        array(),
        filemtime( get_stylesheet_directory() . '/assets/js/scroll-reveal.js' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_scripts' );
