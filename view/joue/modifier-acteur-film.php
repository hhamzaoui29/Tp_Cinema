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
    <a href="http://127.0.1.1/mes-projets/contoller-model-view/cinema/joue/afficher_joues" class="btn btn-info btn-sm"> Retour  </a>
   
    <form action="http://127.0.1.1/mes-projets/contoller-model-view/cinema/film/modifier_film" method="POST">

       
        <!-- Selct Acteur -->
        <div class="mb-3">
            <label  class="form-label">Séléctionnez Le Genre </label> <br>
            <select name="genre"  class="form-select">
            <?php
            foreach ($acteurs as $acteur)
            {?>
            <!-- value = $val['id'] permet d'envoyer l'Id de acteur pas le nom acteur  -->
            <option value="<?=$acteur['id_acteur']?>">
                <?= $acteur['nom']?> 
                <?= $acteur['prenom']?>  
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
