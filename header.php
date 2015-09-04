<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <title>
        <?php echo wp_title();?>
        </title>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
        <?php wp_head(); ?>

    </head>
    <body <?php body_class( $class ); ?>>
    	<header>
            <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
            <div class="subpage-menu">
                <a href="<?php echo site_url(); ?>">
                    <div class="logo">
                        <img src="<?php echo get_stylesheet_directory_uri();?>//img/drop-white.svg" alt="enzgold">
                    </div>
                </a>
                <?php wp_nav_menu( array( 'theme_location' => 'mobile' ) ); ?>
                <div class="toggle">
                    <span class="toggler">Menu</span>
                </div>
            </div>
        </header>
	   