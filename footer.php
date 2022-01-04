<?php
/**
 * Footer.
 * @copyright Copyright (C) 2020 Ondrej Golasowski, Petr Kucera
 * @license GPL(GPLv3)
 */
?>
<footer class="footer">
    <section class="footer__info">
        <?php echo get_theme_mod('settings_footer_copyright', '');?>
        <?php if(get_theme_mod('settings_footer_gdpr_text', '') != "" && get_theme_mod('settings_footer_gdpr_link', '') != "") :?>
            <p class="delimiter">·</p>
            <a href="<?php echo get_theme_mod('settings_footer_gdpr_link', '');?>"><?php echo get_theme_mod('settings_footer_gdpr_text', '');?></a>
        <?php endif; ?>
        <?php if(get_theme_mod('settings_footer_MarCommail', '') != "") :?>
            <p class="delimiter">·</p>
            <a href="mailto:<?php echo get_theme_mod('settings_footer_MarCommail', '');?>"><?php echo get_theme_mod('settings_footer_MarCommail', '');?></a>
        <?php endif; ?>
    </section>
    <section class="footer__socials">
        <a style="display:none" href="https://studuj.digital/stc.php">About STC</a>
        <?php if(esc_url(get_theme_mod('settings_footer_logo1')) != "") :  ?>
            <a class="footer__socials__icon" href=<?php echo esc_url(get_theme_mod('settings_footer_link1'))?>><img src=<?php echo esc_url(get_theme_mod('settings_footer_logo1'))?> alt=""/></a>
        <?php endif; ?>
        <?php if(esc_url(get_theme_mod('settings_footer_logo2')) != "") :  ?>
            <a class="footer__socials__icon" href=<?php echo esc_url(get_theme_mod('settings_footer_link2'))?>><img src=<?php echo esc_url(get_theme_mod('settings_footer_logo2'))?> alt=""/></a>
        <?php endif; ?>
        <?php if(esc_url(get_theme_mod('settings_footer_logo3')) != "") :  ?>
            <a class="footer__socials__icon" href=<?php echo esc_url(get_theme_mod('settings_footer_link3'))?>><img src=<?php echo esc_url(get_theme_mod('settings_footer_logo3'))?> alt=""/></a>
        <?php endif; ?>
    </section>
</footer>
<?php if(!is_page( 'adventni-kalendar' )){
                        include 'specific-pages/backgorund-animations.php';
                    }
                ?>
<?php wp_footer(); ?>
<script src="<?php echo get_bloginfo('template_directory');?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory');?>/assets/js/canvas.js"></script>
<script src="<?php echo get_bloginfo('template_directory') . get_js_name();?>"></script>