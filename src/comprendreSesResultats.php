<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleGlobal.css">
    <link rel="stylesheet" href="header.css">
    <title>Comment ses résultats</title>
</head>
<body>
<script src="menu-toggle.js"></script>  
    <main>
        <form>
            <div>
                <span>Outil numéro 1</span>
                <input type="text" name="outil1" id="outil1">
            </div>
            <div>
                <span>Outil numéro 2</span>
                <input type="text" name="outil2" id="outil2">
            </div>
            <div>
                <span>Outil numéro 3</span>
                <input type="text" name="outil3" id="outil3">
            </div>
            <button type="submit">Envoyer les résultats</button>
        </form>
    </main>
    <footer>
        <!--Footer RGPD-->
        <hr>
        <div id="footerlinks">
            <a href="rgpd.php" class="allLinks">RGPD</a>
        </div>
    </footer>
</body>