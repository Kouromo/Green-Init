<?php
$score_ecoindex = $poids = $complexite = $requetes = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score_ecoindex = $_POST['score_ecoindex'];
    $poids = $_POST['poids'];
    $complexite = $_POST['complexite'];
    $requetes = $_POST['requetes'];
}

$performances = $accessibilite = $bonnes_pratique = $SEO = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $performances = $_POST['performances'];
    $accessibilite = $_POST['accessibilite'];
    $bonnes_pratique = $_POST['bonnes_pratique'];
    $SEO = $_POST['SEO'];
}

// Textes personnalisés en fonction des valeurs reçues

if ($score_ecoindex !== null) {

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
    $texte_poids = "Votre site est assez lourd en termes de poids. Pour améliorer ses performances et réduire son impact sur le chargement des pages, vous pouvez envisager ces stratégies :
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
}

if ($performances!== null) {

    $texte_performances = "";
    if ($performances >= 90) {
        $texte_performances = "Bravo ! Votre site obtient d'excellents résultats en termes de performances. Pour maintenir cette performance, vous pouvez suivre ces conseils :
        - Assurez-vous que les ressources critiques sont chargées en priorité pour améliorer le temps de rendu initial.
        - Utilisez la mise en cache côté client pour stocker temporairement les ressources souvent demandées et améliorer les temps de chargement.
        - Minimisez le temps de latence du serveur en utilisant un hébergement performant et en optimisant les requêtes de base de données.";
    } elseif ($performances >= 50) {
        $texte_performances = "Votre site a des performances moyennes. Pour l'optimiser davantage, envisagez les actions suivantes :
        - Réduisez la taille des fichiers CSS et JavaScript en supprimant les espaces inutiles et en minifiant le code.
        - Utilisez des techniques de chargement asynchrone pour les ressources non critiques afin d'accélérer le rendu initial de la page.
        - Optimisez les requêtes de base de données et les processus serveur pour réduire le temps de réponse.";
    } else {
        $texte_performances = "Les performances de votre site sont à améliorer. Voici quelques conseils pour y parvenir :
        - Identifiez et corrigez les goulets d'étranglement de performances en optimisant le chargement des ressources et en réduisant les temps de latence du serveur.
        - Utilisez des outils d'analyse de performances pour identifier les problèmes de rendu et les blocages de ressources.
        - Testez régulièrement votre site avec différents outils pour surveiller et améliorer ses performances.";
    }
    
        $texte_accessibilite = "";
    if ($accessibilite >= 90) {
        $texte_accessibilite = "Bravo ! Votre site obtient d'excellents résultats en termes d'accessibilité. Pour maintenir cette performance, vous pouvez suivre ces conseils :
        - Assurez-vous que le contenu multimédia est accompagné d'une alternative textuelle pour les utilisateurs ayant des difficultés visuelles.
        - Utilisez des balises sémantiques appropriées pour structurer le contenu et faciliter la navigation pour les utilisateurs de lecteurs d'écran.
        - Testez régulièrement l'accessibilité de votre site avec des outils spécialisés et en demandant des retours d'utilisateurs avec différents besoins.";
    } elseif ($accessibilite >= 50) {
        $texte_accessibilite = "Votre site a une accessibilité moyenne. Pour l'améliorer davantage, envisagez les actions suivantes :
        - Ajoutez des descriptions alternatives pour les images afin de rendre le contenu visuel accessible aux utilisateurs non voyants ou malvoyants.
        - Utilisez des contrôles de formulaire accessibles et assurez-vous que le clavier peut être utilisé pour naviguer et interagir avec le site sans dépendre de la souris.
        - Faites des tests d'accessibilité réguliers pour identifier et corriger les problèmes potentiels.";
    } else {
        $texte_accessibilite = "L'accessibilité de votre site est à améliorer. Voici quelques conseils pour y parvenir :
        - Identifiez les obstacles à l'accessibilité tels que les contrastes inadéquats, les liens non descriptifs et les erreurs de validation dans les formulaires.
        - Formez-vous et informez-vous sur les bonnes pratiques d'accessibilité et les normes en vigueur, comme les WCAG, pour garantir une meilleure accessibilité.
        - Impliquez les utilisateurs finaux, y compris ceux ayant des besoins spécifiques, dans le processus de test et de conception pour obtenir des retours précieux.";
    }

        $texte_bonnes_pratiques = "";
    if ($bonnes_pratiques >= 90) {
        $texte_bonnes_pratiques = "Félicitations ! Votre site respecte de nombreuses bonnes pratiques. Pour maintenir cette qualité, vous pouvez envisager les actions suivantes :
        - Poursuivez l'application des bonnes pratiques de codage telles que l'utilisation de balises sémantiques, la minimisation des ressources et l'optimisation des performances.
        - Gardez vos technologies et frameworks à jour pour bénéficier des dernières améliorations en matière de sécurité et de performances.
        - Collaborez avec d'autres développeurs et partagez vos connaissances pour améliorer les compétences et les normes de l'équipe.";
    } elseif ($bonnes_pratiques >= 50) {
        $texte_bonnes_pratiques = "Votre site respecte un nombre moyen de bonnes pratiques. Pour améliorer, vous pouvez envisager les étapes suivantes :
        - Identifiez les zones où les bonnes pratiques ne sont pas suivies et trouvez des solutions pour les corriger.
        - Utilisez des outils d'analyse de code pour détecter les problèmes potentiels et appliquer des corrections automatiques lorsque cela est possible.
        - Faites des revues de code régulières pour garantir que les nouvelles fonctionnalités respectent les normes établies.";
    } else {
        $texte_bonnes_pratiques = "Votre site a besoin d'améliorations en termes de bonnes pratiques. Voici quelques recommandations pour commencer :
        - Effectuez un audit complet du code pour identifier les violations des bonnes pratiques et établir un plan d'action pour les résoudre.
        - Formez votre équipe sur les meilleures pratiques de développement et assurez-vous qu'elles sont suivies tout au long du cycle de développement.
        - Adoptez une approche itérative pour améliorer progressivement la qualité du code et des processus de développement.";
    }

        $texte_seo = "";
    if ($seo >= 90) {
        $texte_seo = "Bravo ! Votre site atteint un niveau élevé en termes de référencement. Pour maintenir cette performance, vous pouvez envisager ces stratégies :
        - Continuez à produire un contenu de qualité et à l'optimiser pour les mots-clés pertinents dans votre niche.
        - Améliorez l'expérience utilisateur en rendant votre site rapide, mobile-friendly et facile à naviguer.
        - Utilisez des outils d'analyse pour suivre vos classements, identifier les opportunités de mots-clés et surveiller la concurrence.";
    } elseif ($seo >= 50) {
        $texte_seo = "Votre site a un référencement moyen. Pour l'améliorer, vous pouvez envisager ces actions :
        - Effectuez une analyse approfondie des mots-clés pour identifier les lacunes et les opportunités d'optimisation.
        - Optimisez vos balises meta, vos URL et votre contenu pour inclure des mots-clés pertinents et améliorer la pertinence de votre site.
        - Créez des backlinks de qualité à partir de sites pertinents et autorisés pour renforcer l'autorité de votre domaine.";
    } else {
        $texte_seo = "Votre site a besoin d'améliorations significatives en termes de référencement. Voici quelques recommandations pour vous aider à démarrer :
        - Effectuez une analyse approfondie des mots-clés pour cibler les termes les plus pertinents pour votre site.
        - Optimisez vos pages pour une meilleure expérience utilisateur et une meilleure lisibilité, en mettant l'accent sur les titres, les descriptions et le contenu.
        - Travaillez sur la construction de backlinks de qualité et la promotion de votre contenu pour améliorer la visibilité de votre site.";
    }  

}



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleGlobal.css">
    <link rel="icon" href="\img\logo.png" />
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
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
