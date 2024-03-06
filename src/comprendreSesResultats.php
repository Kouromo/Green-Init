<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styleGlobal.css">
        <link rel="stylesheet" href="header.css">
        <title>Comment ses résultats</title>
        <script src="matomo.js"></script>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <script src="menu-toggle.js"></script>  
        <main>
            <form action="pageResultats.php" method="POST">
                <div>
                <a href="https://www.ecoindex.fr/" class="bigLinks">Éco-index</a>
                    <span>Eco-index</span>
                    <input type="text" name="score_ecoindex" id="score_ecoindex" placeholder="Score Éco-index">
            </div>
            <div>
                <span>Poids</span>
                <input type="text" name="poids" id="poids" placeholder="Poids">
            </div>
            <div>
                <span>Complexité</span>
                <input type="text" name="complexite" id="complexite" placeholder="Complexité">
            </div>
            <div>
                <span>Requêtes</span>
                <input type="text" name="requetes" id="requetes" placeholder="Requêtes">
            </div>
            <button type="submit">Envoyer les résultats</button>
        </form>
            </div>



                <div>
                    <span>GT metrix</span>
                    <input type="text" name="outil2" id="outil2">
                </div>
                <div>
                    <span>Wave</span>
                    <input type="text" name="outil3" id="outil3">
                </div>
                <button type="submit">Envoyer les résultats</button>
            </form>
        </main>
        <?php include 'footer.php'; ?>
    </body>
</html>