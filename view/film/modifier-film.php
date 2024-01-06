<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creer Un film</title>

    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
 <link rel="import" href="../menu/nav-bar.php">

<section class="d-grid gap-2 col-6 mx-auto container px-4 " >  
    <!-- Bouton Retour a la page Liste-Des-Acteurs -->
    <a href="http://127.0.1.1/mes-projets/contoller-model-view/cinema/film/afficher_films" class="btn btn-info btn-sm"> Retour  </a>
   
    <form action="http://127.0.1.1/mes-projets/contoller-model-view/cinema/film/modifier_film" method="POST">

        <div class="mb-3" class="card" style="width: 18rem;">
            <input type="hidden"  class="form-control" name="id"  value="<?=$film['id_film']?>">
        </div>
        <div class="mb-3" class="card" style="width: 18rem;">
            <label for="disabledSelect" class="form-label">Titre Film</label>
            <input type="text"  class="form-control" name="titre"  value="<?=$film['titre']?>">
        </div>

        <div class="mb-3" class="card" style="width: 18rem;">
            <label for="disabledSelect" class="form-label">Date Sortie Film</label>
            <input type="text"  class="form-control" name="date" value="<?=$film['date_sortie']?>">
        </div>
        <div class="mb-3" class="card" style="width: 18rem;">
            <label for="disabledSelect" class="form-label">Affiche Film</label>
            <input type="text"  class="form-control" name="affiche" value="<?=$film['affiche']?>" >
        </div>
        <!-- Selcte genre -->
        <div class="mb-3">
            <label  class="form-label">Séléctionnez Le Genre </label> <br>
            <select name="genre"  class="form-select">
            <?php
            foreach ($genres as $genre)
            {?>
            <!-- value = $['id_genre'] permet d'envoyer l'Id de genre pas le type  -->
            <option value="<?=$genre['id_genre']?>">
            <!-- à la selection on peut choisir le type du genre  -->
                <?= $genre['type']?>
            </option>
            <?php } ?> 
            </select>
        </div>

        <!-- Select Réalisateur -->
        <div class="mb-3">
            <label  class="form-label">Séléctionnez Le Réalisateur</label> <br>
            <select name="realisateur" class="form-select">
            <?php
            foreach ($realisateurs as $realisateur) 
            {?>
            <!-- value = $['id_realisateur'] permet d'envoyer l'Id du realisateur pas le nom  -->
            <option value="<?=$realisateur['id_realisateur']?>"> 
            <!-- à la selection on peut choisir le non du realisateur  -->
                <?= $realisateur['nom']?>
            </option>
            <?php } ?> 
            </select>
        </div>
        
        <div class=" modal-dialog-centered d-grid gap-2 ">
            <input type="submit" class=" btn btn-success" value="Enregistrer"></input>
        </div>
    </form>
</section>
</body>
</html>

         
