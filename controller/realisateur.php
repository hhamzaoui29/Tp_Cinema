<?php

/** Fonction pour afficher Tous les realisateurs  **/
// http://127.0.1.1/php-procedural/cinema/realisateur/afficher_realisateurs
function afficher_realisateurs() 
{

    require('model/realisateur.php');
    $realisateurs = liste_realisateurs();
    require 'view/menu/nav-bar.php';
    require('view/realisateur/liste-des-realisateurs.php');
}


/** Fonction pour Creer Un Nouveau realisateur  **/
// http://127.0.1.1/php-procedural/cinema/realisateur/f_nouveau_realisateur
function f_nouveau_realisateur() //  c'est la fonction  appelé par le controller
{
    require 'view/menu/nav-bar.php';
    require('view/realisateur/creer-realisateur.php');
}
function creer_realisateur()
{
    require('model/realisateur.php');
    model_creer_realisateur($_POST); // !! $_POST nous permet de récupere les données du Formulaire qui sont déclarer dans name!!
}


/** Fonction pour Modifier  realisateur  **/
// http://127.0.1.1/php-procedural/cinema/realisateur/f_modifier_realisateur
function f_modifier_realisateur($id) // c'est la fonction  appelé par le controller
{
    require('model/realisateur.php');
    $realisateur = liste_realisateurs();
    $realisateur = un_realisateur($id);
    require 'view/menu/nav-bar.php';
    require('view/realisateur/modifier-realisateur.php');
}

function modifier_realisateur()
{
    require('model/realisateur.php');
    model_modifier_realisateur($_POST); //  $_POST nous permet de récupere les données du Formulaire qui sont déclarer dans name 

}


/** Fonction pour supprimer Un realisateur  **/
// http://127.0.1.1/php-procedural/cinema/realisateur/
function supprimer_realisateur() // c'est la fonction  appelé par le controller 
{
    require('model/realisateur.php');
    model_supprimer_realisateur($_POST); //  $_POST nous permet de récupere les données du Formulaire qui sont déclarer dans name 
}

