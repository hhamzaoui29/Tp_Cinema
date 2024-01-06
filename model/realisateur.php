<?php

/** Requette pour Afficher Tous Les realisateurs **/
function liste_realisateurs()
{
  require('connect.php');
  $req = ('SELECT * FROM realisateur ');
  $sql = $pdo->prepare($req);
  $sql->execute();
  $rows = $sql->fetchAll();
  return $rows;
}
/** Requette pour afficheu Un realisateur **/
function un_realisateur($id)
{
  require('connect.php');
  $req = ('SELECT * FROM realisateur WHERE id_realisateur = ?');
  $sql = $pdo->prepare($req);
  $sql->execute([$id]); 
  $row = $sql->fetch();
  return $row;
}

/** Requette pour Créer un nouveau realisateur **/
function model_creer_realisateur($save)
{
  require('connect.php');
  $req = ('INSERT INTO realisateur (nom, prenom, photo) VALUE (?, ?, ?)');
  $sql = $pdo->prepare($req);
  $sql->execute([$save['nom'], $save['prenom'], $save['photo']]); 
  header("location:http://127.0.1.1/mes-projets/contoller-model-view/cinema/realisateur/afficher_realisateurs");
}

/** Requette pour Modifier Un realisateur  **/
function model_modifier_realisateur($modifier)
{
  
  $_id     = $modifier['id']; 
  $_nom    = $modifier['nom'];
  $_prenom = $modifier['prenom'];
  $_photo  = $modifier['photo'];

  require('connect.php');
  $req = ('UPDATE realisateur SET nom = ?, prenom = ?, photo = ? WHERE id_realisateur = ? ');
  $sql = $pdo->prepare($req);
  $sql->execute([$_nom, $_prenom, $_photo, $_id]); 
  header("location:http://127.0.1.1/mes-projets/contoller-model-view/cinema/realisateur/afficher_realisateurs");
}

/** Requette pour supprimer un realisateur**/
function model_supprimer_realisateur($supprimer)
{
  $_id = $supprimer['id'];
  require 'connect.php';
  $req = 'DELETE FROM realisateur WHERE id_realisateur = ?';
  $sql = $pdo->prepare($req);
  $sql->execute([$_id]); 
  header("location:http://127.0.1.1/mes-projets/contoller-model-view/cinema/realisateur/afficher_realisateurs");
}
