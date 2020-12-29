<?php
/**
 * Footer.
 * @copyright Copyright (C) 2020 Josef Pepik Kahoun, Filip Fufon Tronicek, Petr Kondor Kucera
 * @license GPL(GPLv3)
 */
?>

<!-- tato animace by se mela vypnout, kdyz je silvestr -->
<canvas id="canvas"></canvas>

<!-- tato animace by se mela zapnout, kdyz je silvestr -->
<?php

date_default_timezone_set('Europe/Prague');

$endDate = strtotime("January 1 2021");
$diff = ceil($endDate-time());

if($diff > 0) {
    echo '
        <div id="container"></div>
    ';
} else {
    echo '
        <!-- tato animace by se mela vypnout(spise zapnout), kdyz je silvestr -->
        <canvas id="canvas"></canvas>
    ';
}

?>

<style>
body {
    background-color: black;
}

#container {
  margin: 0 auto;
  border: 1px solid white;
  width: 100%;
  height: 30vw;
}
</style>

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
}

ffxinit(Fireworks, document.querySelector("#container"));
</script>