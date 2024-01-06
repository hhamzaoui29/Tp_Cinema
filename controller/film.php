<?php
require 'model/genre.php';
require 'model/realisateur.php';
/** Fonction pour afficher Tous les films  **/
// http://127.0.1.1/php-procedural/cinema/film/afficher_films
function afficher_films() 
{

    require('model/film.php');
    $films = liste_films();
    require 'view/menu/nav-bar.php';
    require('view/film/liste-des-films.php');
}

/** Fonction pour   **/
// http://127.0.1.1/php-procedural/cinema/film/

/** Fonction pour Creer Un Nouveau film  **/
// http://127.0.1.1/php-procedural/cinema/film/f_nouveau_film
 function f_nouveau_film() //  c'est la fonction  appelé par le controller
{
    $genres = liste_genres();
    $realisateurs = liste_realisateurs();
    require 'view/menu/nav-bar.php'; // Pour unclure la barre de navigation dans le formulaire "creer-film.php"
    require('view/film/creer-film.php');
}
function creer_film()
{
    require('model/film.php');
    model_creer_film($_POST); // !! $_POST nous permet de récupere les données du Formulaire qui sont déclarer dans name!!
}


/** Fonction pour afficher l'affiche du Film **/
function f_affiche_film($id)
{
    require('model/film.php');
     $acteur = model_liste_acteur_film($id);
     $affiche = liste_affiche_film($id);
     require 'view/menu/nav-bar.php';
    require('view/film/affiche-film.php');
}
function afficher_acteur_film($id)
{
    require('model/film.php');
    model_liste_acteur_film($_POST);
}


/** Fonction pour Modifier  film  **/
// http://127.0.1.1/php-procedural/cinema/film/f_modifier_film
function f_modifier_film($id) // c'est la fonction  appelé par le controller
{
    require('model/film.php');
    // $films = liste_films();
    $film = un_film($id);
    $genres = liste_genres();
    $realisateurs = liste_realisateurs(); 
    require('view/film/modifier-film.php');
}

function modifier_film()
{
    require('model/film.php');
    model_modifier_film($_POST); //  $_POST nous permet de récupere les données du Formulaire qui sont déclarer dans name 
}


/** Fonction pour supprimer Un film  **/
// http://127.0.1.1/php-procedural/cinema/film/supprimer_film
function supprimer_film() // c'est la fonction  appelé par le controller 
{
    require('model/film.php');
    model_supprimer_film($_POST); 
    //  $_POST nous permet de récupere les données du Formulaire qui sont déclarer dans name 
}


 