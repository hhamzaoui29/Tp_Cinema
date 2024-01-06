<?php

/** Fonction pour afficher Tous les genres  **/
// http://127.0.1.1/php-procedural/cinema/genre/afficher_genres
function afficher_genres() 
{

    require('model/genre.php');
    $genres = liste_genres();
    require 'view/menu/nav-bar.php';
    require('view/genre/liste-des-genres.php');
}


/** Fonction pour   **/
// http://127.0.1.1/php-procedural/cinema/genre/

/** Fonction pour Creer Un Nouveau genre  **/
// http://127.0.1.1/php-procedural/cinema/genre/f_nouveau_genre
function f_nouveau_genre() //  c'est la fonction  appelé par le controller
{
    require 'view/menu/nav-bar.php';
    require('view/genre/creer-genre.php');
}
function creer_genre()
{
    require('model/genre.php');
    model_creer_genre($_POST); // !! $_POST nous permet de récupere les données du Formulaire qui sont déclarer dans name!!
}


/** Fonction pour Modifier  genre  **/
// http://127.0.1.1/php-procedural/cinema/genre/f_modifier_genre
function f_modifier_genre($id) // c'est la fonction  appelé par le controller
{
    require('model/genre.php');
    $genre = liste_genres();
    $genre = un_genre($id);
    require 'view/menu/nav-bar.php';
    require('view/genre/modifier-genre.php');
}

function modifier_genre()
{
    require('model/genre.php');
    model_modifier_genre($_POST); //  $_POST nous permet de récupere les données du Formulaire qui sont déclarer dans name 

}

/** Fonction pour supprimer Un genre  **/
// http://127.0.1.1/php-procedural/cinema/genre/
function supprimer_genre() // c'est la fonction  appelé par le controller 
{
    require('model/genre.php');
    model_supprimer_genre($_POST); //  $_POST nous permet de récupere les données du Formulaire qui sont déclarer dans name 
}

