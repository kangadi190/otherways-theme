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
<header id="main-default-header">
    <div class="container">
        <h1 class="text-white"><?php echo __('Arsip Blog', 'otherways'); ?></h1>
        <?php echo bootstrap_breadcrumb(); ?>
    </div>
</header>
<div class="container mt-5 mb-3" id="main-posts-single">
  <div class="row">
    <div class="col-md-9">
      <?php get_template_part('post/content', 'page'); ?>
    </div>
    <div class="col-md-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php echo get_footer(); ?>
