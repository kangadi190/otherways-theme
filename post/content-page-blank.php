<?php while( have_posts() ) : the_post(); ?>
<div id="main-content page-blank post-<?php the_ID(); ?>" <?php  echo post_class(); ?>>
    <?php echo the_content(); ?>
</div>
<?php endwhile; ?>
