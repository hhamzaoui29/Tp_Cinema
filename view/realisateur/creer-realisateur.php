
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creer Un Realisateur</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<section class="d-grid gap-2 col-6 mx-auto container px-4 " >
    <!-- Bouton Retour a la page Liste-Des-realisateurs -->
    <a href="http://127.0.1.1/mes-projets/contoller-model-view/cinema/realisateur/afficher_realisateurs" class="btn btn-info btn-sm"> Retour  </a>
    
    
    <form action="http://127.0.1.1/mes-projets/contoller-model-view/cinema/realisateur/creer_realisateur" method="POST">
        <div class="mb-3" class="card" style="width: 18rem;">
            <label for="disabledTextInput" class="form-label">Nom Du Réalisateur</label>
            <input type="text"  class="form-control" name="nom" placeholder="nom">
        </div>
         <div class="mb-3" class="card" style="width: 18rem;">
            <label for="disabledSelect" class="form-label">Prenom Du Réalisateur</label>
            <input type="text"  class="form-control" name="prenom" placeholder="prenom">
        </div>
         <div class="mb-3" class="card" style="width: 18rem;">
            <label for="disabledSelect" class="form-label">Photo Du Réalisateur</label>
            <input type="text"  class="form-control" name="photo" placeholder="nom-image">
        </div>
        <div class=" modal-dialog-centered d-grid gap-2 ">
            <input type="submit" class=" btn btn-success" value="Enregistrer"></input>
       </div>
        
       
    </form>
</section>
</body>

</html>


