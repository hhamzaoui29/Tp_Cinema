<?php

/** Requette pour Afficher Tous Les genres **/
function liste_genres()
{
  require('connect.php');
  $req = ('SELECT * FROM genre ');
  $sql = $pdo->prepare($req);
  $sql->execute();
  $rows = $sql->fetchAll();
  return $rows;
}
/** Requette pour afficheu Un genre **/
function un_genre($id)
{
  require('connect.php');
  $req = ('SELECT * FROM genre WHERE id_genre = ?');
  $sql = $pdo->prepare($req);
  $sql->execute([$id]); 
  return $row;
}

/** Requette pour Créer un nouveau genre **/
function model_creer_genre($save)
{
  require('connect.php');
  $req = ('INSERT INTO genre (type) VALUE (?)');
  $sql = $pdo->prepare($req);
  $sql->execute([$save['type']]);
  header("location:http://127.0.1.1/mes-projets/contoller-model-view/cinema/genre/afficher_genres");
}

/** Requette pour Modifier Un genre  **/
function model_modifier_genre($modifier)
{
  
  $id     = $modifier['id'];
  $type    = $modifier['type'];
 

  require('connect.php');
  $req = ('UPDATE genre SET type = ? WHERE id_genre = ? ');
  $sql = $pdo->prepare($req);
  $sql->execute([$type, $id]);
  header("location:http://127.0.1.1/mes-projets/contoller-model-view/cinema/genre/afficher_genres");
}

/** Requette pour supprimer un genre**/
function model_supprimer_genre($supprimer)
{
  $_id = $supprimer['id'];
  require 'connect.php';
  $req = 'DELETE FROM genre WHERE id_genre = ?';
  $sql = $pdo->prepare($req);
  $sql->execute([$_id]);
  header("location:http://127.0.1.1/mes-projets/contoller-model-view/cinema/genre/afficher_genres");
}
