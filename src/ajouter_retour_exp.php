<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="styleGlobal.css">
    <script src="https://cdn.tiny.cloud/1/rkuvwlj7ckswfkwb5pee3gh9p7anwlxhdkbrkhbg5mqrvyhc/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
    <?php include 'header.php'; ?>
    <script src="menu-toggle.js"></script>
    <main>
        <?php
        // Vérifiez si l'utilisateur est connecté
        session_start();
        if (isset ($_SESSION['utilisateur_connecte'])) {
            // L'utilisateur est connecté, affichez le formulaire d'ajout d'articles
            echo '<h2>Ajouter un article</h2>';
            echo '<form action="traitement_retour_exp.php" method="post" enctype="multipart/form-data">';
                echo '<label for="titre">Titre du reExp :</label>';
                echo '<input type="text" id="titre" name="titre">';
                echo '<label for="contenu">Contenu du reExp :</label>';
                echo '<textarea id="contenu" name="contenu" rows="4" style="width: 100%; height: 192px;"></textarea>';
                echo '<label for="media_url">Image du reExp :</label>';
                echo '<input type="file" id="media_url" name="media_url" accept="image/*">';
                
                // Ajout du select avec les options
                echo '<label for="categorie">Catégorie :</label>';
                echo '<select id="categorie" name="categorie">';
                    echo '<option value="TPE">TPE</option>';
                    echo '<option value="Association">Association</option>';
                    echo '<option value="Collectivité">Collectivité</option>';
                echo '</select>';
                
                echo '<input type="submit" value="Ajouter le reExp">';
            echo '</form>';
            
        } else {
            echo '<h2>Erreur : Vous devez vous connecter pour accéder à cette page</h2>';
            exit(); // Assurez-vous de terminer le script après la redirection
        }
        ?>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>