
<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de Film</title>
</head>
<body>
    <h1>Ajouter un film</h1>
    <form action="ajouter_film.php" method="POST">
        <label for="titre">Titre du film:</label>
        <input type="text" id="titre" name="titre" required><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br>


        <!-- Liste déroulante pour sélectionner les acteurs -->
        <label for="acteurs">Acteurs:</label><br>
        <select id="acteurs" name="acteurs[]" multiple>
            <?php
                // Ici, vous devez récupérer la liste des acteurs depuis la base de données
                // et les afficher dans la liste déroulante en utilisant une boucle PHP
                // pour parcourir les enregistrements de la table "acteur".
            ?>
        </select><br>

        <input type="submit" value="Ajouter le film">
    </form>
</body>
</html>



