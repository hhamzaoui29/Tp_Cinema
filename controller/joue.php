<?php

require 'model/acteur.php';
require 'model/film.php';

/** Fonction pour jouer Tous les joues  **/
// http://127.0.1.1/php-procedural/cinema/joue/afficher_joues
function afficher_joues() 
{

    require('model/joue.php');
      $joues = liste_joues();
    require 'view/menu/nav-bar.php';
    require('view/joue/liste-des-acteur-film.php');
}

/** Fonction pour Creer Un Nouveau joue  **/
// http://127.0.1.1/php-procedural/cinema/joue/f_nouveau_joue
function f_nouveau_joue() //  c'est la fonction  appelé par le controller
{
   
    $acteurs = liste_acteurs();
    $films   = liste_films();
    require 'view/menu/nav-bar.php';
    require('view/joue/creer-acteur-film.php');
}
function creer_joue()
{
    require('model/joue.php');
    model_creer_joue($_POST); // !! $_POST nous permet de récupere les données du Formulaire qui sont déclarer dans name!!
}


/** Fonction pour Modifier  joue  **/
// http://127.0.1.1/php-procedural/cinema/joue/f_modifier_joue
function f_modifier_joue($id) // c'est la fonction  appelé par le controller
{
    require('model/joue.php');
    $acteurs = liste_acteurs();
    $film    = un_film($id);
    require 'view/menu/nav-bar.php';
    require('view/joue/modifier-acteur-film.php');
}

function modifier_joue()
{
    require('model/joue.php'); 
    model_modifier_joue($_POST); //  $_POST nous permet de récupere les données du Formulaire qui sont déclarer dans name 

}


/** Fonction pour supprimer Un joue  **/
// http://127.0.1.1/php-procedural/cinema/joue/
function supprimer_joue() // c'est la fonction  appelé par le controller 
{
    require('model/joue.php');
    model_supprimer_joue($_POST); //  $_POST nous permet de récupere les données du Formulaire qui sont déclarer dans name 
}

