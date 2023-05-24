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
    <div>
        <input type="checkbox" name="parfums[]" value="Fraise" id="">Fraise
        <input type="checkbox" name="parfums[]" value="Chocolat" id="">Chocolat
        <input type="checkbox" name="parfums[]" value="Vanille" id="">Vanille
    </div>
    <div>
        <input type="radio" name="cornets" value="Pot" id="">Pot
        <input type="radio" name="cornets" value="Cornet" id="">Cornet
    </div>
    <div>
        <input type="checkbox" value="Pépites de chocolat " name="supplements[]" id="">Pépites de chocolat
        <input type="checkbox" name="supplements[]" value="Chantilly" id="">Chantilly
    </div>
    <button type="submit">Commander</button>
</form>





<h2>Passer une commande</h2>

<?php require './layout/footer.php';
