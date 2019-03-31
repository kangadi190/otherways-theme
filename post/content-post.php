<?php while(have_posts()) { the_post(); ?>
<aside class="main-content">
    <h1><?php echo get_the_title(); ?></h1>
    <p><?php echo __('Ditulis Oleh', 'otherways'); ?>: <?php echo get_the_author(); ?></p>

    <aside class="meta-post">
        <?php echo ow_meta(); ?>
    </aside>

    <figure id="main-featured-image">
        <img src="<?php echo ( has_post_thumbnail() ? wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) )[0] : get_template_directory_uri() . '/assets/images/bg-9.png' ) ?>" alt="<?php echo get_the_title(); ?>" width="100%">
    </figure>

    <article id="main-article">
      <?php echo get_the_content(); ?>
    </article>

    <section id="after-posts">
        <div><i class="fas fa-folder"></i> <?php echo ( get_the_category() === NULL ? __( 'Belum Diatur', 'otherways') : the_category( ', ' ) ); ?></div>
        <?php if ( !class_exists('Jetpack') ): ?>
            <!-- OtherWays Sharer -->
            <h3 class="mt-3"><?php echo __( 'Bagikan Ke Temanmu!', 'otherways' ); ?></h3>
            <div class="btn-group btn-group-lg">
                <a href="https://www.facebook.com/sharer?url=<?php echo get_permalink(); ?>" target="_blank" class="btn btn-facebook btn-hover-shadow-lg"><i class="fab fa-facebook"></i></a>
                <a href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" target="_blank" class="btn btn-gplus btn-hover-shadow-lg"><i class="fab fa-google"></i></a>
                <a href="https://www.twitter.com/share?url=<?php echo get_permalink(); ?>" target="_blank" class="btn btn-twitter btn-hover-shadow-lg"><i class="fab fa-twitter"></i></a>
                <a href="https://api.whatsapp.com/send?text=Mari%20kak%20boleh%20dibaca%20<?php echo get_permalink(); ?>" class="btn btn-whatsapp btn-hover-shadow-lg" target="_blank"><i class="fab fa-whatsapp"></i></a>
            </div>
        <?php endif; ?>
    </section>
    <div class="card shadow mt-3">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <!-- <?php previous_posts_link(); ?> -->
                    <?php previous_post_link('%link', '<i class="fas fa-fw fa-arrow-left"></i> ' . __('Posting Sebelumnnya', 'otherways') . '<br/>'.'%title'); ?>
                </div>
                <div class="col text-right">
                    <?php next_post_link('%link', __('Posting Selanjutnya', 'otherways') . ' <i class="fas fa-fw fa-arrow-right"></i><br/>'.'%title'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php wp_link_pages(); ?>
</aside>

<section id="comments" class="mt-5">
    <?php comments_template( '/comments.php' ); ?>
</section>
<?php } ?>
