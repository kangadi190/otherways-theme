<?php
/**
 * OtherWays Theme WordPress
 * WordPress Theme For Blog
 * 
 * @since 1.0.0
 * @build 26 March 2019
 * @author Adiboo Creative Karya Mandiri
 */

foreach( glob( get_template_directory() . '/inc/*.php') as $_FILES) {
    require($_FILES);
}