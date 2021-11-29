<?php
/**
 * Static page.
 * @copyright Copyright (C) 2020 Ondrej Golasowski, Petr Kucera
 * @license GPL(GPLv3)
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory') . get_css_name();?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title><?php wp_title('', true,'left'); ?> | <?php echo get_bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body class="ms-Fabric">

        <?php get_header(); ?>
        <?php
            if(is_subpage("adventni-kalendar")){
               include 'specific-pages/advent-banner.php';
            }
        ?>
               
        <main class="main post">
            <header class="main__header post__header <?php if(is_page( 'adventni-kalendar' )) echo "advent-header";?> <?php if(is_subpage("adventni-kalendar")) echo "advent-content"; ?>">
                <h1><?php the_post(); the_title(); ?></h1>
            </header> 

            <article class="post__content <?php if(is_subpage("adventni-kalendar")) echo "advent-content"; ?> <?php if(is_page( 'adventni-kalendar' )) echo "advent-content";?>">
                <?php if(is_page( 'adventni-kalendar' )){
                        include 'specific-pages/advent.php';
                    }
                ?>
                <?php the_content(); ?>
            </article>
        </main>

        <?php get_footer(); ?>
    </body>
</html>