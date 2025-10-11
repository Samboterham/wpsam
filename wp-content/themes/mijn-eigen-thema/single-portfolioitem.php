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
    <div id="content">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                ?>
                <h2><?php the_title(); ?></h2>
                <div><?php the_content(); ?></div>
                <?php
                if (get_field('githublink')) {
                    echo '<p>githublink: ' . get_field('githublink') . '</p>';
                }
                if (get_field('email')) {
                    echo '<p>email: ' . get_field('email') . '</p>';
                }
                if (get_field('gebruikte-code')) {
                    echo '<p>gebruikte-code: ' . get_field('gebruikte-code') . '</p>';
                }
                 if (get_field('link-naar-live')) {
                    echo '<p>link-naar-live: ' . get_field('link-naar-live') . '</p>';
                }
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