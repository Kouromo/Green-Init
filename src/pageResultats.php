<?php

// Default value
$score_ecoindex = $poids = $complexite = $requetes = "";
$performances = $accessibilite = $bonnes_pratiques = $seo = "";

// Get values from form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score_ecoindex = $_POST['score_ecoindex'];
    $poids = $_POST['poids'];
    $complexite = $_POST['complexite'];
    $requetes = $_POST['requetes'];
    $performances = $_POST['performances'];
    $accessibilite = $_POST['accessibilite'];
    $bonnes_pratiques = $_POST['bonnes_pratique'];
    $seo = $_POST['SEO'];
}

// Function utility
function wrapInParagraph($string, $boolean = false) {
    if ($boolean == false)
        return "<p>" . $string . "</p>";
    else
        return "<p class='scores'>" . $string . "</p>";
}


if ($score_ecoindex !== null) {

    $texte_poids = "";
    switch (true) {
        case ($poids < 1):
            $texte_poids = "Bravo ! Votre site web est bien plus léger que la moyenne. Cependant, pour maintenir cette performance, vous pouvez encore optimiser son poids en suivant ces conseils : <br>
                - Choisissez des formats d'image exclusifs au web, tels que JPEG ou WebP.<br>
                - Limitez l'utilisation de fichiers JavaScript et CSS externes, et minifiez-les si nécessaire.<br>
                - Supprimez les scripts et les plugins non essentiels qui peuvent alourdir la charge de la page.<br>
                ";
            break;
        case ($poids >= 1 && $poids < 1.5):
            $texte_poids = "Votre site a un poids léger à moyen. Pour améliorer encore son optimisation, vous pouvez envisager les actions suivantes :<br>
                - Optimisez vos images en comprimant davantage les fichiers et en réduisant leur taille.<br>
                - Réduisez le nombre de requêtes HTTP en combinant les fichiers CSS et JavaScript lorsque cela est possible.<br>
                - Utilisez des techniques de chargement asynchrone pour les ressources non critiques afin d'accélérer le chargement de la page.<br>
                ";
            break;
        case ($poids >= 1.5 && $poids < 2):
            $texte_poids = "Votre site a un poids moyen à lourd. Pour réduire la charge de la page et améliorer les performances, vous pouvez prendre les mesures suivantes :<br>
                - Utilisez des outils d'optimisation d'image avancés pour réduire la taille des fichiers sans compromettre la qualité visuelle.<br>
                - Analysez et éliminez les scripts et les ressources inutiles qui ralentissent le chargement de la page.<br>
                - Mettez en cache les ressources statiques pour accélérer les temps de chargement et réduire la bande passante utilisée.<br>
                ";
            break;
        default:
            $texte_poids = "Votre site est assez lourd en termes de poids. Pour améliorer ses performances et réduire son impact sur le chargement des pages, vous pouvez envisager ces stratégies :<br>
                - Priorisez la compression et l'optimisation des images pour réduire la charge du serveur et accélérer le chargement.<br>
                - Optimisez le code CSS et JavaScript en supprimant les doublons et en minimisant les fichiers pour réduire la taille des ressources téléchargées.<br>
                - Utilisez des techniques avancées de mise en cache pour stocker temporairement les ressources fréquemment utilisées et améliorer les temps de réponse du serveur.<br>
                ";
            break;
    }

    $texte_complexite = "";
    switch (true) {
        case ($complexite < 300):
            $texte_complexite = "La complexité de votre site est relativement faible. Pour maintenir une bonne gestion de la complexité, vous pouvez envisager ces recommandations :<br>
                - Simplifiez la structure de votre code en utilisant des conventions de nommage cohérentes et des commentaires clairs.<br>
                - Divisez les fonctionnalités complexes en composants plus petits et modulaires pour faciliter la maintenance.<br>
                - Utilisez des outils de gestion de version pour suivre les modifications et collaborer efficacement sur le code.<br>
                ";
            break;
        case ($complexite >= 300 && $complexite < 550):
            $texte_complexite = "La complexité de votre site est moyenne. Pour optimiser davantage la gestion de la complexité, vous pouvez prendre en compte les points suivants :<br>
                - Identifiez les parties du code susceptibles de causer des problèmes et effectuez une refonte progressive pour les simplifier.<br>
                - Documentez soigneusement les parties les plus complexes du code pour faciliter la compréhension et la maintenance à long terme.<br>
                - Établissez des processus de revue de code réguliers pour identifier et corriger les éventuels problèmes de complexité.<br>
                ";
            break;
        case ($complexite >= 550 && $complexite < 700):
            $texte_complexite = "La complexité de votre site est assez élevée. Pour gérer efficacement cette complexité, vous pouvez envisager les actions suivantes :<br>
                - Identifiez les zones du code les plus complexes et recherchez des moyens de les simplifier ou de les réorganiser.<br>
                - Utilisez des outils d'analyse statique pour détecter les modèles de code redondants ou les structures inutilement complexes.<br>
                - Implémentez des tests automatisés pour garantir que les modifications du code ne génèrent pas de nouvelles complications.<br>
                ";
            break;
        default:
            $texte_complexite = "La complexité de votre site est très élevée. Pour réduire la complexité et améliorer la maintenabilité du code, vous pouvez envisager les actions suivantes :<br>
                - Divisez le code en modules distincts et hiérarchisés pour mieux organiser les fonctionnalités.<br>
                - Appliquez des principes de conception tels que l'encapsulation et l'abstraction pour rendre le code plus compréhensible et facile à modifier.<br>
                - Mettez en œuvre des pratiques de développement telles que le refactoring régulier pour éliminer les redondances et les structures inutiles.<br>
                ";
            break;
    }



    $texte_requetes = "";
    switch (true) {
        case ($requetes < 30):
            $texte_requetes = "Le nombre de requêtes sur votre site est relativement faible. Pour maintenir des performances élevées, vous pouvez prendre en compte ces conseils :<br>
                - Réduisez le nombre de ressources externes, telles que les scripts et les feuilles de style, pour minimiser les demandes HTTP.<br>
                - Utilisez des techniques de préchargement pour anticiper les ressources nécessaires et améliorer la réactivité de la page.<br>
                - Exploitez la mise en cache côté client pour stocker temporairement les données fréquemment utilisées et réduire les temps de chargement.<br>
                ";
            break;
        case ($requetes >= 30 && $requetes < 50):
            $texte_requetes = "Le nombre de requêtes sur votre site est moyen. Pour optimiser les performances, envisagez d'appliquer les meilleures pratiques suivantes :<br>
                - Consolidation des fichiers CSS et JavaScript pour réduire le nombre de demandes HTTP et accélérer le chargement de la page.<br>
                - Utilisation de la mise en cache côté serveur pour stocker temporairement les données souvent demandées et réduire les temps de réponse.<br>
                - Réduction de la taille des ressources téléchargées en compressant les fichiers et en optimisant les images pour le web.<br>
                ";
            break;
        case ($requetes >= 50 && $requetes < 70):
            $texte_requetes = "Le nombre de requêtes sur votre site est assez élevé. Pour améliorer les performances et réduire la charge du serveur, vous pouvez envisager ces stratégies :<br>
                - Consolidation et minification des fichiers CSS et JavaScript pour réduire la taille des ressources et améliorer les temps de chargement.<br>
                - Utilisation de la mise en cache HTTP pour stocker temporairement les données souvent demandées et réduire la latence du serveur.<br>
                - Réduction du nombre de requêtes en regroupant les ressources similaires et en évitant les appels superflus à des scripts externes.<br>
                ";
            break;
        default:
            $texte_requetes = "Le nombre de requêtes sur votre site est très élevé. Pour optimiser les performances et garantir une expérience utilisateur fluide, vous pouvez envisager les actions suivantes :<br>
                - Analysez et optimisez la structure de votre site pour réduire le nombre total de requêtes HTTP.<br>
                - Utilisez des techniques avancées telles que l'asynchronisme et le chargement différé pour charger les ressources de manière plus efficace.<br>
                - Mettez en œuvre une stratégie de mise en cache intelligente pour réduire la charge du serveur et améliorer les temps de réponse.<br>
                ";
            break;
    }
}

