<?php
/**
 * Otherways Project Themes
 * By Adiboo Creative
 *
 * @since 1.0.0
 */

function ow_theme_setup() {
	/**
	 * Dukungan Tema
	 *
	 * @package OtherWays Theme
	 * @auhor   Adiboo Creative Karya Mandiri
	 * @since   1.0.0
	 */
  add_theme_support( 'html5', array( 'comment-list' ) );
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails', array('post', 'page'));
	add_theme_support( 'automatic-feed-links' );
	add_editor_style('stylesheet-tinymce.css');

	/**
	 * Logo Kustom
	 *
	 * @package OtherWays Theme
	 * @auhor   Adiboo Creative Karya Mandiri
	 * @since   1.0.0
	 */
	$defaults = array(
		'height'      => 30,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $defaults );

	/**
	 * Terjemahan Tema
	 *
	 * @package OtherWays Theme
	 * @auhor   Adiboo Creative Karya Mandiri
	 * @since   1.0.0
	 */
	load_theme_textdomain( 'otherways', get_template_directory() . '/inc/i18n' );

	register_nav_menus( array(
		'primary' => __( 'Menu Utama', 'otherways' ),
		'secondary' => __( 'Menu Kaki', 'otherways' ),
	) );
}
add_action( 'after_setup_theme', 'ow_theme_setup' );

/**
 * Panjang Konten
 *
 * @package OtherWays Theme
 * @auhor   Adiboo Creative Karya Mandiri
 * @since   1.0.0
 */
if ( ! isset( $content_width ) ) $content_width = 900;
