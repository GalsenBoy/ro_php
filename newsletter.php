<?php
include './layout/header.php';
$email = $_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)): ?>
    <div class="alert alert-success container">
    L'adresse email <?=$email ?> est considérée comme valide.
    </div>
<?php endif ?>

<form action="/newsletter.php" method="post">
    <div class="form-group container ">
        <input type="text" name="email"  class="form-control" placeholder="Veuillez entrer votre email">
        <button type="submit" class="btn btn-primary mt-4">S'abonner</button>
    </div>
</form>