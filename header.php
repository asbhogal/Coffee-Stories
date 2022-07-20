<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?php the_title(); ?></title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Coffee Stories Blog">
    <meta name="author" content="https://amansinghbhogal.com/">
    <?php
        wp_head();
    ?>
</head>
<body>
<nav class="primary-navbar">
    <?php
        wp_nav_menu(
            array(
                'menu'              =>  'primary',
                'container'         =>  '',
                'theme_location'    =>  'primary'
            )
        )
    ?>
</nav>