<?php
/**
 * Remove empty paragraphs created by wpautop()
 * @author Ryan Hamilton
 * @link https://gist.github.com/Fantikerz/5557617
 */
function remove_empty_p( $content ) {
	$content = force_balance_tags( $content );
	$content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
	$content = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content );
	return $content;
}
add_filter('the_content', 'remove_empty_p', 20, 1);
add_theme_support( 'post-thumbnails' );
//set_post_thumbnail_size( 300, 200);

function reading_time() {
    $content = get_post_field( 'post_content', $post->ID );
    $word_count = str_word_count( strip_tags( $content ) );
    $readingtime = ceil($word_count / 200);

    switch($readingtime){
        case 1:
            $timer = " minuta";
            break;
        case 2:
        case 3:
        case 4: 
            $timer = " minuty";
            break;
        default:
            $timer = " minut";
            break;
    }

    $totalreadingtime = $readingtime . $timer;

    return $totalreadingtime;
}
?>