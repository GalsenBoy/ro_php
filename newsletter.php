<?php
include './layout/header.php'; 
$file = __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'data.txt';
$email = $_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)): ?>
    <div class="alert alert-success container">
    L'adresse email <?=$email ?> est considérée comme valide.
    <?php file_put_contents($file,$email . PHP_EOL,FILE_APPEND); ?>
    </div>
    <?php else : ?>
        <div class="alert alert-danger container">
    L'adresse email <?=$email ?> est considérée comme invalide.
    </div>
<?php endif ?>

<form action="/newsletter.php" method="post">
    <div class="form-group container ">
        <input type="text" name="email"  class="form-control" placeholder="Veuillez entrer votre email">
        <button type="submit" class="btn btn-primary mt-4">S'abonner</button>
    </div>
</form>