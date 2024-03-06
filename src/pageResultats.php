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
    $texte_poids = "Bravo ! Votre site web est bien plus léger que la moyenne. Cependant, pour maintenir cette performance, vous pouvez encore optimiser son poids en suivant ces conseils :
    - Choisissez des formats d'image exclusifs au web, tels que JPEG ou WebP.
    - Limitez l'utilisation de fichiers JavaScript et CSS externes, et minifiez-les si nécessaire.
    - Supprimez les scripts et les plugins non essentiels qui peuvent alourdir la charge de la page.";
} elseif ($poids >= 1 && $poids < 1.5) {
    $texte_poids = "Votre site a un poids léger à moyen. Pour améliorer encore son optimisation, vous pouvez envisager les actions suivantes :
    - Optimisez vos images en comprimant davantage les fichiers et en réduisant leur taille.
    - Réduisez le nombre de requêtes HTTP en combinant les fichiers CSS et JavaScript lorsque cela est possible.
    - Utilisez des techniques de chargement asynchrone pour les ressources non critiques afin d'accélérer le chargement de la page.";
} elseif ($poids >= 1.5 && $poids < 2) {
    $texte_poids = "Votre site a un poids moyen à lourd. Pour réduire la charge de la page et améliorer les performances, vous pouvez prendre les mesures suivantes :
    - Utilisez des outils d'optimisation d'image avancés pour réduire la taille des fichiers sans compromettre la qualité visuelle.
    - Analysez et éliminez les scripts et les ressources inutiles qui ralentissent le chargement de la page.
    - Mettez en cache les ressources statiques pour accélérer les temps de chargement et réduire la bande passante utilisée.";
} else {
    $texte_poids = "Votre site est plutôt lourd en termes de poids. Pour améliorer ses performances et réduire son impact sur le chargement des pages, vous pouvez envisager ces stratégies :
    - Priorisez la compression et l'optimisation des images pour réduire la charge du serveur et accélérer le chargement.
    - Optimisez le code CSS et JavaScript en supprimant les doublons et en minimisant les fichiers pour réduire la taille des ressources téléchargées.
    - Utilisez des techniques avancées de mise en cache pour stocker temporairement les ressources fréquemment utilisées et améliorer les temps de réponse du serveur.";
}


$texte_complexite = "";
if ($complexite < 300) {
    $texte_complexite = "La complexité de votre site est relativement faible. Pour maintenir une bonne gestion de la complexité, vous pouvez envisager ces recommandations :
    - Simplifiez la structure de votre code en utilisant des conventions de nommage cohérentes et des commentaires clairs.
    - Divisez les fonctionnalités complexes en composants plus petits et modulaires pour faciliter la maintenance.
    - Utilisez des outils de gestion de version pour suivre les modifications et collaborer efficacement sur le code.";
} elseif ($complexite >= 300 && $complexite < 550) {
    $texte_complexite = "La complexité de votre site est moyenne. Pour optimiser davantage la gestion de la complexité, vous pouvez prendre en compte les points suivants :
    - Identifiez les parties du code susceptibles de causer des problèmes et effectuez une refonte progressive pour les simplifier.
    - Documentez soigneusement les parties les plus complexes du code pour faciliter la compréhension et la maintenance à long terme.
    - Établissez des processus de revue de code réguliers pour identifier et corriger les éventuels problèmes de complexité.";
} elseif ($complexite >= 550 && $complexite < 700) {
    $texte_complexite = "La complexité de votre site est assez élevée. Pour gérer efficacement cette complexité, vous pouvez envisager les actions suivantes :
    - Identifiez les zones du code les plus complexes et recherchez des moyens de les simplifier ou de les réorganiser.
    - Utilisez des outils d'analyse statique pour détecter les modèles de code redondants ou les structures inutilement complexes.
    - Implémentez des tests automatisés pour garantir que les modifications du code ne génèrent pas de nouvelles complications.";
} else {
    $texte_complexite = "La complexité de votre site est très élevée. Pour réduire la complexité et améliorer la maintenabilité du code, vous pouvez envisager les actions suivantes :
    - Divisez le code en modules distincts et hiérarchisés pour mieux organiser les fonctionnalités.
    - Appliquez des principes de conception tels que l'encapsulation et l'abstraction pour rendre le code plus compréhensible et facile à modifier.
    - Mettez en œuvre des pratiques de développement telles que le refactoring régulier pour éliminer les redondances et les structures inutiles.";
}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      


$texte_requetes = "";
if ($requetes < 30) {
    $texte_requetes = "Le nombre de requêtes sur votre site est relativement faible. Pour maintenir des performances élevées, vous pouvez prendre en compte ces conseils :
    - Réduisez le nombre de ressources externes, telles que les scripts et les feuilles de style, pour minimiser les demandes HTTP.
    - Utilisez des techniques de préchargement pour anticiper les ressources nécessaires et améliorer la réactivité de la page.
    - Exploitez la mise en cache côté client pour stocker temporairement les données fréquemment utilisées et réduire les temps de chargement.";
} elseif ($requetes >= 30 && $requetes < 50) {
    $texte_requetes = "Le nombre de requêtes sur votre site est moyen. Pour optimiser les performances, envisagez d'appliquer les meilleures pratiques suivantes :
    - Consolidation des fichiers CSS et JavaScript pour réduire le nombre de demandes HTTP et accélérer le chargement de la page.
    - Utilisation de la mise en cache côté serveur pour stocker temporairement les données souvent demandées et réduire les temps de réponse.
    - Réduction de la taille des ressources téléchargées en compressant les fichiers et en optimisant les images pour le web.";
} elseif ($requetes >= 50 && $requetes < 70) {
    $texte_requetes = "Le nombre de requêtes sur votre site est assez élevé. Pour améliorer les performances et réduire la charge du serveur, vous pouvez envisager ces stratégies :
    - Consolidation et minification des fichiers CSS et JavaScript pour réduire la taille des ressources et améliorer les temps de chargement.
    - Utilisation de la mise en cache HTTP pour stocker temporairement les données souvent demandées et réduire la latence du serveur.
    - Réduction du nombre de requêtes en regroupant les ressources similaires et en évitant les appels superflus à des scripts externes.";
} else {
    $texte_requetes = "Le nombre de requêtes sur votre site est très élevé. Pour optimiser les performances et garantir une expérience utilisateur fluide, vous pouvez envisager les actions suivantes :
    - Analysez et optimisez la structure de votre site pour réduire le nombre total de requêtes HTTP.
    - Utilisez des techniques avancées telles que l'asynchronisme et le chargement différé pour charger les ressources de manière plus efficace.
    - Mettez en œuvre une stratégie de mise en cache intelligente pour réduire la charge du serveur et améliorer les temps de réponse.";
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
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
