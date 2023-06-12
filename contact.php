<?php
include './layout/header.php';
require_once './config.php';

?>

<h2>Les horaires d'ouverture</h2>
<div class="alert alert-success container mb-6">
        <h3 class="text-center">Le magasin est ouvert</h3>
</div>

<ul class="list-group">
    <?php foreach (JOURS as $index => $jour) : ?>
        <?php if (empty(CRENEAUX[$index][0]) && empty(CRENEAUX[$index][1])) : ?>
            <li class=" alert alert-danger"><?= $jour ?> : fermé</li>
        <?php endif ?>
        <?php if (isset(CRENEAUX[$index][0])) : ?>
            <?php if ($index + 1 === (int)date('w')) : ?>
                <li class="alert alert-success"><?= $jour ?> : <?= CRENEAUX[$index][0][0] ?> - <?= CRENEAUX[$index][0][1] ?>
                    <?php if (isset(CRENEAUX[$index][1])) : ?>
                        / <?= CRENEAUX[$index][1][0] ?> - <?= CRENEAUX[$index][1][1] ?>
                </li>
            <?php endif ?>
        <?php else : ?>
            <li class="alert alert-light"><?= $jour ?> : <?= CRENEAUX[$index][0][0] ?> - <?= CRENEAUX[$index][0][1] ?>
                <?php if (isset(CRENEAUX[$index][1])) : ?>
                    / <?= CRENEAUX[$index][1][0] ?> - <?= CRENEAUX[$index][1][1] ?>
            </li>
        <?php endif ?>
    <?php endif ?>
<?php endif ?>
<?php endforeach ?>
</ul>
<?php include './layout/footer.php';
