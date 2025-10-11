<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>
    <header>
        <div class="header-content">
            
            <h1 class="title"><?php bloginfo('name'); ?></h1>
            
            <p><?php bloginfo('description'); ?></p>
            <nav>
                <?php wp_nav_menu(array('theme_location' => 'hoofdmenu')); ?>

            </nav>
        </div>


    </header>