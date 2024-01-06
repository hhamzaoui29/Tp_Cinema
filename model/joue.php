<?php

/** Requette pour jouer Tous Les joues **/
function liste_joues()
{
  require('connect.php');
  $req = 'SELECT acteur.id_acteur as idActeur, acteur.nom as nomActeur, acteur.prenom as prenomActeur,
                 film.id_film as idFilm, film.titre as titreFilm 
                 FROM acteur, film, jouer WHERE 
                 jouer.id_acteur = acteur.id_acteur AND jouer.id_film = film.id_film';

  $sql = $pdo->prepare($req);
  $sql->execute();
  $rows = $sql->fetchAll();
  return $rows;
}
/** Requette pour joueu Un joue **/
function un_joue($id)
{
  require('connect.php');
  $req = 'SELECT acteur.id_acteur as idActeur, acteur.nom as nomActeur, 
                 film.id_film as idFilm, film.titre as titreFilm 
                 FROM acteur, film, jouer WHERE 
                 jouer.id_acteur = acteur.id_acteur AND jouer.id_film = film.id_film';

  $sql = $pdo->prepare($req);
  $sql->execute([$id]); 
  $row = $sql->fetch();
  return $row;
}

// /** Requette pour Créer un nouveau joue **/
function model_creer_joue($save)
{
    $acteur = $save['acteur'];
    $film   = $save['film'];
  require('connect.php');
  $req = ('INSERT INTO jouer (id_acteur, id_film) VALUE (?, ?)');
  $sql = $pdo->prepare($req);
  $sql->execute([$acteur,$film]);
  header("location:http://127.0.1.1/mes-projets/contoller-model-view/cinema/joue/afficher_joues");
}

// /** Requette pour Modifier Un joue  **/
function model_modifier_joue($modifier)
{

  require('connect.php');
  $req = ('UPDATE jouer SET id_acteur = ? WHERE id_film = ? ');
  $sql = $pdo->prepare($req);
  $sql->execute([$modifier['acteur'], $modifier['film']]);
  header("location:http://127.0.1.1/mes-projets/contoller-model-view/cinema/joue/Afficher_joues");
}

// /** Requette pour supprimer un joue**/
 function model_supprimer_joue($supprimer)
{
   $_idFilm  = $supprimer['idfilm'];
   $_idActeur = $supprimer['idacteur'];
  require 'connect.php';
  $req = 'DELETE FROM jouer WHERE id_film = ? AND id_acteur = ?';
  
  $sql = $pdo->prepare($req);
  $sql->execute([$_idFilm, $_idActeur]);
  
  header("location:http://127.0.1.1/mes-projets/contoller-model-view/cinema/joue/afficher_joues");
}

function model_acteur_film()
{
  require 'connect.php';

 $req =  'SELECT film.id_film as idFilm, film.titre as titreFilm, 
  acteur.id_acteur as idActeur, acteur.nom AS nomActeur, acteur.prenom as prenomActeur
   FROM film 
   INNER JOIN jouer ON film.id_film = jouer.id_film 
   INNER JOIN acteur ON jouer.id_acteur = acteur.id_acteur 
   WHERE film.id_film = ?';
   
   $sql = $pdo->prepare($req);
   $sql->execute(); 
   $rows = $sql->fetchAll();
   return $rows;
}
