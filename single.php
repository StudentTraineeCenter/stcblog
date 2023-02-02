<?php
/**
 * Single article display.
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
               
        <main class="main post">

            <a id="backTop" onclick="goTop()">
                <i class="ms-Icon ms-Icon--ChevronUp"></i>
            </a>

            <header class="main__header post__header">
                <h1><?php the_post(); the_title(); ?></h1>
                <div class="post__header__meta">
                    <div class="post__header__meta__date__group">
                        <span class="post__header__meta__date"><?php echo get_the_date(); ?></span>
                        <span>•</span>
                        <span class="post__header__meta__category"><?php echo the_category(', '); ?></span>
                    </div>
                    <?php if(get_the_tags() != ''):?>
                        <span class="post__header__meta__tags">
                            <?php the_tags('',' ',''); ?>
                        </span>  
                    <?php endif;?>    
                </div>
            </header> 

            <article class="post__content">
                <?php the_content(); ?>
            </article>
            <footer class="post__footer">
                <?php include 'biography.php';?>
            </footer>
            <?php related_posts();?>  
        </main>

        <?php get_footer(); ?>
    </body>
</html>