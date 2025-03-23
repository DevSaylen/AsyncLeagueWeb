<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=dinomuseum", "root", "root");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Gestion des erreurs
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

session_start();

if (!empty($_POST['user_email']) && !empty($_POST['user_psw'])) {

    $mail = $_POST['user_email'];

    $sql = "SELECT * FROM user WHERE user_email = ?";
    $stmt = $pdo->prepare($sql);

    // Exécution de la requête
    if ($stmt->execute([$mail])) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($_POST['user_psw'], $user['user_psw'])) {

            $_SESSION['id'] = $user['user_id'];
            $_SESSION['username'] = $user['user_username'];
            $_SESSION['email'] = $user['user_email'];
            $_SESSION['profilimage'] = $user['user_image_profil'];

            header("Location: ../view/index.php?message=Connexion réussie.&status=success");
            exit;
        } else {
            header("Location: ../view/form_login.php?message=Identifiants incorrects.&status=error");
            exit;
        }
    } else {
        header("Location: ../view/form_login.php?message=Erreur lors de la connexion.&status=error");
        exit;
    }
} else {
    header("Location: ../view/form_login.php?message=Veuillez remplir tous les champs.&status=error");
    exit;
}
