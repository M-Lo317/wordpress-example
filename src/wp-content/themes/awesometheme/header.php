<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Awesome Theme</title>
        <?php wp_head(); ?>
    </head>

    <?php

        if( is_front_page() ):
            $awesome_classes = array( 'awesome-class', 'my-class' );
        else:
            $awesome_classes = array( 'no-awesome-class' );
        endif;

    ?>

    <body <?php body_class( $awesome_classes ); ?>>
        
        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>