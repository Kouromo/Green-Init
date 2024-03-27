<?php
// Inclure le code de connexion à la base de données
require_once('connexion_Bdd.php');

// retourne l'image avec une largeur de 600 px
function resize($image, $image_name)
{
    // Obtenez les informations sur l'image
    $image_info = getimagesize($image);
    if ($image_info === false) {
        throw new Exception('Le fichier n\'est pas une image valide.');
    }

    // Créez une image à partir du fichier en fonction de son type
    switch ($image_info[2]) {
        case IMAGETYPE_PNG:
            $image = imagecreatefrompng($image);
            break;
        case IMAGETYPE_JPEG:
            $image = imagecreatefromjpeg($image);
            break;
        default:
            throw new Exception('Le type d\'image n\'est pas pris en charge.');
    }

    if ($image === false) {
        throw new Exception('Impossible de créer une image à partir du fichier.');
    }

    // Redimensionnez l'image
    $new_image = imagescale($image, 250);
    if ($new_image === false) {
        throw new Exception('Impossible de redimensionner l\'image.');
    }

    // Enregistrez l'image redimensionnée
    switch ($image_info[2]) {
        case IMAGETYPE_PNG:
            imagepng($new_image, $image_name);
            break;
        case IMAGETYPE_JPEG:
            imagejpeg($new_image, $image_name);
            break;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    $categorie = $_POST['categorie'];
    if (isset($_FILES['media_url']) && $_FILES['media_url']['size'] > 0) {
        $file_name = $_FILES['media_url']['name'];
        $extension = pathinfo($file_name, PATHINFO_EXTENSION);
        $file_tmp = $_FILES['media_url']['tmp_name'];
        $upload_dir = 'imgRetourExp/';
        $upload_path = $upload_dir . $file_name;

        // Resize img superior to 600px
        $image_size = getimagesize($file_tmp);
        if ($image_size[0] > 600 || $image_size[1] > 600)
            resize($file_tmp, $upload_path);
        else
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
            session_start();
            $_SESSION['insert'] = true;
            header("Location: commentEtPourquoiAgir.php");

        } else {
            error_log("Erreur lors de l'ajout de l'article dans la base de données.");
        }
}
    // Fermez la connexion à la base de données
    $connexion = null;

?>