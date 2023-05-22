<?php
$title = 'jeu';
$myster = 200;
include './layout/header.php';
?>

{# <pre><?php var_dump($_GET) ?></pre> #}

<?php
$input = $_GET['number'];

if ($input > $myster) : ?>
    Le nombre saisie est trop grand
<?php elseif ($input < $myster) : ?>
    Le nombre saisie est trop petit
<?php else : ?>
    Bravo!!!!! vous avez deviné le bon nombre
<?php endif ?>


<form action="/jeu.php" method="GET">
    <label for="">Veuillez saisir le nombre</label>
    <input type="number" name="number">
    <button type="submit">Deviner</button>
</form>



<?php include './layout/footer.php'; ?>