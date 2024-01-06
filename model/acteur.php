<?php

/** Requette pour Afficher Tous Les Acteurs **/
function liste_acteurs()
{
  require('connect.php');
  $req = ('SELECT * FROM acteur ');
  $sql = $pdo->prepare($req);
  $sql->execute();
  $rows = $sql->fetchAll();
  return $rows;
}
/** Requette pour afficheu Un Acteur **/
function un_acteur($id)
{
  require('connect.php');
  $req = ('SELECT * FROM acteur WHERE id_acteur = ?');
  $sql = $pdo->prepare($req);
  $sql->execute([$id]); 
  $row = $sql->fetch();
  return $row;
}
/** Fonction pour acteur_film   **/
function acteur_film($id)
{
    require 'connect.php';
    $req = 'SELECT * FROM acteur INNER JOIN jouer ON jouer.id_acteur = jouer.id_acteur WHERE jouer.id_film = ?';
    $sql = $pdo->prepare($req);
    $sql->execute([$id]);
    $rows = $sql->fetchAll();
    return $rows;
}

/** Requette pour Créer un nouveau acteur **/
function model_creer_acteur($save)
{
  require('connect.php');
  $req = ('INSERT INTO acteur (nom, prenom,photo) VALUE (?, ?, ?)');
  $sql = $pdo->prepare($req);
  $sql->execute([$save['nom'], $save['prenom'], $save['photo']]);
  
  header("location:http://127.0.1.1/mes-projets/contoller-model-view/cinema/acteur/afficher_acteurs");
}

/** Requette pour Modifier Un Acteur  **/
function model_modifier_acteur($modifier)
{
  $id     = $modifier['id']; 
  $nom    = $modifier['nom'];
  $prenom = $modifier['prenom'];
  $photo  = $modifier['photo'];

  require('connect.php');
  $req = ('UPDATE acteur SET nom = ?, prenom = ?, photo = ? WHERE id_acteur = ? ');
  $sql = $pdo->prepare($req);
  $sql->execute([$nom, $prenom, $photo, $id]);
  // Pour rester sur la même page c'est dire liste des acteur on fait appel au header 
  header("location:http://127.0.1.1/mes-projets/contoller-model-view/cinema/acteur/afficher_acteurs");
}

/** Requette pour supprimer un acteur**/
function model_supprimer_acteur($supprimer)
{
  $id = $supprimer['id'];
  require 'connect.php';
  $req = 'DELETE FROM acteur WHERE id_acteur = ?';
  $sql = $pdo->prepare($req);
  $sql->execute([$id]);
  // Pour rester sur la même page c'est dire liste des acteur on fait appel au header 
  header("location:http://127.0.1.1/mes-projets/contoller-model-view/cinema/acteur/afficher_acteurs");
}
