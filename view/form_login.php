<?php

include 'navbar.php';

?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AsyncLeague - Inscription</title>
</head>
<body class="bg-info">

<div class="container">
    <h2 class="text-center fw-bold mt-5">Connexion</h2>

    <form action="../controller/login_controller.php" method="POST" class="w-50 mx-auto mt-3" enctype="multipart/form-data">

        <label class="form-label mt-2" for="user_email">Adresse email</label>
        <input class="form-control" type="email" name="user_email" placeholder="Adresse email" required>

        <label class="form-label mt-2" for="user_psw">Mot de passe</label>
        <input class="form-control" type="password" name="user_psw" placeholder="Mot de passe" required>

        <div class="text-center mt-1 mb-5">
            <input class="btn btn-success mt-4" name="ok" type="submit" value="S'inscrire">
        </div>

    </form>

    <div class="text-center">
        <a class="fw-bold text-decoration-underline" href="form_register.php">Créez un compte en vous inscrivant dès maintenant.</a>
    </div>

</div>

</body>
</html>

