<?php
$title = 'jeu';
$myster = 200;
include './layout/header.php';
?>


<?php
if (isset($_GET['number'])) :
    $input = (int)$_GET['number'];
    if ($input > $myster) : ?>
        <div class="alert alert-danger container mx 20">
            <h3> Le nombre saisi est trop grand</h3>
        </div>
    <?php elseif ($input < $myster) : ?>
        <div class="alert alert-danger container mx-20">
            <h3> Le nombre saisi est trop petit</h3>
        </div>
    <?php else : ?>
        <div class="alert alert-success container ">
            <h3> Bravo!!! vous avez deviné le bon nombre</h3>
        </div>
    <?php endif ?>
<?php endif ?>




<form action="/jeu.php" method="GET">
    <div class="form-group m-44 ">
        <label for="">Veuillez saisir le nombre</label>
        <input class="form-control " type="text placeholder=" name=" number">
    </div>
    <button type="submit" class="btn btn-primary m-2">Deviner</button>
</form>



<?php include './layout/footer.php'; ?>