if ($performances !== null)
{
    $texte_performances = "";
    switch (true) {
        case ($performances >= 90):
            $texte_performances = "Bravo ! Votre site obtient d'excellents résultats en termes de performances. Pour maintenir cette performance, vous pouvez suivre ces conseils :<br>
                - Assurez-vous que les ressources critiques sont chargées en priorité pour améliorer le temps de rendu initial.<br>
                - Utilisez la mise en cache côté client pour stocker temporairement les ressources souvent demandées et améliorer les temps de chargement.<br>
                - Minimisez le temps de latence du serveur en utilisant un hébergement performant et en optimisant les requêtes de base de données.<br>
                ";
            break;
        case ($performances >= 50):
            $texte_performances = "Votre site a des performances moyennes. Pour l'optimiser davantage, envisagez les actions suivantes :<br>
                - Réduisez la taille des fichiers CSS et JavaScript en supprimant les espaces inutiles et en minifiant le code.<br>
                - Utilisez des techniques de chargement asynchrone pour les ressources non critiques afin d'accélérer le rendu initial de la page.<br>
                - Optimisez les requêtes de base de données et les processus serveur pour réduire le temps de réponse.<br>
                ";
            break;
        default:
            $texte_performances = "Les performances de votre site sont à améliorer. Voici quelques conseils pour y parvenir :<br>
                - Identifiez et corrigez les goulets d'étranglement de performances en optimisant le chargement des ressources et en réduisant les temps de latence du serveur.<br>
                - Utilisez des outils d'analyse de performances pour identifier les problèmes de rendu et les blocages de ressources.<br>
                - Testez régulièrement votre site avec différents outils pour surveiller et améliorer ses performances.<br>
                ";
            break;
    }

    $texte_accessibilite = "";
    switch (true) {
        case ($accessibilite >= 90):
            $texte_accessibilite = "Bravo ! Votre site obtient d'excellents résultats en termes d'accessibilité. Pour maintenir cette performance, vous pouvez suivre ces conseils :<br>
                - Assurez-vous que le contenu multimédia est accompagné d'une alternative textuelle pour les utilisateurs ayant des difficultés visuelles.<br>
                - Utilisez des balises sémantiques appropriées pour structurer le contenu et faciliter la navigation pour les utilisateurs de lecteurs d'écran.<br>
                - Testez régulièrement l'accessibilité de votre site avec des outils spécialisés et en demandant des retours d'utilisateurs avec différents besoins.<br>
                ";
            break;
        case ($accessibilite >= 50):
            $texte_accessibilite = "Votre site a une accessibilité moyenne. Pour l'améliorer davantage, envisagez les actions suivantes :<br>
                - Ajoutez des descriptions alternatives pour les images afin de rendre le contenu visuel accessible aux utilisateurs non voyants ou malvoyants.<br>
                - Utilisez des contrôles de formulaire accessibles et assurez-vous que le clavier peut être utilisé pour naviguer et interagir avec le site sans dépendre de la souris.<br>
                - Faites des tests d'accessibilité réguliers pour identifier et corriger les problèmes potentiels.<br>
                ";
            break;
        default:
            $texte_accessibilite = "L'accessibilité de votre site est à améliorer. Voici quelques conseils pour y parvenir :<br>
                - Identifiez les obstacles à l'accessibilité tels que les contrastes inadéquats, les liens non descriptifs et les erreurs de validation dans les formulaires.<br>
                - Formez-vous et informez-vous sur les bonnes pratiques d'accessibilité et les normes en vigueur, comme les WCAG, pour garantir une meilleure accessibilité.<br>
                - Impliquez les utilisateurs finaux, y compris ceux ayant des besoins spécifiques, dans le processus de test et de conception pour obtenir des retours précieux.<br>
                ";
            break;
    }

    $texte_bonnes_pratiques = "";
    switch (true) {
        case ($bonnes_pratiques >= 90):
            $texte_bonnes_pratiques = "Félicitations ! Votre site respecte de nombreuses bonnes pratiques. Pour maintenir cette qualité, vous pouvez envisager les actions suivantes :<br>
                - Poursuivez l'application des bonnes pratiques de codage telles que l'utilisation de balises sémantiques, la minimisation des ressources et l'optimisation des performances.<br>
                - Gardez vos technologies et frameworks à jour pour bénéficier des dernières améliorations en matière de sécurité et de performances.<br>
                - Collaborez avec d'autres développeurs et partagez vos connaissances pour améliorer les compétences et les normes de l'équipe.<br>
                ";
            break;
        case ($bonnes_pratiques >= 50):
            $texte_bonnes_pratiques = "Votre site respecte un nombre moyen de bonnes pratiques. Pour améliorer, vous pouvez envisager les étapes suivantes :<br>
                - Identifiez les zones où les bonnes pratiques ne sont pas suivies et trouvez des solutions pour les corriger.<br>
                - Utilisez des outils d'analyse de code pour détecter les problèmes potentiels et appliquer des corrections automatiques lorsque cela est possible.<br>
                - Faites des revues de code régulières pour garantir que les nouvelles fonctionnalités respectent les normes établies.<br>
                ";
            break;
        default:
            $texte_bonnes_pratiques = "Votre site a besoin d'améliorations en termes de bonnes pratiques. Voici quelques recommandations pour commencer :<br>
                - Effectuez un audit complet du code pour identifier les violations des bonnes pratiques et établir un plan d'action pour les résoudre.<br>
                - Formez votre équipe sur les meilleures pratiques de développement et assurez-vous qu'elles sont suivies tout au long du cycle de développement.<br>
                - Adoptez une approche itérative pour améliorer progressivement la qualité du code et des processus de développement.<br>
                ";
            break;
    }

    $texte_seo = "";
    switch (true) {
        case ($seo >= 90):
            $texte_seo = "Bravo ! Votre site atteint un niveau élevé en termes de référencement. Pour maintenir cette performance, vous pouvez envisager ces stratégies :<br>
                - Continuez à produire un contenu de qualité et à l'optimiser pour les mots-clés pertinents dans votre niche.<br>
                - Améliorez l'expérience utilisateur en rendant votre site rapide, mobile-friendly et facile à naviguer.<br>
                - Utilisez des outils d'analyse pour suivre vos classements, identifier les opportunités de mots-clés et surveiller la concurrence.<br>
                ";
            break;
        case ($seo >= 50):
            $texte_seo = "Votre site a un référencement moyen. Pour l'améliorer, vous pouvez envisager ces actions :<br>
                - Effectuez une analyse approfondie des mots-clés pour identifier les lacunes et les opportunités d'optimisation.<br>
                - Optimisez vos balises meta, vos URL et votre contenu pour inclure des mots-clés pertinents et améliorer la pertinence de votre site.<br>
                - Créez des backlinks de qualité à partir de sites pertinents et autorisés pour renforcer l'autorité de votre domaine.<br>
                ";
            break;
        default:
            $texte_seo = "Votre site a besoin d'améliorations significatives en termes de référencement. Voici quelques recommandations pour vous aider à démarrer :<br>
                - Effectuez une analyse approfondie des mots-clés pour cibler les termes les plus pertinents pour votre site.<br>
                - Optimisez vos pages pour une meilleure expérience utilisateur et une meilleure lisibilité, en mettant l'accent sur les titres, les descriptions et le contenu.<br>
                - Travaillez sur la construction de backlinks de qualité et la promotion de votre contenu pour améliorer la visibilité de votre site.<br>
                ";
            break;
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
                <?php if ($score_ecoindex !== "" && $score_ecoindex !== null): ?>
                    <h2>Résultats Écoindex</h2>
                    <article>
                        <h3>Votre score Écoindex :</h3>
                        <br>
                        <div class="scoreContent">
                            <?php echo wrapInParagraph($score_ecoindex, true); ?>
                        </div>
                        <br>
                    </article>
                    <article>
                        <h3>Le poids de votre site :</h3>
                        <br>
                        <div class="scoreContent">
                            <?php echo wrapInParagraph($poids, true); ?>
                        </div>
                        <br>
                        <?php echo wrapInParagraph($texte_poids); ?>
                    </article>
                    <article>
                        <h3>La complexité de votre site :</h3>
                        <br>
                        <div class="scoreContent">
                            <?php echo wrapInParagraph($complexite, true); ?>
                        </div>
                        <br>
                        <?php echo wrapInParagraph($texte_complexite); ?>
                    </article>
                    <article>
                        <h3>Le nombre de requêtes :</h3>
                        <br>
                        <div class="scoreContent">
                            <?php echo wrapInParagraph($requetes, true); ?>
                        </div>
                        <br><br>
                        <?php echo wrapInParagraph($texte_requetes); ?>
                    </article>
                <?php endif; ?>
                </section>

                <section>
                <?php if ($performances !== "" && $performances !== null): ?>
                    <h2>Résultats Speedpages</h2>
                    <article>
                        <h3>Performances de votre site :</h3>
                        <br>
                        <div class="scoreContent">
                            <?php echo wrapInParagraph($performances, true); ?>
                        </div>
                        <br>
                        <?php echo wrapInParagraph($texte_performances); ?>
                    </article>
                    <article>
                        <h3>Accessibilité de votre site :</h3>
                        <br>
                        <div class="scoreContent">
                            <?php echo wrapInParagraph($accessibilite, true); ?>
                        </div>
                        <br>
                        <?php echo wrapInParagraph($texte_accessibilite); ?>
                    </article>
                    <article>
                        <h3>Bonnes pratiques de votre site :</h3>
                        <br>
                        <div class="scoreContent">
                            <?php echo wrapInParagraph($bonnes_pratiques, true); ?>
                        </div>
                        <br>
                        <?php echo wrapInParagraph($texte_bonnes_pratiques); ?>
                    </article>
                    <article>
                        <h3>SEO de votre site :</h3>
                        <br>
                        <div class="scoreContent">
                            <?php echo wrapInParagraph($seo, true); ?>
                        </div>
                        <br>
                        <?php echo wrapInParagraph($texte_seo); ?>
                    </article>
                <?php endif; ?>

        </main>
        <?php include 'footer.php'; ?>
    </body>
</html>