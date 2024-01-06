<?php

require 'model/acteur.php';
require 'model/film.php';

/** Fonction pour afficher Tous les affiches  **/
// http://127.0.1.1/php-procedural/cinema/affiche/afficher_affiches
function afficher_affiches() 
{

    require('model/affiche.php');
    $affiches = liste_affiches_films();
    require('view/affiche/liste-des-affiches.php');
}
