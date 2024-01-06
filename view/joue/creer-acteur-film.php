<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creer Une Relation Acteur Film</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<section class="d-grid gap-2 col-6 mx-auto container px-4 " >  
    <!-- Bouton Retour a la page Liste-Des-Acteurs -->
    <a href="http://127.0.1.1/mes-projets/contoller-model-view/cinema/joue/afficher_joues" class="btn btn-info btn-sm"> Retour  </a>
    <h1>Liste Accteurs Films</h1>
    <form action="http://127.0.1.1/mes-projets/contoller-model-view/cinema/joue/creer_joue" method = "POST">
        
    <!-- Selct Acteur -->
<div class="mb-3">
            <label  class="form-label">Séléctionnez L'Acteur </label> <br>
            <select name="genre"  class="form-select">
            <?php
            foreach ($acteurs as $acteur)
        {?>
        <!-- value = $acteur['id_acteur'] permet d'envoyer l'Id de acteur pas le nom  -->
        <option value="<?=$acteur['id_acteur']?>">
        <!-- à la selection on peut choisir le non de l'acteur  -->
            <?= $acteur['nom']?>
        </option>
            <?php } ?> 
            </select>
        </div>

        <!-- Select Film -->
        <div class="mb-3">
            <label  class="form-label">Séléctionnez Le Film</label> <br>
            <select name="realisateur" class="form-select">
            <?php
            foreach ($films as $film)
            {  ?>
            <!-- value = $film['id_film'] permet d'envoyer l'Id_film pas le titre  -->
            <option value="<?=$film['id_film']?>">
            <!-- à la selection on peut choisir le titre de film  -->
                <?= $film['titre']?>
            </option>
            <?php } ?> 
            </select>
        </div>

        <input type="submit" class=" btn btn-success" value="Valider " ><br>
    </form>
</section>
</body>
</html>

