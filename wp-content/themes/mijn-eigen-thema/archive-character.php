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
                <div>
                    <h2><?php the_title(); ?></h2>
                    <img class="chr-img" <?php the_post_thumbnail(); ?> 
                    <h3><a href="<?php the_permalink(); ?>">Lees meer</a></h3>
                </div>
                <?php


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