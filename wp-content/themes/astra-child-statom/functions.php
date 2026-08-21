<?php
function astra_child_enqueue_styles() {
    wp_enqueue_style( 'astra-parent-style', get_template_directory_uri() . '/style.css' );  // get_template_directory_uri() points to the parent theme (Astra) — this loads Astra's base CSS first.
    wp_enqueue_style( 'astra-child-style', get_stylesheet_directory_uri() . '/style.css', array('astra-parent-style') );  // get_stylesheet_directory_uri() points to the child theme — this loads your style.css second, with array('astra-parent-style') as a dependency so it's guaranteed to load after Astra's, letting your rules override theirs.
}
add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_styles' );  // wp_enqueue_scripts is the correct hook for front-end styles — don't use wp_head or inline <link> tags, WordPress has a built-in queue system for this.