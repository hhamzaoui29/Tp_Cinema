<head>
  <link rel="stylesheet" href="../../css/bootstrap.css">
  <link rel="stylesheet" href="../../css/style.css">
</head>
</head>

<body>

  <section class="d-grid gap-2 col-6 mx-auto container px-4 ">
    <!-- Bouton Retour a la page Liste-Des-Acteurs -->
    <a href="http://127.0.1.1/mes-projets/contoller-model-view/cinema/film/afficher_films" class="btn btn-info btn-sm"> Retour </a>


    <div class="mb-3" class="card" style="width: 18rem;">
      <span class="display-5"> <?= $affiche['titreFilm'] ?></span>
      <img src="../../images/<?= $affiche['image'] ?>" class="figure-img img-fluid rounded" alt="">
    </div>

    <div class="mb-3" class="card" style="width: 18rem;">
      <span class="display-8"> Par le Réalisateur : </span>
      <span class="display-5"><?= $affiche['prenomRealisateur'] ?><?= $affiche['nomRealisateur'] ?> </span>
      <img src="" class="figure-img img-fluid rounded" alt="">
    </div>

    <div class="mb-3" class="card" style="width: 18rem;">
      <span class="display-8"> Sortie Le : </span>
      <span class="display-5"><?= $affiche['date'] ?></span>
    </div>

    <div class="mb-3" class="card" style="width: 18rem;">
      <span class="display-8"> Avec Les Acteurs : </span>
      <span class="display-5"><?= $acteur['prenomActeur'] ?><?= $acteur['nomActeur'] ?> </span>
      <img src="" class="figure-img img-fluid rounded" alt="">
    </div>
   

  </section>
</body>

</html>