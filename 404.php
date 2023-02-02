<?php
/**
 * 404 error page.
 * @copyright Copyright (C) 2020 Ondrej Golasowski, Petr Kucera
 * @license GPL(GPLv3)
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory') . get_css_name();?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title><?php echo get_bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body class="ms-Fabric">
        <?php get_header(); ?>
        <main class="main">
            <header class="main__header">
                <h1>Jejda!</h1>
                <p>Někde se stala chyba. Tým kočiček na vyřešení problému už usilovně pracuje. Mezitím se koukněte na <a class="effect" href="<?php echo esc_url( home_url( '/' ) ); ?>">hlavní stránku</a>, nebo zkuste něco vyhledat.</p>
            </header>
            <img class="error--404" src="<?php echo get_theme_file_uri( 'assets/img/cat.svg'); ?>"/>
        </main>
        <?php get_footer(); ?>
    </body>
</html>