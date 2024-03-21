<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="styleGlobal.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="ajouter_retour_exp.css">
    <link rel="icon" href="\img\logo.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,200,0,-25" />
    <script src="https://cdn.tiny.cloud/1/rkuvwlj7ckswfkwb5pee3gh9p7anwlxhdkbrkhbg5mqrvyhc/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
    <?php include 'header.php'; ?>
    <script src="menu-toggle.js"></script>
    <main>
        <?php
        session_start();
        if (isset ($_SESSION['utilisateur_connecte'])) {
            echo '<h2>Ajouter un article</h2>';
            echo '<form action="traitement_retour_exp.php" method="post" enctype="multipart/form-data">';
                echo '<div>';
                    echo '<label for="titre">Titre du retour d\'expérience : </label>';
                    echo '<input type="text" id="titre" name="titre">';
                echo '</div>';
                echo '<div>';
                    echo '<label for="contenu">Contenu du retour d\'expérience : </label>';
                    echo '<textarea id="contenu" name="contenu" rows="4" style="width: 100%; height: 192px;"></textarea>';
                echo '</div>';
                echo '<div>';
                    echo '<label for="media_url"><i class="material-symbols-outlined">attach_file</i> Image associée</label>';
                    echo '<input type="file" id="media_url" name="media_url" accept="image/*">';
                    echo '<span id="file-name"></span>';
                echo '</div>';
                echo '<div>';
                    echo '<label for="categorie">Catégorie :</label>';
                    echo '<select id="categorie" name="categorie">';
                        echo '<option value="TPE">TPE</option>';
                        echo '<option value="Association">Association</option>';
                        echo '<option value="Collectivité">Collectivité</option>';
                    echo '</select>';
                echo '</div>';
                
                echo '<input type="submit" class="bouton-vert"value="Ajouter le retour d\'expérience">';
            echo '</form>';
            
        } else {
            echo '<h2>Erreur : Vous devez vous connecter pour accéder à cette page</h2>';
            exit();
        }
        ?>
    </main>
    <script>
        document.getElementById('media_url').addEventListener('change', function(e) {
            var fileName = e.target.files[0].name;
            document.getElementById('file-name').textContent = "Fichier chargé : " + fileName;
        });
    </script>
    <?php include 'footer.php'; ?>
</body>

</html>