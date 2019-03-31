<!DOCTYPE html>
<html <?php echo language_attributes(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php echo wp_head(); ?>
</head>
<body <?php echo body_class(); ?>>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white" id="mainNav">
      <div class="container">

        <?php
  			$custom_logo_id = get_theme_mod( 'custom_logo' );
  			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        if( has_custom_logo() ) { ?>
          <a href="<?php echo home_url(); ?>" class="navbar-brand"><img src="<?php echo $logo[0]; ?>" height="30px"/></a>	
        <?php } else { ?>
          <a href="<?php echo home_url(); ?>" class="navbar-brand"><?php echo bloginfo('name'); ?></a>
        <?php } ?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu wordpress akan tampil di sini -->
        <?php if(has_nav_menu('primary')) : wp_nav_menu(
            array(
                'theme_location'  => 'primary',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'navbarNavDropdown',
                'menu_class'      => 'navbar-nav ml-auto',
                'fallback_cb'     => '',
                'menu_id'         => 'main-menu',
                'depth'           => 2,
                'walker'          => new OW_Walker(),
            )
        ); else : ?>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span> </a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">About</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">Services</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">Contact</a> </li>
            </ul>
        </div>
        <?php endif; ?>
      </div>
    </nav>
