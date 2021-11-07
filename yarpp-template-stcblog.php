<?php
/** 
* YARPP Template: STC blog
* @author: Petr Kučera
* @description: style of STC blog related post.
*/
?>
<h2>Doporučené články</h2>
<section class="feed__posts">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <a class="excerpt" href="<?php the_permalink(); ?>">
                    <div class="excerpt__thumbnail">
                        <?php the_post_thumbnail([300, 200]); ?>
                    </div>
                    <div class="excerpt__text">
                        <h3 class="excerpt__text__title"><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                        <div class="excerpt__text__meta">
                            <span class="excerpt__text__meta__date"><?php echo get_the_date(); ?></span>
                            <span>•</span>
                            <span class="excerpt__text__meta__readtime">Doba čtení: <?php echo reading_time(); ?></span>
                        </div>
                    </div>
                </a>
            </article>
    <?php endwhile;
    endif; ?>
</section>