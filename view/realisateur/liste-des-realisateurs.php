<html>

<head>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
</head>

<body>
        <section class="d-grid gap-2 col-6 mx-auto container px-4 ">
                <h1 class="h1"> Voici la liste des Realisateurs</h1>
                <div class="d-grid gap-2 ">

                        <!-- Bouton Supprimer -->
                        <a href="http://127.0.1.1/mes-projets/contoller-model-view/cinema/realisateur/f_nouveau_realisateur" class="btn btn-light btn-sm"> Nouveau </a> <br><br>
                </div>
                <?php
                foreach ($realisateurs as $realisateur) { ?>
                        <figure class="figure">
                                <figcaption class="figure-caption">
                                        <h2><?= $realisateur['prenom'] ?> <?= $realisateur['nom'] ?> </h2>
                                </figcaption>
                                <img src="../images/<?= $realisateur['photo'] ?>" class="figure-img img-fluid rounded" alt="">
                        </figure>

                        <div class="d-grid gap-2 d-md-block">
                                <!-- Bouton Modifier -->
                                <a href="http://127.0.1.1/mes-projets/contoller-model-view/cinema/realisateur/f_modifier_realisateur/<?= $realisateur['id_realisateur'] ?>" class="btn btn-warning btn-sm"> Modifier </a>

                                <!-- Bouton Supprimer -->
                                <form action="http://127.0.1.1/mes-projets/contoller-model-view/cinema/realisateur/supprimer_realisateur" method="post">
                                        <input type="hidden" name="id" value="<?= $realisateur['id_realisateur'] ?>" />
                                        <input type="submit" value="Supprimer" class="btn btn-danger btn-sm">
                                </form>
                        </div>
                <?php } ?>
        </section>
</body>

</html>