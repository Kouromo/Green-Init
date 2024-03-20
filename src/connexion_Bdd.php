<?php
try {
    $host = "mysql-kouromo.alwaysdata.net"; // Adresse du serveur de la base de données
    $dbname = "kouromo_greeninit_retourexp"; // Nom de la base de données
    $user = "kouromo"; // Nom d'utilisateur de la base de données
    $password = "s'il-vous-plait-aidez-moi"; // Mot de passe de la base de données

    // Options de connexion PDO
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Générer des exceptions en cas d'erreur
        PDO::ATTR_EMULATE_PREPARES => false, // Désactiver l'émulation des requêtes préparées
    );

    // Créez une instance PDO pour la connexion à la base de données
    $connexion = new PDO("mysql:host=$host;dbname=$dbname", $user, $password, $options);
} catch (PDOException $e) {
    // En cas d'erreur de connexion
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}