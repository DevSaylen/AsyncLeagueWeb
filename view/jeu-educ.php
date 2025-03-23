<?php

include 'navbar.php';

?>

<div class="container py-5">
    <header class="text-center mb-5">
        <h1 class="display-4">Jeu éducatif : Explore et Apprends !</h1>
        <p class="lead">Tu es un paléontologue en herbe ! Partage ta méthode unique pour fouiller et découvrir les fossiles de dinosaures. Décris les outils que tu utiliserais, les étapes de la fouille et comment tu reconstituerais les squelettes pour identifier les espèces disparues. Un moyen amusant et éducatif de collaborer et d'apprendre ensemble !</p>
    </header>
</div>

<div class="container">

    <form action="../controller/controller_add_jeu.php" method="POST" class="w-50 mx-auto mt-3" enctype="multipart/form-data">

        <label class="form-label mt-2" for="fossil_method">Ta méthode de fouille</label>
        <textarea class="form-control" name="fossil_method" placeholder="Décris ta méthode pour fouiller des fossiles de dinosaures..." required></textarea>

        <label class="form-label mt-2" for="tools_used">Outils utilisés</label>
        <input class="form-control" type="text" name="tools_used" placeholder="Liste les outils que tu utiliserais pour la fouille" required>

        <label class="form-label mt-2" for="fossil_image">Télécharge une image (facultatif)</label>
        <input class="form-control" type="file" name="fossil_image">

        <div class="text-center mt-1 mb-5">
            <input class="btn btn-success mt-4" name="ok" type="submit" value="Partage ta méthode de fouille">
        </div>

    </form>

</div>
