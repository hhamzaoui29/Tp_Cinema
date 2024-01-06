<html>
<head>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<section class="d-grid gap-2 col-6 mx-auto container px-4 ">
<h1 class="h1"> Voici la liste des Genres</h1>
<div class="d-grid gap-2 ">
                
                <!-- Bouton Ajouter Un Genre -->
                <a href="http://127.0.1.1/mes-projets/contoller-model-view/cinema/genre/f_nouveau_genre" class="btn btn-light btn-sm"> Nouveau </a> <br><br>
        </div >
<?php
foreach ($genres as $genre) { ?>
        <figure class="figure">
                <figcaption class="figure-caption">
                        <h2><?= $genre['type'] ?></h2>
                </figcaption>
                
        </figure>
        
        <div class="d-grid gap-2 d-md-block">
                <!-- Bouton Modifier -->
                <!-- $genre['id_genre'] dans action c'est pour dir quand veut modifier f_modifier_genre/1   -->
                <a href="http://127.0.1.1/mes-projets/contoller-model-view/cinema/genre/f_modifier_genre/<?= $genre['id_genre'] ?>" class="btn btn-warning btn-sm"> Modifier </a>

                <!-- Bouton Supprimer -->
                <form action="http://127.0.1.1/mes-projets/contoller-model-view/cinema/genre/supprimer_genre" method="post">
                <input type="hidden" name="id" value="<?= $genre['id_genre'] ?>" />
                <input type="submit" value="Supprimer" class="btn btn-danger btn-sm">
                </form>
                <!-- <a href="http://127.0.1.1/mes-projets/contoller-model-view/cinema/genre/supprimer_genre/< ?= $genre['id_genre'] ?>" class="btn btn-danger btn-sm"> Supprimer </a> <br><br> -->
        </div >
<?php } ?>
</section>
</body>
</html>