<?php

$pdo = new PDO("mysql:host=localhost;dbname=u274935610_dinomuseum", "u274935610_graven", "Gravenilvec12345");

if (!empty($_POST['user_username']) &&
    !empty($_POST['user_email']) &&
    !empty($_POST['user_psw']))
{

    // Validation supplémentaire pour l'email
    if (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
        header("Location: ../view/form_register.php?message=Email invalide&status=error");
        exit;
    }

    // Hachage du mot de passe
    $psw = password_hash($_POST["user_psw"], PASSWORD_ARGON2I);

    // Vérification obligatoire de l'image
    if (!isset($_FILES['user_image_profil']) || $_FILES['user_image_profil']['error'] !== UPLOAD_ERR_OK) {
        header("Location: ../view/form_register.php?message=Veuillez uploader une image valide&status=error");
        exit;
    }

    // Gestion de l'image
    $fileName = $_FILES["user_image_profil"]["name"];
    $fileSize = $_FILES["user_image_profil"]["size"];
    $tmpName = $_FILES["user_image_profil"]["tmp_name"];

    $tabExtension = explode('.', $fileName);
    $extension = strtolower(end($tabExtension));
    $validExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'];

    if (!in_array($extension, $validExtensions)) {
        header("Location: ../view/form_register.php?message=Format de fichier invalide (jpg, jpeg, png, gif, webp, svg uniquement)&status=error");
        exit;
    }

    if ($fileSize >= 2097152) {
        header("Location: ../view/form_register.php?message=Le fichier doit être inférieur à 2 Mo&status=error");
        exit;
    }

    $safeUsername = preg_replace('/[^a-zA-Z0-9_-]/', '', $_POST['user_username']);
    $safePetName = preg_replace('/[^a-zA-Z0-9_-]/', '', $_POST['user_pet_name']);
    $newName = sha1(uniqid(mt_rand(), true)) . '_' . $safeUsername . '_' . $safePetName . '.' . $extension;

    $uploadDir = "../image/ProfilUploads/";
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $success = move_uploaded_file($tmpName, $uploadDir . $newName);
    if (!$success) {
        header("Location: ../view/form_register.php?message=Problème pendant l'upload du fichier&status=error");
        exit;
    }

    try {
        $sql = "INSERT INTO user (user_username, user_email, user_psw, user_image_profil) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $verif = $stmt->execute([
            $_POST["user_username"],
            $_POST["user_email"],
            $psw,
            $newName
        ]);

        if ($verif) {
            header("Location: ../view/form_register.php?message=Inscription réussie&status=success");
            exit;
        } else {
            header("Location: ../view/form_register.php?message=Erreur serveur&status=error");
            exit;
        }
    } catch (Exception $e) {
        header("Location: ../view/form_register.php?message=" . urlencode($e->getMessage()) . "&status=error");
        exit;
    }
} else {
    header("Location: ../view/form_register.php?message=Veuillez remplir tous les champs correctement&status=error");
    exit;
}

?>
