
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Modifier Un Realisateur</title>

    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/style.css">
 

</head>

<body>
<section class=" gap-5 col-2  container  " >
    <!-- Bouton Retour a la page d'Acceuil -->
    
    <a href="http://127.0.1.1/mes-projets/contoller-model-view/cinema/realisateur/afficher_realisateurs" class="btn btn-info btn-sm"> Retour  </a>
    
    
    <form action="http://127.0.1.1/mes-projets/contoller-model-view/cinema/realisateur/modifier_realisateur" method="POST">

        <!-- ici $etudiant fait référence à $etudiant dans la function etudiant($id) dans le dossier controller/etudiant -->
        <!-- "$realisateur" c'est la variable déclarer dans la fonction f_modifier_realisateur($id) -->
        <div class="mb-3" class="card" style="width: 25rem;">
            <label  class="form-label">Nom Réalisateur</label>
            <input type="text" name="nom" value="<?= $realisateur['nom'] ?>"  class="form-control"><br>
           
        </div>
         <div class="mb-3" class="card" style="width: 25rem;">
            <label class="form-label">Photo Réalisateur</label>
            <input type="text" name="prenom" value="<?= $realisateur['prenom'] ?>" class="form-control" ><br>
        </div>

         <div class="mb-3" class="card" style="width: 25rem;">
            <label class="form-label">Photo Réalisateur</label>
            <input type="text" name="photo" value="<?= $realisateur['photo'] ?>" class="form-control" ><br>
        </div>

         <div >
            <input type="hidden" name="id" value="<?= $realisateur['id_realisateur'] ?>">
        </div>
        
        <div class=" modal-dialog-centered d-grid gap-2 ">
            <!-- <input type="submit" class=" btn btn-success" value=""></input> -->
            <input type="submit" value="Enregistrer" class=" btn btn-info btn-sm">
        </div>
            
    </form>
</section>
</body>
</html>