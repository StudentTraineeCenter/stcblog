<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta ullam numquam ad et adipisci ratione aut iste atque corrupti voluptatum, ipsam eos voluptas illum molestias quas explicabo, dolorum perferendis nulla!</p>

<button>Pravidla a dalsi informace</button>

<div id="advent-calendar"></div>
<div id="advent-background"><div id="snow"></div></div>

<script>
   let imgUrl = '<?php echo get_bloginfo('template_directory');?>/assets/img/advent/';
</script>
<script src="<?php echo get_bloginfo('template_directory');?>/assets/js/advent.js"></script>
<style>
   #advent-background #snow {
      background-image: url("<?php echo get_bloginfo('template_directory');?>/assets/img/background_snowflakes.svg");
   }
</style>
