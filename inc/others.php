<?php
/**
 * Otherways Project Themes
 * By Adiboo Creative
 *
 * @since 1.0.0
 */

/**
 * The Post Date
 * OtherWays Theme
 *
 * @since 1.0.0
 */
function ow_meta() { ?>
  <?php if( is_single() ) : ?>
    <p class="text-muted"><i class="fas fa-user"></i> <?php echo get_the_author(); ?> <i class="fas fa-calendar"></i> <?php echo get_the_date('l, j F Y'); ?> <i class="fas fa-tag"></i> <?php echo ( the_tags() === NULL ? __( 'Belum Diatur', 'otherways') : the_tags() ); ?></p>
  <?php else : ?>
    <p class="text-muted"><i class="fas fa-user"></i> <?php echo get_the_author(); ?> <i class="fas fa-calendar"></i> <?php echo get_the_date('l, j F Y'); ?> <i class="fas fa-tag"></i> <?php echo ( the_tags() === NULL ? __( 'Belum Diatur', 'otherways') : the_tags() ); ?> <i class="fas fa-folder"></i> <?php echo ( !get_the_category() ? __( 'Belum Diatur', 'otherways') : the_category( ', ' ) ); ?></p>
  <?php endif; ?>
<?php }

/**
 * Post Pingback
 * OtherWays Theme
 *
 * @since 1.0.0
 */
function ow_post_pingback() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action('wp_head', 'ow_post_pingback');

/**
 * Post Images
 * OtherWays Theme
 *
 * @since 1.0.0
 */
function ow_post_images() {
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
  $thumb_url = $thumb_url_array[0];

  return $thumb_url;
}
