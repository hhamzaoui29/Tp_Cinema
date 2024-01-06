
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Modifier Un acteur</title>

    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/style.css">
 
</head>

<body>
<section class=" gap-5 col-2  container  " >
    <!-- Bouton Retour a la page d'Acceuil -->
    <a href="http://127.0.1.1/mes-projets/contoller-model-view/cinema/acteur/afficher_acteurs" class="btn btn-info btn-sm"> Retour  </a>
    
    
    <form action="http://127.0.1.1/mes-projets/contoller-model-view/cinema/acteur/modifier_acteur" method="POST">

        <div class="mb-3" class="card" style="width: 25rem;">
            <label  class="form-label">Nom Acteur</label>
            <input type="text" name="nom" value="<?= $acteur['nom'] ?>"  class="form-control"><br>
           
        </div>
         <div class="mb-3" class="card" style="width: 25rem;">
            <label class="form-label">Prenom Acteur</label>
            <input type="text" name="prenom" value="<?= $acteur['prenom'] ?>" class="form-control" ><br>
        </div>

        <div class="mb-3" class="card" style="width: 25rem;">
            <label class="form-label">Photo Acteur</label>
            <input type="text" name="photo" value="<?= $acteur['photo'] ?>" class="form-control" ><br>
        </div>

         <div >
            <input type="hidden" name="id" value="<?= $acteur['id_acteur'] ?>">
        </div>
        
        <div class=" modal-dialog-centered d-grid gap-2 ">
            <input type="submit" value="Enregistrer" class=" btn btn-info btn-sm">
        </div>
            
    </form>
</section>
</body>
</html>



