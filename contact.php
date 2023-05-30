<?php
include './layout/header.php';
require_once './config.php';

?>

<h2>Les horaires d'ouverture</h2>
<ul>
    <?php foreach (JOURS as $index => $jour) : ?>
        <?php if (isset(CRENEAUX[$index])) : ?>
            <?php foreach (CRENEAUX[$index] as $creneau) : ?>
                <li><?= $jour ?> : <?= $creneau[0] ?> - <?= $creneau[1] ?></li>
            <?php endforeach ?>
        <?php endif ?>
    <?php endforeach ?>
</ul>

<?php include './layout/footer.php';
