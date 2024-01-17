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
    <form>
        <h1>Questionnaire 3U</h1>
        <p>*Utile, utilisable, utilisé</p>
        <br>
        <section class="sectionU">
            <h2>Utile</h2>
            <h3>Est-ce que le projet est nécessaire ?</h3>
            <div class="question">
                <p>1. Votre site web est-il nécessaire au développement de votre activité ?</p>
                <input type="radio" name="question1" value="oui" id="oui1">
                <label for="oui1">Oui</label>
                <input type="radio" name="question1" value="non" id="non1">
                <label for="non1">Non</label>
            </div>
            <div class="question">
                <p>2. Votre site est-il uniquement dédié à la communication ou comptez-vous y ajouter des fonctionnalités ? (Exemple : commandes en ligne)</p>
                <input type="radio" name="question2" value="oui" id="oui2">
                <label for="oui2">Oui</label>
                <input type="radio" name="question2" value="non" id="non2">
                <label for="non2">Non</label>
            </div>
        </section>
        <br>
        <section class="sectionU">
            <div class="question">
                <h2>Utilisable</h2>
                <h3>Est-il accessible ?</h3>
                <p>1. Votre site web est-il facilement trouvable par les utilisateurs ? Par exemple via la communication de l’existence de votre site, ou son référencement dans les moteurs de recherches.</p>
                <input type="radio" name="question3" value="oui" id="oui3">
                <label for="oui3">Oui</label>
                <input type="radio" name="question3" value="non" id="non3">
                <label for="non3">Non</label>
            </div>
            <div class="question">
                <p>2. Avez-vous pensé à introduire des principes d’accessibilité dans votre site ? (Contrastes, daltonisme, responsivité, ...)</p>
                <input type="radio" name="question4" value="oui" id="oui4">
                <label for="oui4">Oui</label>
                <input type="radio" name="question4" value="non" id="non4">
                <label for="non4">Non</label>
            </div>
        </section>
        <br>
        <section class="sectionU">
            <h2>Utilisé</h2>
            <h3>C'est bien beau mais est-ce que les utilisateurs sont présents ?</h3>
            <div class="question">
                <p>Votre site web reçoit-il actuellement des visiteurs ou pensez-vous qu’il en recevra suffisamment ?</p>
                <input type="radio" name="question5" value="oui" id="oui5">
                <label for="oui5">Oui</label>
                <input type="radio" name="question5" value="non" id="non5">
                <label for="non5">Non</label>
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