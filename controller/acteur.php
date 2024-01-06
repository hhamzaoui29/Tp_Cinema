<?php

/** Fonction pour afficher Tous les Acteurs  **/
// http://127.0.1.1/php-procedural/cinema/acteur/afficher_acteurs
function afficher_acteurs() 
{

    require('model/acteur.php');
    $acteurs = liste_acteurs();
    require 'view/menu/nav-bar.php';
    require('view/acteur/liste-des-acteurs.php');
}



/** Fonction pour   **/
// http://127.0.1.1/php-procedural/cinema/acteur/

/** Fonction pour Creer Un Nouveau Acteur  **/
// http://127.0.1.1/php-procedural/cinema/acteur/f_nouveau_acteur
function f_nouveau_acteur() //  c'est la fonction  appelé par le controller
{
    require 'view/menu/nav-bar.php';
    require('view/acteur/creer-acteur.php');
}
function creer_acteur()
{
    require('model/acteur.php');
    model_creer_acteur($_POST); // !! $_POST nous permet de récupere les données du Formulaire qui sont déclarer dans name!!
}

/** Fonction pour Modifier  Acteur  **/
// http://127.0.1.1/php-procedural/cinema/acteur/f_modifier_acteur
function f_modifier_acteur($id) // c'est la fonction  appelé par le controller
{
    require('model/acteur.php');
    $acteur = un_acteur($id);
    require 'view/menu/nav-bar.php';
    require('view/acteur/modifier-acteur.php');
}

function modifier_acteur()
{
    require('model/acteur.php');
    model_modifier_acteur($_POST); //  $_POST nous permet de récupere les données du Formulaire qui sont déclarer dans name 

}

/** Fonction pour supprimer Un Acteur  **/
// http://127.0.1.1/php-procedural/cinema/acteur/supprimer_acteur
function supprimer_acteur() // c'est la fonction  appelée par le controller 
{
    require('model/acteur.php');
    model_supprimer_acteur($_POST); // $_POST nous permet de récupere les données du Formulaire qui sont déclarer dans name 
 
}

