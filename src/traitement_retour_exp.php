<?php
// Inclure le code de connexion à la base de données
require_once('connexion_Bdd.php');

// retourne l'image avec une largeur de 600 px
function resize($image, $image_name)
{
    // Vérifiez que le fichier est une image PNG valide
    if (mime_content_type($image) != 'image/png') {
        throw new Exception('Le fichier n\'est pas une image PNG valide.');
    }

    // Créez une image à partir du fichier
    $image = imagecreatefrompng($image);
    if ($image === false) {
        throw new Exception('Impossible de créer une image à partir du fichier.');
    }

    // Redimensionnez l'image
    $new_image = imagescale($image, 600);
    if ($new_image === false) {
        throw new Exception('Impossible de redimensionner l\'image.');
    }

    // Enregistrez l'image redimensionnée
    imagepng($new_image, $image_name);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    $categorie = $_POST['categorie'];
    if(isset($_FILES['media_url']) || $_FILES['media_url'] == null) {
        $file_name = $_FILES['media_url']['name'];
        $extension = pathinfo($file_name, PATHINFO_EXTENSION);
        $file_tmp = $_FILES['media_url']['tmp_name'];
        $upload_dir = 'imgRetourExp/';
        $upload_path = $upload_dir . $file_name;

        // If the img is superior to 600px, resize it
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
            header("Location: index.php");
        } else {
            error_log("Erreur lors de l'ajout de l'article dans la base de données.");
        }
}
    // Fermez la connexion à la base de données
    $connexion = null;

?>