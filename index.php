<?php
/**
 * OtherWays Theme WordPress
 * WordPress Theme For Blog
 * 
 * @since 1.0.0
 * @build 26 March 2019
 * @author Adiboo Creative Karya Mandiri
 */

get_header(); ?>

<?php get_template_part('post/content', get_post_format() ); ?>

<?php echo get_footer(); ?>