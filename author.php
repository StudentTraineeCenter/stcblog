<?php
/**
 * Author page.
 * @copyright Copyright (C) 2020 Ondrej Golasowski, Petr Kucera
 * @license GPL(GPLv3)
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory') . get_css_name();?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php the_author(); ?> | <?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body class="ms-Fabric">
        <?php get_header(); ?>

        <main class="main author">
            <section class="author__info">
                <div class="author__info__photo"><?php echo get_avatar( get_the_author_meta( 'ID' )); ?></div>
                <div class="author__info__text">
                    <h1 class="author__info__text__name"><?php the_author(); ?></h1>
                    <?php if(!(empty(get_the_author_meta('description')))): ?>
                        <p class="author__info__text__description"><?php echo get_the_author_meta('description') ?></p>
                    <?php endif; ?>
                    <div class="author__info__text__soc">
                        <?php if(!(empty(get_the_author_meta('linkedin')))):?>
                            <a id="linked" target="_blank" href="<?php echo get_the_author_meta( 'linkedin', $post->post_author);?>">&#xeac9;</a>
                        <?php endif; ?>
                        <?php if(!(empty(get_the_author_meta('instagram')))):?>
                            <a id="insta" target="_blank" href="<?php echo get_the_author_meta( 'instagram', $post->post_author);?>">&#xea92;</a>
                        <?php endif; ?>
                        <?php if(!(empty(get_the_author_meta('facebook')))):?>
                            <a id="fb" target="_blank" href="<?php echo get_the_author_meta( 'facebook', $post->post_author);?>">&#xea91;</a>
                        <?php endif; ?>
                        <?php if(!(empty(get_the_author_meta('url')))):?>
                            <a id="url" target="_blank" href="<?php echo get_the_author_meta( 'url', $post->post_author);?>">&#xe9c9;</a>
                        <?php endif; ?>
                        <?php if(!(empty(get_the_author_meta('soundclound')))):?>
                            <a id="soundclound" target="_blank" href="<?php echo get_the_author_meta( 'soundclound', $post->post_author);?>">&#xeac3;</a>
                        <?php endif; ?>
                        <?php if(!(empty(get_the_author_meta('twitter')))):?>
                            <a id="twitter" target="_blank" href="https://twitter.com/<?php echo get_the_author_meta( 'twitter', $post->post_author);?>">&#xea96;</a>
                        <?php endif; ?>
                        <?php if(!(empty(get_the_author_meta('youtube')))):?>
                            <a id="youtube" target="_blank" href="<?php echo get_the_author_meta( 'youtube', $post->post_author);?>">&#xea9d;</a>
                        <?php endif; ?>
                        <?php if(!(empty(get_the_author_meta('wikipedia')))):?>
                            <a id="wikipedia" target="_blank" href="<?php echo get_the_author_meta( 'wikipedia', $post->post_author);?>">&#xeac8;</a>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <section class="feed__posts">
                <h2>Články</h2>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article>
                        <a class="excerpt" href="<?php the_permalink(); ?>">
                            <div class="excerpt__thumbnail">
                                <?php the_post_thumbnail([300, 200]); ?>
                            </div>
                            <div class="excerpt__text">
                                <h2 class="excerpt__text__title"><?php the_title(); ?></h2>
                                <?php the_excerpt(); ?>
                                <div class="excerpt__text__meta">
                                    <span class="excerpt__text__meta__date"><?php echo get_the_date(); ?></span>
                                    <span>•</span>
                                    <span class="excerpt__text__meta__readtime">Doba čtení: <?php echo reading_time(); ?></span>
                                </div>
                            </div>
                        </a>    
                    </article>
                <?php endwhile; endif; ?>
            </section>
            <footer class="feed__footer">
                <?php include "pagination.php" ?>
            </footer>
        </main>
        <?php get_footer(); ?>
    </body>
</html>