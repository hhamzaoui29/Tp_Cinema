<?php

$action     = $_GET['action'];
$tableau    = explode('/', $action);
$argument   = NULL;
$controller = $tableau[0];
$fonction   = $tableau[1];
var_dump($controller);


if(isset($tableau[2]))
{
    $argument = $tableau[2];
}

//echo "<pre>"; print_r($tableau); echo "</pre>"; die();
require('controller/'. $controller . '.php');

if(isset($argument))
{
    $fonction($argument);
    
} else {
    $fonction();
}

