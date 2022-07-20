<?php

    function coffeestories_menus() {
        $locations = array(
            'primary'   =>  "Primary Top Menu",
            'footer'    =>  "Footer Menu"
        );

        register_nav_menus($locations);
    }

    add_action('init', 'coffeestories_menus');

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

    function coffeestories_theme_support(){
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }

    add_action( 'after_setup_theme', 'coffeestories_theme_support' );

    function coffeestories_widget_areas(){
        register_sidebar(
            array(
                'id'                =>  'sidebar-1',
                'name'              =>  'Sidebar Area',
                'description'       =>  'Sidebar Widget Area',
                'before_title'      =>  '',
                'after_title'       =>  '',
                'before_widget'     =>  '',
                'after_widget'      =>  ''
            )
        );

        register_sidebar(
            array(
                'id'                =>  'footer-1',
                'name'              =>  'Footer Area',
                'description'       =>  'Footer Widget Area',
                'before_title'      =>  '',
                'after_title'       =>  '',
                'before_widget'     =>  '',
                'after_widget'      =>  ''
            )
        );
    }

    add_action( 'widgets_init', 'coffeestories_widget_areas');
?>