<?php
/**
 * Add biography into single
 * Using Co-authors plugin
 * @copyright Copyright (C) 2020 Petr Kucera
 * @license GPL(GPLv3)
 */

if(function_exists('coauthors_posts_links')){
    global $post;
        $author_id=$post->post_author;
        foreach (get_coauthors() as $coauthor): ?>
            <section class="post__footer__author">
                <div class="post__footer__author__photo"><?php echo get_avatar( $coauthor->user_email, '96' ); ?></div>
                <div class="post__footer__author__data">
                    <h2><a rel="author" class="post__footer__author__data__name" href="<?php echo get_author_posts_url($coauthor->ID, $coauthor->user_nicename); ?>"><?php echo $coauthor->display_name; ?></a></h2>
                    <p class="post__footer__author__data__description"><?php echo $coauthor->description; ?></p>
                </div>
            </section>
        <?php endforeach;
}
?>