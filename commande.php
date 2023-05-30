<?php

require './layout/header.php';
//Checkbox
$parfums = [
    'Fraise' => 4,
    'Chocolat' => 5,
    'Vanille' => 3
];

//Radio
$cornets = [
    'Pot' => 2,
    'Cornet' => 3,
];

//Checkbox
$supplements = [
    'Pépites de chocolat' => 1,
    'Chantilly' => 0.5
];

$total = 0;
$tt = 0;

if (isset($_GET)) {
    foreach ($_GET as $parfum => $value) {
        foreach ($value as $pf) {
            $tt += $parfums[$pf];
        }
    }
    $total += $tt;
    if (!empty($total)) {
        echo $total;
    }
}

?>

<form action="./commande.php" method="get">
    <div class="form-group m-3">
        <?php foreach ($parfums as $parfum => $prix) : ?>
            <div class="checkbox">
                <label for="">
                    <input type="checkbox" name="parfum[]" value="<?= $parfum ?>" id="">
                    <?= $parfum ?> - <?= $prix ?> €
                </label>
            </div>
        <?php endforeach ?>
    </div>
    <div class="form-group m-3">
        <?php foreach ($cornets as $cornet => $prix) : ?>
            <div class="radio">
                <label for="">
                    <input type="radio" name="cornet[]" value="<?= $cornet ?>" id="">
                    <?= $cornet ?> - <?= $prix ?> €
                </label>
            </div>
        <?php endforeach ?>
    </div>
    <div class="form-group m-3">
        <?php foreach ($supplements as $supplement => $prix) : ?>
            <div class="checkbox">
                <label for="">
                    <input type="checkbox" name="radio[]" value="<?= $supplement ?>" id="">
                    <?= $supplement ?> - <?= $prix ?> €
                </label>
            <?php endforeach ?>
            </div>
    </div>
    <button type="submit" class="btn btn-primary m-2">Commander</button>
</form>



<h2>Passer une commande</h2>

<?php require './layout/footer.php';
