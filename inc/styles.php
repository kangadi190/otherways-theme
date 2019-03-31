<?php
/**
 * Otherways Project Themes
 * By Adiboo Creative
 *
 * @since 1.0.0
 */

function otherways_theme_scripts() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', null, '4.2.1' );
    wp_enqueue_style( 'fa-css', get_template_directory_uri() . '/assets/fontawesome/css/all.min.css', null, '3.5.6' );
    wp_enqueue_style( 'fonts-css', get_template_directory_uri() . '/assets/css/fonts.css', null, '3.5.6' );
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/all.css', null, '1.0.0' );
    wp_enqueue_style( 'global-css', get_template_directory_uri() . '/assets/css/main.css', null, '1.0.0' );

    wp_enqueue_script( 'jquery-3', get_template_directory_uri() . '/assets/jquery/jquery.min.js', null, '3.2.1' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', null, '4.2.1' );
    wp_enqueue_script( 'jquery-easing-js', get_template_directory_uri() . '/assets/jquery-easing/jquery.easing.min.js', null, '3.2.1' );
    wp_enqueue_script( 'fa-js', get_template_directory_uri() . '/assets/fontawesome/js/all.min.js', null, '3.5.6' );

    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
}
add_action( 'wp_enqueue_scripts', 'otherways_theme_scripts' );
