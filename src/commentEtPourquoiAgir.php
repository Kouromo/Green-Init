<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleGlobal.css">
    <link rel="stylesheet" href="styleCommentEtPourquoiAgir.css">
    <link rel="icon" href="\img\logo.png" />
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <title>Comment et pourquoi agir ?</title>
    <script src="matomo.js"></script>
</head>
<?php
session_start();
require_once ('connexion_Bdd.php');
$query = "SELECT * FROM retourExperience GROUP BY id DESC";
$result = $connexion->query($query);
if ($result) {
    // Stockage du nombre de lignes retournées dans une variable de session
    $_SESSION['row_count'] = $result->rowCount();

    // Stockage des données elles-mêmes dans une variable de session
    $_SESSION['retour_experience_data'] = $result->fetchAll(PDO::FETCH_ASSOC);
}
?>


<body>
    <?php include 'header.php'; ?>
    <script src="menu-toggle.js"></script>
    <main>
        <section>
            <h1>Comment et pourquoi agir à mon niveau ?</h1>
            <?php
            if (isset ($_SESSION['utilisateur_connecte']) && $_SESSION['utilisateur_connecte']) {
                echo "<a href='ajouter_retour_exp.php' class='bouton-vert'>Ajouter un reExp</a>";
            }
            ?>
            <article>
                <h2 id="associationAgir">Association</h2>
                <p class="justifiedParagraph">
                    En tant qu'association, intégrer le Numérique Responsable dans vos activités peut avoir un impact
                    positif sur votre image et votre mission.
                    En adoptant des pratiques numériques respectueuses de l'environnement, vous contribuez à la
                    préservation de notre planète tout en montrant
                    votre engagement envers la durabilité. Les membres de votre association peuvent également être
                    sensibilisé.e.s aux enjeux du Numérique Responsable
                    grâce à nos ressources éducatives et aux outils d'auto-évaluation NR spécialement conçus pour les
                    associations. Ensemble, nous pouvons faire de votre
                    association un modèle de durabilité numérique.
                </p>
            </article>
            <?php
            
            // Si la variable de session row_count existe et est supérieure à 0
            if (isset ($_SESSION['row_count']) && $_SESSION['row_count'] > 0) {
                // Boucle à travers les données stockées dans la variable de session retour_experience_data
                foreach ($_SESSION['retour_experience_data'] as $row) {
                    // Vérifie si le type est "Association"
                    if ($row["type"] == "Association") {
                        echo '<article class="reExp">';
                        //$titre = $row['objetRetourExp'];
                        echo '<h3>' . $row['objetRetourExp'] . '</h3>';
                        echo '<div class="image-container">';
                        echo '</div>';
                        echo '<div class="article">';
                        echo '<img class="article-image" src="imgRetourExp/' . $row['image'] . '" alt="Image ' . $row['objetRetourExp'] . '">';
                        echo '<br>';
                        $contenu = $row['contenuRetourExp'];

                        echo '<p>' . $row['contenuRetourExp'] . '</p>';
                        echo '</div>'; // Fermer la div article
                       
                       
                        echo '</article>';
                    }
                }
            }
            ?>

            <article>
                <h2 id="collectiviteAgir">Collectivité</h2>
                <p class="justifiedParagraph">
                    Les collectivités ont un rôle crucial à jouer dans la transition vers un numérique plus responsable.
                    En adoptant des politiques et des pratiques
                    numériques durables, les municipalités peuvent réduire leur empreinte carbone et promouvoir une
                    utilisation plus efficace des ressources. Le Numérique
                    Responsable offre l'opportunité de développer des services numériques accessibles à tou.te.s, tout
                    en soutenant le bien-être de la communauté locale.
                    Nos ressources et outils sont là pour guider votre collectivité dans cette démarche, afin que chaque
                    clic compte pour un avenir durable.
                </p>
            </article>
            <?php

            // Si la variable de session row_count existe et est supérieure à 0
            if (isset ($_SESSION['row_count']) && $_SESSION['row_count'] > 0) {
                // Boucle à travers les données stockées dans la variable de session retour_experience_data
                foreach ($_SESSION['retour_experience_data'] as $row) {
                    // Vérifie si le type est "Association"
                    if ($row["type"] == "Collectivite") {
                        echo '<article class="reExp">';
                        //$titre = $row['objetRetourExp'];
                        echo '<h3>' . $row['objetRetourExp'] . '</h3>';
                        echo '<div class="article">';
                        $contenu = $row['contenuRetourExp'];
                        echo '<div class="image-container">';
                        echo '<img class="article-image" src="imgRetourExp/' . $row['image'] . '" alt="Image ' . $row['objetRetourExp'] . '">';
                        echo '<br>';
                        echo '</div>';
                        echo '<p>' . $row['contenuRetourExp'] . '</p>';

                       
                        echo '</div>'; // Fermer la div article
                        echo '</article>';
                    }
                }
            }
            ?>
            <article>
                <h2 id="entrepriseAgir">Entreprise</h2>
                <p class="justifiedParagraph">
                    Pour les entreprises, le Numérique Responsable n'est pas seulement une tendance, c'est une
                    nécessité. En adoptant des pratiques numériques durables,
                    vous pouvez réduire vos coûts opérationnels, améliorer votre image de marque et répondre aux
                    attentes croissantes des consommateur.rice.s en matière
                    de responsabilité environnementale. Les outils d'auto-évaluation NR spécifiques aux entreprises sur
                    notre plateforme vous aident à identifier les opportunités
                    d'amélioration. Engagez-vous dans la transition vers un numérique responsable, cela sera utile pour
                    le futur de votre entreprise aux vues des futures loi qui
                    toucheront tou.te.s les utilisateur.rice.s du numérique, cela réduira aussi les coûts de maintiens
                    dans le long terme ainsi que prôner une meilleure image à vos clients.
                </p>
            </article>
            <?php

            // Si la variable de session row_count existe et est supérieure à 0
            if (isset ($_SESSION['row_count']) && $_SESSION['row_count'] > 0) {
                // Boucle à travers les données stockées dans la variable de session retour_experience_data
                foreach ($_SESSION['retour_experience_data'] as $row) {
                    // Vérifie si le type est "Association"
                    if ($row["type"] == "TPE") {
                        echo '<article class="reExp">';
                        //$titre = $row['objetRetourExp'];
                        echo '<h3>' . $row['objetRetourExp'] . '</h3>';
                        echo '<div class="article">';
                        $contenu = $row['contenuRetourExp'];
                        echo '<div class="image-container">';
                        echo '<img class="article-image" src="imgRetourExp/' . $row['image'] . '" alt="Image ' . $row['objetRetourExp'] . '">';
                        echo '<br>';
                        echo '</div>';

                        echo '<p>' . $row['contenuRetourExp'] . '</p>';

                       
                        echo '</div>'; // Fermer la div article
                        echo '</article>';
                    }
                }
            }
            ?>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>