<?php
$score_ecoindex = $poids = $complexite = $requetes = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score_ecoindex = $_POST['score_ecoindex'];
    $poids = $_POST['poids'];
    $complexite = $_POST['complexite'];
    $requetes = $_POST['requetes'];
}

// Textes personnalisés en fonction des valeurs reçues
$texte_poids = "";
if ($poids < 1) {
    $texte_poids = "Bravo vous avez un site web bien plus léger que la moyenne. Cependant, si vous voulez continuer dans cette lancée, vous pouvez encore plus réduire le poids de votre page en réalisant plusieurs petites actions, telles que :
    - Choisir des formats d'image exclusifs au web.
    - Limiter au maximum l'utilisation de vidéos, ou au moins ne pas les charger tant qu'elles n'ont pas été cliquées.
    - Compresser vos fichiers pour qu'ils prennent moins de place.";    
} elseif ($poids >= 1 && $poids < 1.5) {
    $texte_poids = "Votre site a un poids léger à moyen.";
} elseif ($poids >= 1.5 && $poids < 2) {
    $texte_poids = "Votre site a un poids moyen à lourd.";
} else {
    $texte_poids = "Votre site est plutôt lourd en termes de poids.";
}

$texte_complexite = "";
if ($complexite < 50) {
    $texte_complexite = "La complexité de votre site est assez faible.";
} elseif ($complexite >= 50 && $complexite < 100) {
    $texte_complexite = "La complexité de votre site est moyenne.";
} else {
    $texte_complexite = "La complexité de votre site est assez élevée.";
}

$texte_requetes = "";
if ($requetes < 50) {
    $texte_requetes = "Le nombre de requêtes sur votre site est relativement faible.";
} elseif ($requetes >= 50 && $requetes < 100) {
    $texte_requetes = "Le nombre de requêtes sur votre site est moyen.";
} else {
    $texte_requetes = "Le nombre de requêtes sur votre site est assez élevé.";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleGlobal.css">
    <link rel="icon" href="..\lib\img\logo.png" />
    <link rel="stylesheet" href="header.css">
    <title>Résultats Écoindex</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <script src="menu-toggle.js"></script>
    <main>
        <section>
            <h2>Résultats Écoindex</h2>
            <article>
                <h3>Votre score Écoindex :</h3>
                <p><?php echo $score_ecoindex; ?></p>
            </article>
            <article>
                <h3>Le poids de votre site :</h3>
                <p><?php echo $poids; ?></p>
                <p><?php echo $texte_poids; ?></p>
            </article>
            <article>
                <h3>La complexité de votre site :</h3>
                <p><?php echo $complexite; ?></p>
                <p><?php echo $texte_complexite; ?></p>
            </article>
            <article>
                <h3>Le nombre de requêtes :</h3>
                <p><?php echo $requetes; ?></p>
                <p><?php echo $texte_requetes; ?></p>
            </article>
            <!-- Vous pouvez ajouter d'autres informations Écoindex ici -->
        </section>
        <hr>
        <section>
            <h2>Votre historique des analyses</h2> 
            <table>
                <tr>
                    <th>Date</th>
                    <th>Dernier score Écoindex</th>
                </tr>
                <tr>
                    <td>01/01/2021</td>
                    <td>50</td>
                </tr>
                <!-- Ajoutez d'autres entrées d'historique ici -->
            </table>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
