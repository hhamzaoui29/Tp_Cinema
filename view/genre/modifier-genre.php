

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Modifier Un genre</title>

    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/style.css">
 
</head>

<body>
<section class=" gap-5 col-2  container  " >
    <!-- Bouton Retour a la page d'Acceuil -->
    <a href="http://127.0.1.1/mes-projets/contoller-model-view/cinema/genre/afficher_genres" class="btn btn-info btn-sm"> Retour  </a>
    
    <form action="http://127.0.1.1/mes-projets/contoller-model-view/cinema/genre/modifier_genre" method="POST">

        <!-- ici $etudiant fait référence à $etudiant dans la function etudiant($id) dans le dossier controller/etudiant -->
        <!-- "$genre" c'est la variable déclarer dans la fonction f_modifier_genre($id) -->
        <div class="mb-3" class="card" style="width: 25rem;">
            <label  class="form-label">Type Genre</label>
            <input type="text" name="nom" value="<?= $genre['type'] ?>"  class="form-control"><br>
        </div>
         <div >
            <input type="hidden" name="id" value="<?= $genre['id_genre'] ?>">
        </div>
        <div class=" modal-dialog-centered d-grid gap-2 ">
            <!-- <input type="submit" class=" btn btn-success" value=""></input> -->
            <input type="submit" value="Enregistrer" class=" btn btn-info btn-sm">
        </div>    
    </form>
</section>
</body>
</html>