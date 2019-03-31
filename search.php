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
        <h1 class="text-white"><?php echo __('Hasil Pencarian', 'otherways'); ?></h1>
        <?php echo bootstrap_breadcrumb(); ?>
    </div>
</header>

<?php echo get_footer(); ?>
