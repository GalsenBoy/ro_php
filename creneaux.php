<?php
include './layout/header.php';
require_once './config.php';
$creneaux = [];

foreach (CRENEAUX as $key) {
    // var_dump($key);
    $creneaux[] = $key;
}
?>


<H1>Les horaires d'ouvertures</H1>
<div>
    <?php foreach ($creneaux as $creneau) : ?>
        De <?= $creneau[0] ?>h à <?= $creneau[1] ?>h
    <?php endforeach ?>
</div>


<?php
include './layout/footer.php';
