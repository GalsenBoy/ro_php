<?php
$title = 'jeu';
$myster = 200;
include './layout/header.php';
?>


<?php
if (isset($_GET['number'])) :
    $input = $_GET['number'];
    if ($input > $myster) : ?>
        <div>
            <h3> Le nombre saisie est trop grand</h3>
        </div>
    <?php elseif ($input < $myster) : ?>

    <?php else : ?>
        <h3> Bravo!!!!! vous avez deviné le bon nombre</h3>
    <?php endif ?>
<?php endif ?>




<form action="/jeu.php" method="GET">
    <label for="">Veuillez saisir le nombre</label>
    <input type="texte" class="peer h-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" placeholder=" " name="number">
    <button type="submit" class="bg-blue-600 btn text-black hover:bg-sky-400">Deviner</button>
</form>



<?php include './layout/footer.php'; ?>