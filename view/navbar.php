<?php


session_start();

$pdo = new PDO("mysql:host=localhost;dbname=dinomuseum", "root", "root");

$stmt = $pdo->prepare("SELECT user_image_profil FROM user WHERE user_id = ?");
$stmt->execute([$_SESSION['id']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && !empty($user['user_image_profil'])) {
    $imagePath = "../image/ProfilUploads/" . htmlspecialchars($user['user_image_profil']);
} else {
    $imagePath = "../image/default.svg"; // Image par défaut si aucune image enregistrée
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script defer src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <title>Document</title>
</head>
<body class="bg-info">

<nav class="navbar navbar-expand-lg bg-light" data-bs-theme="light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">DinoMuseum</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Histoire des dinosaures
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jeu-educ.php">Jeu éducatif : Partage ta méthode de fouille !</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Réservations et visites guidées</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Horaires et tarifs</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mon compte</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="form_register.php">Inscription</a>
                        <a class="dropdown-item" href="form_login.php">Connexion</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../controller/logout.php">Déconnexion</a>
                    </div>
                </li>
            </ul>
            <img class="img-size rounded-circle" src="<?php echo $imagePath; ?>" alt="Image de profil">
        </div>
    </div>
</nav>

</body>
</html>

