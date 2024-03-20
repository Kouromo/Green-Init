<?php
// Inclure le code de connexion à la base de données
require_once('connexion_Bdd.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    $file_name = $_FILES['media_url']['name'];
    $file_tmp = $_FILES['media_url']['tmp_name'];
    $categorie = $_FILES['categorie'];
    $extension = pathinfo($file_name, PATHINFO_EXTENSION);
    

    // Déplacez le fichier téléchargé vers un emplacement sur le serveur (par exemple, un dossier "media")
    $upload_dir = 'imgRetourExp/'; // Spécifiez le répertoire de destination
    $upload_path = $upload_dir . $file_name;
    if (move_uploaded_file($file_tmp, $upload_path)) {
    $query = "INSERT INTO articles (titre, contenu, media_url, categorie) VALUES (:titre, :contenu, :media_url, :categorie)";
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(':titre', $titre, PDO::PARAM_STR);
    $stmt->bindParam(':contenu', $contenu, PDO::PARAM_STR);
    $stmt->bindParam(':categorie', $categorie, PDO::PARAM_STR);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Erreur lors de l'ajout de l'article dans la base de données.";
    }
}
    // Fermez la connexion à la base de données
    $connexion = null;
} else {
    echo "Erreur lors de l'envoi du fichier.";
}

?>