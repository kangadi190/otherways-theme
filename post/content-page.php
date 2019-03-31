<?php while(have_posts()) { the_post(); ?>
<aside class="main-content">
    <h1><?php echo get_the_title(); ?></h1>
    <article class="main-article">
      <?php echo get_the_content(); ?>
    </article>
</aside>
<?php } ?>
