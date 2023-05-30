<?php
include './layout/header.php';
require_once './config.php';

?>

<h2>Les horaires d'ouverture</h2>
<ul class="list-group">
    <?php foreach (JOURS as $index => $jour) : ?>
        <?php if (empty(CRENEAUX[$index][0]) && empty(CRENEAUX[$index][1])) : ?>
            <li class="list-group-item"> <?= $jour ?> : fermé
            <?php endif ?>
            <?php if (isset(CRENEAUX[$index][0])) : ?>
            <li class="list-group-item"><?= $jour ?> : <?= CRENEAUX[$index][0][0] ?>h - <?= CRENEAUX[$index][0][1] ?>h
                <?php if (isset(CRENEAUX[$index][1])) : ?>
                    / <?= CRENEAUX[$index][1][0] ?>h - <?= CRENEAUX[$index][1][1] ?>h
            </li>
        <?php endif ?>
    <?php endif ?>
<?php endforeach ?>
</ul>

<?php include './layout/footer.php';
