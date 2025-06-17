<?php

$dbhost = 'localhost';
$dbname = 'my_database'; // Remplacez par le nom de votre base de données
$dbuser = 'root';
$dbpassword = '';

try {
    $db = new PDO(
        'mysql:host=' . $dbhost . ';dbname=' . $dbname,
        $dbuser,
        $dbpassword,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
    );
} catch (PDOException $e) {
    die("Une erreur est survenue lors de la connexion à la base des données");
}
