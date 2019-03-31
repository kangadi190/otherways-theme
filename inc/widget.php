<?php
/**
 * Otherways Project Themes
 * By Adiboo Creative
 *
 * @since 1.0.0
 */

function widget_initialize() {

  register_sidebar(
    array(
      'name'          => __( 'Bilah Sisi Utama', 'otherways' ),
      'id'            => 'sidebar',    // ID should be LOWERCASE  ! ! !
      'description'   => __('Tambahkan sebuah widget dengan menarik widget yag tersedia ke area ini.', 'otherways'),
      'class'         => 'sidebar-main mb-3',
      'before_widget' => '<div id="%1$s" class="widget mb-3 %2$s"><div>',
      'after_widget'  => '</div></div>',
      'before_title'  => '<h3 class="widgettitle">',
      'after_title'   => '</h3>',
    )
  );

  ## Footer
  register_sidebar(
    array(
      'name'          => __( 'Widget Kaki Kiri', 'otherways' ),
      'id'            => 'footer-left',    // ID should be LOWERCASE  ! ! !
      'description'   => __('Tambahkan sebuah widget dengan menarik widget yag tersedia ke area ini.', 'otherways'),
      'class'         => 'footer-main mb-3',
      'before_widget' => '<div id="%1$s" class="widget mb-3 %2$s"><div>',
      'after_widget'  => '</div></div>',
      'before_title'  => '<h3 class="widgettitle">',
      'after_title'   => '</h3>',
    )
  );
  register_sidebar(
    array(
      'name'          => __( 'Widget Kaki Tengah Kiri', 'otherways' ),
      'id'            => 'footer-middle-left',    // ID should be LOWERCASE  ! ! !
      'description'   => __('Tambahkan sebuah widget dengan menarik widget yag tersedia ke area ini.', 'otherways'),
      'class'         => 'footer-main mb-3',
      'before_widget' => '<div id="%1$s" class="widget mb-3 %2$s"><div>',
      'after_widget'  => '</div></div>',
      'before_title'  => '<h3 class="widgettitle">',
      'after_title'   => '</h3>',
    )
  );
  register_sidebar(
    array(
      'name'          => __( 'Widget Kaki Tengah Kanan', 'otherways' ),
      'id'            => 'footer-middle-right',    // ID should be LOWERCASE  ! ! !
      'description'   => __('Tambahkan sebuah widget dengan menarik widget yag tersedia ke area ini.', 'otherways'),
      'class'         => 'footer-main mb-3',
      'before_widget' => '<div id="%1$s" class="widget mb-3 %2$s"><div>',
      'after_widget'  => '</div></div>',
      'before_title'  => '<h3 class="widgettitle">',
      'after_title'   => '</h3>',
    )
  );
  register_sidebar(
    array(
      'name'          => __( 'Widget Kaki Kanan', 'otherways' ),
      'id'            => 'footer-right',    // ID should be LOWERCASE  ! ! !
      'description'   => __('Tambahkan sebuah widget dengan menarik widget yag tersedia ke area ini.', 'otherways'),
      'class'         => 'footer-main mb-3',
      'before_widget' => '<div id="%1$s" class="widget mb-3 %2$s"><div>',
      'after_widget'  => '</div></div>',
      'before_title'  => '<h3 class="widgettitle">',
      'after_title'   => '</h3>',
    )
  );
}
add_action('widgets_init', 'widget_initialize');
