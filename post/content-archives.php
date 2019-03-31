<?php while(have_posts()) { the_post(); ?>
<aside class="main-content mb-5">
    <h1><?php echo get_the_title(); ?></h1>
    <p><?php echo __('Ditulis Oleh', 'otherways'); ?>: <?php echo get_the_author(); ?></p>

    <aside class="meta-post">
        <?php echo ow_meta(); ?>
    </aside>

    <figure id="main-featured-image">
        <img src="<?php echo ( has_post_thumbnail() ? wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) )[0] : get_template_directory_uri() . '/assets/images/bg-9.png' ) ?>" alt="<?php echo get_the_title(); ?>" width="100%">
    </figure>

    <article id="main-article">
      <?php echo get_the_excerpt(); ?>
    </article>

    <section id="after-posts">
        <div class="mb-3"><i class="fas fa-folder"></i> <?php echo ( get_the_category() === NULL ? __( 'Belum Diatur', 'otherways') : the_category( ', ' ) ); ?></div>
        <a href="<?php echo the_permalink(); ?>" class="btn btn-outline-primary btn-hover-shadow-sm"><?php echo __('Baca Selengkapnya', 'otherways'); ?></a>
    </section>
</aside>
<?php } ?>
