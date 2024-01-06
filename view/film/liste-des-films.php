
<html>
<head>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<section class="d-grid gap-2 col-6 mx-auto container px-4 ">
<h1 class="h1"> Voici la liste des Films</h1> <br>
<div class="d-grid gap-2 ">
<!-- Bouton Retour a la page d'Acceuil -->


<!-- Bouton Ajouter -->
<a href="http://127.0.1.1/mes-projets/contoller-model-view/cinema/film/f_nouveau_film" class="btn btn-light btn-sm"> Nouveau </a> <br><br>
        </div >
<!-- Affichage -->
<?php
foreach ($films as $film) { ?>
<figure class="figure">
        <figcaption class="figure-caption">
                <h2><?= $film['titre'] ?> </h2>
        </figcaption>
        <img src="../images/<?= $film['affiche'] ?>" class="figure-img img-fluid rounded" alt=""> 
</figure>

<div class="d-grid gap-2 d-md-block">
        <!-- Bouton Afficher Détaille Film -->
        <!-- $film['id_film'] dans action c'est pour dir quand veut modifier f_modifier_film/1   -->
        <a href="http://127.0.1.1/mes-projets/contoller-model-view/cinema/film/f_affiche_film/<?= $film['id_film'] ?>" class="btn btn-success btn-sm"> Détail </a>

        <!-- Bouton Modifier -->
        <!-- $film['id_film'] dans action c'est pour dir quand veut modifier f_modifier_film/1   -->
        <a href="http://127.0.1.1/mes-projets/contoller-model-view/cinema/film/f_modifier_film/<?= $film['id_film'] ?>" class="btn btn-warning btn-sm"> Modifier </a>

        <!-- Bouton Supprimer -->
        <form action="http://127.0.1.1/mes-projets/contoller-model-view/cinema/film/supprimer_film" method="post">
                <input type="hidden" name="id" value="<?= $film['id_film'] ?>" />
                <input type="submit" value="Supprimer" class="btn btn-danger btn-sm">
        </form>
        <!-- <a href="http://127.0.1.1/mes-projets/contoller-model-view/cinema/film/supprimer_film/< ?= $film['id_film'] ?>" class="btn btn-danger btn-sm"> Supprimer </a> <br><br> -->
</div >
<?php } ?>
</section>
</body>
</html>