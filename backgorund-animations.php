<?php

/**
 * Footer.
 * @copyright Copyright (C) 2020 Josef Kahoun, Filip Tronicek, Petr Kucera
 * @license GPL(GPLv3)
 */

date_default_timezone_set('Europe/Prague');

$endDate = strtotime("January 1 2021 4AM");
$diff = ceil($endDate - time());

if ($diff < 43200) {
  echo '
        <div id="container"></div>
    ';
} else {
  echo '
        <!-- tato animace by se mela vypnout, kdyz je silvestr -->
        <canvas id="canvas"></canvas>
    ';
}

?>

<style>
  /* body {
    background-color: black;
} */

  #container {
    margin: 0 auto;
    width: 100%;
    height: 90vh;
    position: fixed;
    bottom: 0;
    z-index: -50;
    border: none;
  }

  @media (prefers-reduced-motion) {
    #container {
      display: none;
    }
  }
</style>

<script src="https://cdn.jsdelivr.net/npm/fireworks-canvas@2.5.0/fireworks.min.js"> </script>

<script>
  function ffxinit(Fireworks, container) {
    const loadedTS = Date.now();
    const nowWorks = new Fireworks(container, {
      maxRockets: 20, //max # of rockets to spawn
      rocketSpawnInterval: 1000, // millisends to check if new rockets should spawn
      numParticles: 100, // number of particles to spawn when rocket explodes (+0-10)
    });
    nowWorks.resetSize();
    setInterval(() => {
      if (document.hasFocus()) nowWorks.fire();
    }, 300);

    // Resize fireworks when client resizes browser tab
    window.addEventListener('resize', () => nowWorks.resetSize())
  }

  ffxinit(Fireworks, document.getElementById("container"));
</script>