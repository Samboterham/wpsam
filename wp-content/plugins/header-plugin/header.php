<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Jaro:opsz@6..72&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <div class="header-content">

            <h1 class="title"><?php bloginfo('name'); ?></h1>

            <div class="header-info">
                <div class="header-text">🍥NARUTO WEBSITE🍥</div><br>
                <hr class="header-line">
                <nav>
                <p><?php bloginfo('description'); ?></p>
                    <?php wp_nav_menu(array('theme_location' => 'hoofdmenu')); ?>

                </nav>
            </div>
        </div>
        <img
            src="<?php echo esc_url( get_template_directory_uri() . '/images/zwartwitblokken.png' ); ?>"
            alt="Zwart wit blokken"
            class="header-decor"
        >


    </header>