<?php

/**
 * Advent banner
 * @copyright Copyright (C) 2021 Petr Kucera
 * @license GPL(GPLv3)
 */
?>

<script>
   document.addEventListener("DOMContentLoaded", () => {
      adventBanner("2021-12-01", "2021-12-25");
   });

   const headerEl = document.getElementById("header");

   function adventBanner(s_Date, e_Date) {
      const startDate = new Date(s_Date);
      const endDate = new Date(e_Date);
      const now = new Date();

      if ((now < endDate) && (now > startDate)) {
         renderAdventBanner();
      }
   }

   function renderAdventBanner() {
      headerEl.insertAdjacentHTML(
         "afterend",
         '<a href="https://studuj.digital/adventni-kalendar/" target="_blank" class="advent-banner"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/advent_banner.svg"></a>'
      );
   }
</script>
