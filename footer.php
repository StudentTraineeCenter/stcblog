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
        <a style="display: none;" href="<?php echo esc_url( home_url( '/stc.php' ) ); ?>">tv</a>
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
<?php include 'cookies-banner.php';?>
<?php include 'cookies-notice.php';?>
<canvas id="canvas"></canvas>
<?php wp_footer(); ?>
<script src="<?php echo get_bloginfo('template_directory');?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory');?>/assets/js/canvas.js"></script>
<script src="<?php echo get_bloginfo('template_directory');?>/assets/js/cookies-enabler.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory');?>/assets/js/cookies-setting.js"></script>
<script src="<?php echo get_bloginfo('template_directory') . get_js_name();?>"></script>
<?php if(is_user_logged_in()!==true){ ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154876830-1"></script>
<script type="text/plain" class="ce-script">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-154876830-1');
</script>
<!-- Google Tag Manager -->
<script type="text/plain" class="ce-script">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5XFHF3M');</script>
<!-- End Google Tag Manager -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5XFHF3M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Facebook Pixel Code -->
<script type="text/plain" class="ce-script">
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '221815212382434');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=221815212382434&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<!-- Microsoft Clarity -->
<script type="text/plain" class="ce-script">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "4blm2hsbtx");
</script>
<!-- End Microsoft Clarity -->
<?php } ?>
