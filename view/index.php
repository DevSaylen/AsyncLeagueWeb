<?php
    include '../view/navbar.php';
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AsyncLeague - Accueil</title>
</head>
<body class="bg-info">

<div class="container py-5">
    <header class="text-center mb-5">
        <h1 class="display-4">L'Histoire Fascinante des Dinosaures</h1>
        <p class="lead">Un voyage à travers le temps, du Trias au Crétacé</p>
    </header>

    <div class="row mb-5">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Qu'est-ce qu'un dinosaure?</h2>
                    <p class="card-text">
                        Les dinosaures formaient un groupe diversifié de reptiles qui dominèrent la Terre pendant environ 165 millions d'années,
                        du Trias supérieur jusqu'à la fin du Crétacé (il y a environ 230 à 65 millions d'années).
                        Contrairement à d'autres reptiles, les dinosaures avaient une posture verticale avec les pattes positionnées sous leur corps.
                    </p>
                    <p class="card-text">
                        Le terme "dinosaure" a été inventé en 1842 par le paléontologue britannique Sir Richard Owen,
                        à partir des mots grecs "deinos" (terrible) et "sauros" (lézard).
                    </p>
                </div>
            </div>
        </div>
    </div>

    <h2 class="text-center mb-4">Chronologie des Ères des Dinosaures</h2>

    <div class="timeline">
        <div class="timeline-item">
            <div class="card">
                <div class="card-header era-header">
                    <h3>Période du Trias (251-201 millions d'années)</h3>
                </div>
                <div class="card-body">
                    <p>
                        Les premiers dinosaures sont apparus au Trias supérieur, après l'extinction massive du Permien-Trias.
                        Au début, les dinosaures étaient relativement petits et rares, partageant la Terre avec d'autres reptiles.
                    </p>
                    <p>
                        <strong>Dinosaures notables:</strong> Eoraptor, Herrerasaurus, Coelophysis
                    </p>
                </div>
            </div>
        </div>

        <div class="timeline-item">
            <div class="card">
                <div class="card-header era-header">
                    <h3>Période du Jurassique (201-145 millions d'années)</h3>
                </div>
                <div class="card-body">
                    <p>
                        Pendant le Jurassique, les dinosaures se sont diversifiés et sont devenus les vertébrés dominants sur Terre.
                        C'est à cette époque que sont apparus les plus grands sauropodes, ainsi que les premiers oiseaux.
                    </p>
                    <p>
                        <strong>Dinosaures notables:</strong> Diplodocus, Brachiosaurus, Allosaurus, Stegosaurus, Archaeopteryx
                    </p>
                </div>
            </div>
        </div>

        <div class="timeline-item">
            <div class="card">
                <div class="card-header era-header">
                    <h3>Période du Crétacé (145-66 millions d'années)</h3>
                </div>
                <div class="card-body">
                    <p>
                        Le Crétacé a vu l'apogée de la diversification des dinosaures, avec l'émergence de nombreux groupes nouveaux.
                        Cette période s'est terminée brusquement avec l'extinction massive du Crétacé-Paléogène, causée probablement par l'impact d'un astéroïde.
                    </p>
                    <p>
                        <strong>Dinosaures notables:</strong> Tyrannosaurus rex, Triceratops, Velociraptor, Ankylosaurus, Spinosaurus
                    </p>
                </div>
            </div>
        </div>
    </div>

    <h2 class="text-center my-5">Groupes Principaux de Dinosaures</h2>

    <div class="row">
        <div class="col-md-4">
            <div class="card dino-card h-100">
                <img src="https://placehold.co/400x250" alt="Théropode" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">Théropodes</h4>
                    <p class="card-text">
                        Dinosaures carnivores bipèdes, dont les descendants sont les oiseaux modernes.
                        Exemples: T. rex, Velociraptor, Spinosaurus.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card dino-card h-100">
                <img src="https://placehold.co/400x250" alt="Sauropode" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">Sauropodes</h4>
                    <p class="card-text">
                        Herbivores quadrupèdes à long cou. Ils comptent parmi les plus grands animaux terrestres ayant jamais existé.
                        Exemples: Diplodocus, Brachiosaurus, Argentinosaurus.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card dino-card h-100">
                <img src="https://placehold.co/400x250" alt="Cératopsien" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">Cératopsiens</h4>
                    <p class="card-text">
                        Herbivores quadrupèdes avec des collerettes osseuses et des cornes.
                        Exemples: Triceratops, Protoceratops, Styracosaurus.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="card my-5">
        <div class="card-header bg-dark text-white">
            <h2 class="mb-0">L'Extinction des Dinosaures</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        Il y a environ 66 millions d'années, à la fin du Crétacé, environ 75% des espèces sur Terre ont disparu lors de l'extinction massive du Crétacé-Paléogène (K-Pg).
                    </p>
                    <p>
                        La théorie la plus acceptée est qu'un astéroïde d'environ 10 km de diamètre a frappé la Terre près de l'actuelle péninsule du Yucatán, au Mexique,
                        créant le cratère de Chicxulub.
                    </p>
                    <p>
                        Cet impact a provoqué des tsunamis, des incendies massifs, des tremblements de terre, et a projeté de grandes quantités de poussière et d'aérosols dans l'atmosphère,
                        bloquant la lumière du soleil et perturbant la photosynthèse pendant des années.
                    </p>
                </div>
                <div class="col-md-6">
                    <p>
                        Tous les dinosaures non-aviens ont péri. Cependant, certains dinosaures à plumes ont survécu et ont évolué pour devenir les oiseaux modernes.
                    </p>
                    <p>
                        Cette extinction a permis aux mammifères, jusqu'alors de petite taille et nocturnes, de se diversifier et d'occuper les niches écologiques laissées vacantes.
                    </p>
                    <p>
                        Ainsi, bien que l'âge des dinosaures soit terminé, leur héritage persiste à travers les oiseaux, qui sont techniquement des dinosaures théropodes.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <h3>L'Héritage des Dinosaures</h3>
        <p class="lead">
            Bien que les dinosaures non-aviens aient disparu il y a 66 millions d'années, leur impact sur notre planète et notre culture reste immense.
            Les fossiles de dinosaures nous aident à comprendre l'évolution de la vie et les changements climatiques du passé,
            tandis que les oiseaux modernes - les descendants directs des dinosaures théropodes - continuent de prospérer autour de nous.
        </p>
    </div>
</div>

</body>
</html>
