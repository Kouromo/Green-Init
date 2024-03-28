<?php
try {
    $host = "paysbasqw2012.mysql.db";
    $dbname = "paysbasqw2012";
    $user = "paysbasqw2012";
    $password = "2hB1V5NT";


    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
    );


    $connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password, $options);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}