<?php
// Inclure le code de connexion à la base de données
require_once('connexion_Bdd.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    $categorie = $_POST['categorie'];
    if(isset($_FILES['media_url']) || $_FILES['media_url'] = null) {
        $file_name = $_FILES['media_url']['name'];
        $extension = pathinfo($file_name, PATHINFO_EXTENSION);
        $file_tmp = $_FILES['media_url']['tmp_name'];
        $upload_dir = 'imgRetourExp/';
        $upload_path = $upload_dir . $file_name;
        move_uploaded_file($file_tmp, $upload_path);
    }
    else
        $file_name = null;

        $query = "INSERT INTO retourExperience (type, objetRetourExp, contenuRetourExp, image) VALUES (:type, :objetRetourExp, :contenuRetourExp, :image)";
        $stmt = $connexion->prepare($query);
        $stmt->bindParam(':type', $categorie, PDO::PARAM_STR);
        $stmt->bindParam(':objetRetourExp', $titre, PDO::PARAM_STR);
        $stmt->bindParam(':contenuRetourExp', $contenu, PDO::PARAM_STR);
        $stmt->bindParam(':image', $file_name, PDO::PARAM_STR);
        
        if ($stmt->execute()) {
            header("Location: index.php");
        } else {
            error_log("Erreur lors de l'ajout de l'article dans la base de données.");
        }
}
    // Fermez la connexion à la base de données
    $connexion = null;

?>