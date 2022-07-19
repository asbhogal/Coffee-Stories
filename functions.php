<?php

    function coffeestories_register_styles () {
        $version = wp_get_theme()->get( 'Version' );
        wp_enqueue_style('coffeestories-stylesheet', get_template_directory_uri() . "/style.css", array(), $version, 'all');
        wp_enqueue_style('coffeestories-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
    }

    add_action( 'wp_enqueue_scripts', 'coffeestories_register_styles');

    function coffeestories_register_scripts () {
        $version = wp_get_theme()->get( 'Version' );
        wp_enqueue_script('coffeestories-jquery', "https://code.jquery.com/jquery-3.6.0.min.js", array(), '3.4.1', true);
        wp_enqueue_script('coffeestories-scrolltotopjs', get_template_directory() . "js/scroll-to-top.js", array(), $version, true);
    }

    add_action( 'wp_enqueue_scripts', 'coffeestories_register_scripts');
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="/wp-content/themes/coffeestories/js/scroll-to-top.js"></script>