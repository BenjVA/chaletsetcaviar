<?php add_action( 'wp_enqueue_scripts', 'wpm_enqueue_styles' ); 
function wpm_enqueue_styles(){ 
        wp_enqueue_style( 'child-styles', get_stylesheet_uri(), array( 'twentytwentytwo-style' ) ); 
    }