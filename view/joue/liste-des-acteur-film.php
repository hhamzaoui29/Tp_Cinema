<html>
<head>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<section class="d-grid gap-2 col-6 mx-auto container px-4 ">
<h1 class="h1"> Voici La Liste des Acteur_Film</h1>
<div class="d-grid gap-2 ">
                
                <!-- Bouton Ajouter Un Relation -->
                <a href="http://127.0.1.1/mes-projets/contoller-model-view/cinema/joue/modifier_joue/ <h5><?=$film['id_jouer']?> </h5> " class="btn btn-light btn-sm"> Nouveau </a> <br><br>
        </div >
        
                <!-- Affichage -->
<?php
foreach ($joues as $joue) { ?>
        <!-- <figure class="figure"> -->
                <figcaption class="figure-caption">
                        <h2> Titre du Film : <?= $joue['titreFilm'] ?> <br>
                        <span> Liste Des Acteurs : </span> <br>
                         <?= $joue['prenomActeur'] ?> 
                         <?= $joue['nomActeur'] ?> 
                </h2>
                </figcaption>
        <!-- </figure> -->
        
        <div class="d-grid gap-2 d-md-block">
                <!-- Bouton Modifier -->
                <a href="http://127.0.1.1/mes-projets/contoller-model-view/cinema/joue/f_modifier_joue/" class="btn btn-warning btn-sm"> Modifier </a>
                <input type="hidden" name="acteur" value="<?= $joue['idActeur'] ?>" />
                <input type="hidden" name="film"   value="<?= $joue['idFilm'] ?>" />
                
                <!-- Bouton Supprimer -->
                <form action="http://127.0.1.1/mes-projets/contoller-model-view/cinema/joue/supprimer_joue" method="post">
                <input type="hidden" name="idfilm"   value="<?= $joue['idFilm'] ?>" />
                <input type="hidden" name="idacteur" value="<?= $joue['idActeur'] ?>" />
                <input type="submit" value="Supprimer" class="btn btn-danger btn-sm" >
                </form>
                
                
        </div >
<?php } ?>
</section>
</body>
</html>