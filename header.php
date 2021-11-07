<?php
/**
 * Header.
 * @copyright Copyright (C) 2020 Ondrej Golasowski, Petr Kucera
 * @license GPL(GPLv3)
 */
?>
<header class="header ms-depth-8" id="header">
    <section class="header__main" id="section_header">
        <a class="header__main__stclogo" id="logo_stclogo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img class="header__main__stclogo__std" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/stclogo_std.svg"/>
            <img class="header__main__stclogo__small" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/stclogo_small.svg"/>
        </a>
        <div class="header__main__forms">
            <?php get_search_form(); ?>
            <a class="header__main__forms__menuButton" id="button_menu">
                <i class="ms-Icon ms-Icon--GlobalNavButton closed" aria-hidden="true"></i>
                <i class="ms-Icon ms-Icon--Cancel open" aria-hidden="true"></i>
            </a>
        </div>
    </section>
    <nav class="header__nav" id="section_menu">
        <?php wp_nav_menu(); ?>
    </nav>
</header>