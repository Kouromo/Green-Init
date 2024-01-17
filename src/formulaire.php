<?php include 'header.php'; ?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleGlobal.css">
    <link rel="icon" href=".\lib\img\logo.png" />
    <link rel="stylesheet" href="formulaire.css">
    <link rel="stylesheet" href="header.css">
    <title>Formulaire 3U</title>
</head>
<body>
    <script src="menu-toggle.js"></script>  
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var allDetails = document.querySelectorAll('.question details');

            allDetails.forEach(function (detail) {
                detail.addEventListener('toggle', function (event) {
                    if (event.target.open) {
                        // Fermer tous les autres détails
                        allDetails.forEach(function (otherDetail) {
                            if (otherDetail !== event.target) {
                                otherDetail.open = false;
                            }
                        });
                    }
                });
            });
        });
    </script>  
    <form>
        <h1>Questionnaire 3U</h1>
        <p>*Utile, utilisable, utilisé</p>
        <br>
        <section class="sectionU">
            <h2>Utile</h2>
            <h3>Est-ce que le projet est nécessaire ?</h3>
            <div class="question">
                <p>1. Votre site web est-il nécessaire au développement de votre activité ?</p>
                <details>
                <summary>Oui</summary>
                <p>Texte associé à la question 1 oui...</p>
            </details>
            <details>
                <summary>Non</summary>
                <p>Texte associé à la question 1 non...</p>
            </details>
            </div>
            <div class="question">
                <p>2. Votre site est-il uniquement dédié à la communication ou comptez-vous y ajouter des fonctionnalités ? (Exemple : commandes en ligne)</p>
                <details>
                <summary>Oui</summary>
                <p>Texte associé à la question 2 oui...</p>
            </details>
            <details>
                <summary>Non</summary>
                <p>Texte associé à la question 3 non...</p>
            </details>
            </div>
        </section>
        <br>
        <section class="sectionU">
            <div class="question">
                <h2>Utilisable</h2>
                <h3>Est-il accessible ?</h3>
                <p>1. Votre site web est-il facilement trouvable par les utilisateurs ? Par exemple via la communication de l’existence de votre site, ou son référencement dans les moteurs de recherches.</p>
                <details>
                <summary>Oui</summary>
                <p>Texte associé à la question 4 oui...</p>
            </details>
            <details>
                <summary>Non</summary>
                <p>Texte associé à la question 4 non...</p>
            </details>
            </div>
            <div class="question">
                <p>2. Avez-vous pensé à introduire des principes d’accessibilité dans votre site ? (Contrastes, daltonisme, responsivité, ...)</p>
                <details>
                <summary>Oui</summary>
                <p>Texte associé à la question 5 oui...</p>
            </details>
            <details>
                <summary>Non</summary>
                <p>Texte associé à la question 5 non...</p>
            </details>
            </div>
        </section>
        <br>
        <section class="sectionU">
            <h2>Utilisé</h2>
            <h3>C'est bien beau mais est-ce que les utilisateurs sont présents ?</h3>
            <div class="question">
                <p>Votre site web reçoit-il actuellement des visiteurs ou pensez-vous qu’il en recevra suffisamment ?</p>
                <details>
                <summary>Oui</summary>
                <p>Texte associé à la question 6 oui...</p>
            </details>
            <details>
                <summary>Non</summary>
                <p>Texte associé à la question 6 non...</p>
            </details>
            </div>
        </section>
    </form>
   

    <footer>
        <!--Footer RGPD-->
        <hr>
        <div id="footerlinks">
            <a href="rgpd.php" class="allLinks">RGPD</a>
        </div>
    </footer>
</body>