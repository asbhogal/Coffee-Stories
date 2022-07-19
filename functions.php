<?php

    function coffeestories_register_style () {
        $version = wp_get_theme()->get( 'Version' );
        wp_enqueue_style('coffeestories-stylesheet', get_template_directory_uri() . "/style.css", array(), $version, 'all');
        wp_enqueue_style('coffeestories-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
    }

    add_action( 'wp_enqueue_scripts', 'coffeestories_register_style')

?>