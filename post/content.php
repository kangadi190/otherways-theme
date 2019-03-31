<header id="main-default-header">
  <div class="container">
    <h1 class="text-white"><?php echo get_bloginfo('name'); ?></h1>
    <p><?php echo get_bloginfo('description'); ?></p>
  </div>
</header>
<div class="container mt-5 mb-3" id="main-posts-loop">
  <div class="row">
    <div class="col-md-9">
      <?php while (have_posts()) { the_post(); ?>
        <figure id="main-featured-image">
            <img src="<?php echo ( has_post_thumbnail() ? wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) )[0] : get_template_directory_uri() . '/assets/images/bg-10.png' ) ?>" alt="<?php echo get_the_title(); ?>" width="100%">
        </figure>
        <h1><?php echo the_title(); ?></h1>
        <span class="meta"><?php echo ow_meta(); ?></span>
        <div id="main-article">
          <?php echo the_excerpt(); ?>
          <a href="<?php echo the_permalink(); ?>" class="btn btn-outline-primary btn-hover-shadow-sm"><?php echo __('Baca Selengkapnya', 'otherways'); ?></a>
        </div>
      <?php } ?>
      <?php ow_pagination(); ?>
    </div>
    <div class="col-md-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
