<html>

<head>
</head>

<body>
        <h1> Voici la liste des Affiches</h1>
        <form action="http://127.0.1.1/mes-projets/contoller-model-view/cinema/affiche/f_nouveau_affiche" method="post">
                <input type="submit" value="Nouveau">
        </form>
        <?php
        foreach ($affiches as $affiche) { ?>
        
                <h4><?= $affiche['nom'] ?> <?= $affiche['titre'] ?></h4>

                <!-- Bouton Modifier -->

                <div>
                        <form action="http://127.0.1.1/mes-projets/contoller-model-view/cinema/affiche/f_modifier_affiche/<?= $affiche['id_affiche'] ?>" method="post">
                                <input type="submit" value="Modifier">
                        </form>
                </div>
                <!-- Bouton Supprimer -->
                <div>
                        <form action="http://127.0.1.1/mes-projets/contoller-model-view/cinema/affiche/supprimer_affiche/<?= $affiche['id_affiche'] ?>" method="post">

                                <input type="hidden" name="id" value="<?= $affiche['id_affiche'] ?>" />
                                <input type="submit" value="Supprimer">
                        </form>
                </div>
                <p>==================================================</p>
        <?php } ?>
</body>

</html>