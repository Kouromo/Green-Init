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
                    <h2>Eco-index</h2>
                    <a href="https://www.ecoindex.fr/" class="bigLinks">Éco-index</a>
                    <input type="text" name="score_ecoindex" id="score_ecoindex" placeholder="Score Éco-index">
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
                </section>
                <section class="sectionOutil">
                    <h2>GT metrix</h2>
                    <input type="text" name="outil2" id="outil2">
                </section>

                <button type="submit">Envoyer les résultats</button>
            </form>
        </main>
        <?php include 'footer.php'; ?>
    </body>
</html>