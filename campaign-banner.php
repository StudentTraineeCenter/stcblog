<?php

/**
 * Header.
 * @copyright Copyright (C) 2020 Irena Andraskova, Petr Kucera
 * @license GPL(GPLv3)
 */
?>
<?php

date_default_timezone_set('Europe/Prague');

$endDate = strtotime("November 13 2020");
$diff = ceil($endDate-time());


if($diff > 0) {
    echo '
    <div class="campaign-banner">
        <p>Spustili jsme registraci do nového ročníku Microsoft STC! Registruj se do <date id="campaign-date">3. 11. 2020</date> na <a href="aka.ms/STC2021">aka.ms/STC2021</a>.</p>
    </div>';
}
