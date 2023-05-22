<?php
$title = 'jeu';
include './layout/header.php';
?>

<pre><?php var_dump($_GET) ?></pre>
<form action="">
    <label for="">Veuillez saisir le nombre</label>
    <input type="number">
    <button>Deviner</button>
</form>



<?php include './layout/footer.php'; ?>