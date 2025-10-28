<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>
    <?php get_header(); ?>

    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/narutomain1.png'); ?>" alt="Naruto body img"
        class="body-decor">

    <div class="main-content">
        <div class="text2">
            <p>
                CLICK THE CHARACTERS BUTTON TO LEARN ABOUT ALL THE NARUTO CHARACTERS!
            </p>
        </div>
        <nav class="character-btn">
            <?php wp_nav_menu(array('theme_location' => 'body')); ?>

        </nav>

        <div class="news-container">

            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/narutomain2.png'); ?>"
                alt="Naruto body img" class="body-decor1">

            <div class="news-text">CLICK ON THE NEWS BUTTON TO VIEW ALL THE NEWS ABOUT NARUTO!<br>
                <?php wp_nav_menu(array('theme_location' => 'news')); ?>
                <div class="image3">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/naruto4.png'); ?>"
                        alt="Naruto body img" class="body-decor2">
                </div>
            </div>

        </div>

    </div>

    <div id="content">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                ?>
                
                <?php
            endwhile;
        else:
            echo '<p>Geen berichten gevonden.</p>';
        endif;
        ?>



    </div>

    <?php get_footer(); ?>
</body>

</html>