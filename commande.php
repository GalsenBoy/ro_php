<?php
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

require './layout/header.php';
?>

<pre><?php var_dump($_GET) ?></pre>

<form action="./commande.php" method="get">
    <div class="form-group">
        <?php foreach ($parfums as $parfum => $prix) : ?>
            <div class="checkbox">
                <label for="">
                    <input type="checkbox" name="parfum[]" value="<?= $parfum ?>" id="">
                    <?= $parfum . " " . $prix ?>
                </label>
            </div>
        <?php endforeach ?>
    </div>
    <div class="form-group">
        <input type="radio" class="form-check-input" name="cornets" value="Pot" id="">
        <label for="" class="form-check-label">Pot</label>
        <input type="radio" class="form-check-input" name="cornets" value="Cornet" id="">
        <label for="" class="form-check-label">Cornet</label>
    </div>
    <div class="form-group">
        <input type="checkbox" class="form-check-input" value="Pépites de chocolat " name="supplements[]" id="">
        <label class="form-check-label" for="">Pépites de chocolat</label>
        <input type="checkbox" class="form-check-input" name="supplements[]" value="Chantilly" id="">
        <label class="form-check-label" for="">Chantilly</label>
    </div>
    <button type="submit" class="btn btn-primary m-2">Commander</button>
</form>



<h2>Passer une commande</h2>

<?php require './layout/footer.php';
