<?php

if(!empty($_POST['fossil_method']) &&
    !empty($_POST['tools_used'])
){

    $pdo = new PDO("mysql:host=localhost;dbname=dinomuseum", "root", "root");

    // Vérification obligatoire de l'image
    if (!isset($_FILES['fossil_image']) || $_FILES['fossil_image']['error'] !== UPLOAD_ERR_OK) {
        header("Location: ../view/jeu-educ.php?message=Veuillez uploader une image valide&status=error");
        exit;
    }

    // Gestion de l'image
    $fileName = $_FILES["fossil_image"]["name"];
    $fileSize = $_FILES["fossil_image"]["size"];
    $tmpName = $_FILES["fossil_image"]["tmp_name"];

    $tabExtension = explode('.', $fileName);
    $extension = strtolower(end($tabExtension));
    $validExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'];

    if (!in_array($extension, $validExtensions)) {
        header("Location: ../view/jeu-educ.php?message=Format de fichier invalide (jpg, jpeg, png, gif, webp, svg uniquement)&status=error");
        exit;
    }

    if ($fileSize >= 2097152) {
        header("Location: ../view/jeu-educ.php?message=Le fichier doit être inférieur à 2 Mo&status=error");
        exit;
    }

    $safeUsername = preg_replace('/[^a-zA-Z0-9_-]/', '', $_POST['fossil_method']);
    $safePetName = preg_replace('/[^a-zA-Z0-9_-]/', '', $_POST['tools_used']);
    $newName = sha1(uniqid(mt_rand(), true)) . '_' . $safeUsername . '_' . $safePetName . '.' . $extension;

    $uploadDir = "../image/FossilGame/";
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $ok = move_uploaded_file($tmpName, $uploadDir . $newName);
    if (!$ok) {
        header("Location: ../view/jeu-educ.php?message=Problème pendant l'upload du fichier&status=error");
        exit;
    }

    $sql = "INSERT INTO game (fossil_method, tools_used, fossil_image) VALUE (?, ?, ?)";
    $verif = $pdo->prepare($sql);
    $success = $verif->execute([
        $_POST['fossil_method'],
        $_POST['tools_used'],
        $newName
    ]);

    if($success){
        header('Location: ../view/jeu-educ.php?message=Méthode de fouille partagée avec succès !&status=success');
        exit;
    } else {
        header('Location: ../view/jeu-educ.php?message=Erreur lors du partage de la méthode de fouille.&status=error');
        exit;
    }
} else {
    header('Location: ../view/jeu-educ.php?message=Veuillez remplir tous les champs requis.&success=error');
}
