<?php

/**
 * Advent event page
 * @copyright Copyright (C) 2021 Petr Kucera
 * @license GPL(GPLv3)
 */
?>

<p class="advent-description">Zkrať si s námi čekání na Ježíška a&nbsp;vyhraj odměny ze&nbsp;světa Minecraftu. 24 dní, 24 článků a&nbsp;18 úkolů, to vše jsme si pro tebe připravili, tak neváhej a&nbsp;pusť se do toho!</p>

<div class="advent-center">
<a href="#rules"><button class="advent-botton">Pravidla a další informace</button></a>
</div>
<div id="advent-calendar"></div>
<div id="advent-border"></div>
<div id="advent-snow"></div>
<div id="advent-background"></div>
<div id="advent-white-background"></div>

<script>
   let imgUrl = '<?php echo get_bloginfo('template_directory');?>/assets/img/advent/';
</script>
<script src="<?php echo get_bloginfo('template_directory');?>/assets/js/advent.js"></script>
<style>
   #advent-snow {
      background-image: url("<?php echo get_bloginfo('template_directory');?>/assets/img/background_snowflakes.svg");
   }
   @font-face {font-family:"Minecraft";src:url("<?php echo get_bloginfo('template_directory');?>/assets/fonts/minecraft.ttf") format("truetype");font-weight:normal;font-style:normal;}
</style>