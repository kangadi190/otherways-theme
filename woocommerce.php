<?php
/**
 * The template for displaying Woocommerce Product
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OW_Themes
 */

get_header(); ?>
<section id="main-contents">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-9">
        <div class="card shadow">
          <div class="card-body">
            <?php woocommerce_content(); ?>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <?php echo get_sidebar(); ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
