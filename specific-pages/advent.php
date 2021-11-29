
<p class="advent-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta ullam numquam ad et adipisci ratione aut iste atque corrupti voluptatum, ipsam eos voluptas illum molestias quas explicabo, dolorum perferendis nulla!</p>

<div class="advent-center">
<button class="advent-botton">Pravidla a dalsi informace</button>
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
   @font-face {font-family:"Minecraft";src:url("<?php echo get_bloginfo('template_directory');?>/assets/fonts/minecraft/minecraft.eot?") format("eot"),url("<?php echo get_bloginfo('template_directory');?>/assets/fonts/minecraft/minecraft.woff") format("woff"),url("<?php echo get_bloginfo('template_directory');?>/assets/fonts/minecraft/minecraft.ttf") format("truetype"),url("<?php echo get_bloginfo('template_directory');?>/assets/fonts/minecraft/minecraft.svg#Minecraft") format("svg");font-weight:normal;font-style:normal;}
</style>