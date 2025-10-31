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
                <div class="character-container">
                    <div class="character-info">
                        <h2><?php the_title(); ?></h2>

                        <div class="chr-img">
                            <?php the_post_thumbnail(); ?>
                        </div>

                        <?php
                        if (get_field('age')) {
                            echo '<p><strong>Age:</strong> ' . esc_html(get_field('age')) . '</p>';
                        }

                        if (get_field('village')) {
                            echo '<p><strong>Village:</strong> ' . esc_html(get_field('village')->name) . '</p>';
                        }

                        $repeater_field = get_field('properties');
                        if ($repeater_field) {
                            foreach ($repeater_field as $row) {
                                echo '<p><strong>Property:</strong> ' . esc_html($row['property']) . '</p>';
                            }
                        }
                        ?>
                    </div>

                    <?php if (get_field('backstory')): ?>
                        <div class="character-backstory">
                            <h3>Backstory</h3>
                            <p><?php echo esc_html(get_field('backstory')); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
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