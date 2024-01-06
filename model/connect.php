<?php
// Les variables de connexions

$db_host     = 'mysql:host=127.0.1.1';
$db_name     = ';dbname=cinema';
$db_charset  = ';charset=UTF8';
$db_user     = 'root';
$db_password = '';

// Connxion a la BDD
try {
    $pdo = new PDO($db_host. $db_name . $db_charset, $db_user, $db_password );
    if(!$pdo)
    {
        die();
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}