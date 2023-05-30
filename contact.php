<?php
include './layout/header.php';
require_once './config.php';

?>

<h2>Les horaires d'ouverture</h2>
<ul>
    <?php foreach (JOURS as $index => $jour) : ?>
        <?php if (isset(CRENEAUX[$index][0])) : ?>
            <li><?= $jour ?> : <?= CRENEAUX[$index][0][0] ?> - <?= CRENEAUX[$index][0][1] ?>
                <?php if (isset(CRENEAUX[$index][1])) : ?>
                    <?= CRENEAUX[$index][1][0] ?> - <?= CRENEAUX[$index][1][1] ?>
            </li>
        <?php endif ?>
    <?php endif ?>
<?php endforeach ?>
</ul>

<?php include './layout/footer.php';
