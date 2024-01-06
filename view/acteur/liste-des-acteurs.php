<html>
<head>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<section class="d-grid gap-2 col-6 mx-auto container px-4 ">
<h1 class="h1"> Voici la liste des Acteurs</h1>
<div class="d-grid gap-2 ">
                
        <!-- Bouton Ajouter Un Acteur -->
        <a href="http://127.0.1.1/mes-projets/contoller-model-view/cinema/acteur/f_nouveau_acteur" class="btn btn-light btn-sm"> Nouveau </a> <br><br>
</div >
<?php
foreach ($acteurs as $acteur) { ?>
<figure class="figure">
        <figcaption class="figure-caption">
                <h2><?= $acteur['prenom'] ?> <?= $acteur['nom'] ?> </h2>
        </figcaption>
        <img src="../images/<?= $acteur['photo'] ?>" class="figure-img img-fluid rounded" alt=""> 
</figure>

<div class="d-grid gap-2 d-md-block"> 
        <!-- Bouton Modifier -->
        <a href="http://127.0.1.1/mes-projets/contoller-model-view/cinema/acteur/f_modifier_acteur/<?= $acteur['id_acteur']?>" class="btn btn-warning btn-sm"> Modifier </a>
        
        <!-- Bouton Supprimer -->
       <form action="http://127.0.1.1/mes-projets/contoller-model-view/cinema/acteur/supprimer_acteur" method="post" >
       <input type="hidden" name="id" value="<?= $acteur['id_acteur'] ?>" />
       <input type="submit" value="Supprimer" class="btn btn-danger btn-sm">
       </form>
       
        
</div>
<?php } ?>
</section>
</body>
</html>