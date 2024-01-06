<?php

/** Requette pour Afficher Tous Les films **/

function liste_films()
{
  require('connect.php');
  $req = ('SELECT * FROM film');
  $sql = $pdo->prepare($req);
  $sql->execute();
  $rows = $sql->fetchAll();
  return $rows;
}
/*------------------------------------------------------------------------------------------------------------------------------------*/
/** Requette pour afficheu Un film **/
function un_film($id)
{
  require('connect.php');
  $req = ('SELECT * FROM film WHERE id_film = ?');
  $sql = $pdo->prepare($req);
  $sql->execute([$id]); // attention on fait toujours appel a un table du cop il faut mettre $id entre crocher[].
  $row = $sql->fetch();
  return $row;
}
/*------------------------------------------------------------------------------------------------------------------------------------*/
// /** Requette pour Créer un nouveau film **/
function model_creer_film($save)
{
  $_titre = $save['titre'];
  $_date = $save['date'];
  $_affiche = $save['affiche'];
  $_genre       = $save['genre'];
  $_realisateur = $save['realisateur']; 

  require('connect.php');
  $req = ('INSERT INTO film (titre, date_sortie, affiche, id_genre, id_realisateur) VALUES (?, ?, ?, ?, ?)');
  $sql = $pdo->prepare($req);
  $sql->execute([$_titre, $_date, $_affiche, $_genre, $_realisateur]);
  
  header("location:http://127.0.1.1/mes-projets/contoller-model-view/cinema/joue/f_nouveau_joue");
}
/*------------------------------------------------------------------------------------------------------------------------------------*/
// /** Requette pour Afficher Une affiche d'un film film  **/
function liste_affiche_films()
{
  require('connect.php');
  $req = ('SELECT film.titre as titreFilm, film.date_sortie as date , film.affiche as image,
                  genre.type as typeGenre, 
                  realisateur.nom AS nomRealisateur, realisateur.prenom AS prenomRealisateur,
                  acteur.id_acteur as idActeur, acteur.nom AS nomActeur, acteur.prenom as prenomActeur
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
/*------------------------------------------------------------------------------------------------------------------------------------*/
// /** Requette pour Afficher Une affiche d'un film film  **/
function liste_affiche_film($id)
{
  require('connect.php');
  $req = ('SELECT 
            film.id_film as idFilm, film.titre as titreFilm, film.date_sortie as date , film.affiche as image,
            genre.type as typeGenre, 
            realisateur.nom AS nomRealisateur, realisateur.prenom AS prenomRealisateur, 
            acteur.id_acteur as idActeur, acteur.nom AS nomActeur, acteur.prenom as prenomActeur
          FROM film 
            INNER JOIN realisateur ON film.id_realisateur = realisateur.id_realisateur 
            INNER JOIN genre       ON film.id_genre       = genre.id_genre 
            INNER JOIN jouer       ON film.id_film        = jouer.id_film 
            INNER JOIN acteur      ON jouer.id_acteur     = acteur.id_acteur 
          WHERE film.id_film = ?');

  $sql = $pdo->prepare($req);
  $sql->execute([$id]);
  $row = $sql->fetch();
  return $row;
}

function model_liste_acteur_film($id)
{
  require('connect.php');
  $req = (' SELECT 
              film.id_film as idFilm, film.titre as titreFilm, 
              acteur.id_acteur as idActeur, acteur.nom AS nomActeur, acteur.prenom as prenomActeur
            FROM film 
              INNER JOIN jouer       ON film.id_film        = jouer.id_film 
              INNER JOIN acteur      ON jouer.id_acteur     = acteur.id_acteur 
            WHERE film.id_film = ? ');

  $sql = $pdo->prepare($req);
  $sql->execute([$id]);
  $row = $sql->fetch();
  return $row;
}

/*------------------------------------------------------------------------------------------------------------------------------------*/
function model_modifier_film($modifier)
{
  // Récuperation des valeurs qui se troouve dans "name" du formulaire form du fichier modifier-film.php
  $_titre       = $modifier['titre']; 
  $_date        = $modifier['date']; 
  $_affiche     = $modifier['affiche']; 
  $_genre       = $modifier['genre'];
  $_realisateur = $modifier['realisateur']; 
  $_id          = $modifier['id']; 

  require('connect.php');
  $req = ('UPDATE film SET titre = ?, date_sortie = ?, affiche = ?, id_genre = ?, id_realisateur = ? WHERE id_film = ? ');
  $sql = $pdo->prepare($req);
  $sql->execute([$_titre, $_date, $_affiche, $_genre, $_realisateur, $_id]);
  header("location:http://127.0.1.1/mes-projets/contoller-model-view/cinema/film/afficher_films");
}
/*------------------------------------------------------------------------------------------------------------------------------------*/
// /** Requette pour supprimer un film**/
function model_supprimer_film($supprimer)
{

  $_id = $supprimer['id'];
  require 'connect.php';
  $req = 'DELETE FROM film WHERE id_film = ? ';
  $sql = $pdo->prepare($req);
  $sql->execute([$_id]);
  header("location:http://127.0.1.1/mes-projets/contoller-model-view/cinema/film/afficher_films");
}
