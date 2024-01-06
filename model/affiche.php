<?php

/*------------------------------------------------------------------------------------------------------------------------------------*/
// /** Requette pour Afficher Une affiche d'un film film  **/
function liste_affiches_films()
{
  require('connect.php');
  $req = ('SELECT film.titre as titreFilm, film.date_sortie as date , film.affiche as image,
                  genre.type as typeGenre, 
                  realisateur.nom AS nomRealisateur, 
                  acteur.nom AS nomActeur, acteur.prenom as prenomActeur
                  FROM film 
                  INNER JOIN genre ON film.id_genre = genre.id_genre 
                  INNER JOIN realisateur ON film.id_realisateur = realisateur.id_realisateur 
                  INNER JOIN jouer ON film.id_film = jouer.id_film 
                  INNER JOIN acteur ON jouer.id_acteur = acteur.id_acteur');

  $sql = $pdo->prepare($req);
  $sql->execute();
  $rows = $sql->fetchAll();
  return $rows;
}
