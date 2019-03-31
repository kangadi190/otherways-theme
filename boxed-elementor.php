<?php
/**
 * Template Name: Boxed Page For Elementor
 */
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>

<?php while( have_posts() ) : the_post(); ?>
<div id="main-content page-blank-for-elementor" class="container">
    <?php echo the_content(); ?>
</div>
<?php endwhile; ?>

    <?php wp_footer(); ?>
</body>
</html>
