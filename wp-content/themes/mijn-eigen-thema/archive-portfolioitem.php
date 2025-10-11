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
                <div class="portfolio-content">
                <h2><?php the_title(); ?></h2>
                <h3><a href="<?php the_permalink(); ?>">Lees meer</a></h3>
                </div>
                <div><?php the_content(); ?></div>
                

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