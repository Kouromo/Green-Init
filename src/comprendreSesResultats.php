<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="\img\logo.png" />
        <link rel="stylesheet" href="styleGlobal.css">
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="comprendreSesResultats.css">
        <title>Compendre ses résultats</title>
        <script src="matomo.js"></script>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <script src="menu-toggle.js"></script>  
        <main>
            <form action="pageResultats.php" method="POST">
                <h1>Comprendre ses résultats</h1>
                <br>
                <section class="sectionOutil">
                    <h2><a href="https://www.ecoindex.fr/" target="_blank" class="bigLinks">Éco-index</a></h2>
                    <br>
                    <div>
                        <label>Score</label>
                        <input type="number" name="score_ecoindex" id="score_ecoindex" placeholder="Score Éco-index">
                    </div>
                    <div>
                        <label>Poids</label>
                        <input type="number" name="poids" id="poids" placeholder="Poids">
                    </div>
                    <div>
                        <label>Complexité</label>
                        <input type="number" name="complexite" id="complexite" placeholder="Complexité">
                    </div>
                    <div>
                        <label>Requêtes</label>
                        <input type="number" name="requetes" id="requetes" placeholder="Requêtes">
                    </div>
                </section>
                <section class="sectionOutil">
                    <h2><a href="https://gtmetrix.com/" target="_blank" class="bigLinks">GT metrix</a></h2>
                    <div>
                        <label>Score</label>
                        <input type="number" name="outil2" id="outil2" placeholder="Score GTMETRIX">
                    <div>
                </section>
                <button type="submit" class="bouton-vert">Envoyer les résultats</button>
            </form>
        </main>
        <?php include 'footer.php'; ?>
    </body>
</html>