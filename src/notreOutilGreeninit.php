<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="\img\logo.png" />
        <link rel="stylesheet" href="styleGlobal.css"/>
        <link rel="stylesheet" href="header.css"/>
        <link rel="stylesheet" href="footer.css"/>
        <link rel="stylesheet" href="notreOutilGreeninit.css"/>
        <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/animations/scale.css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        <title>Compendre ses résultats</title>
        <script src="matomo.js"></script>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <script src="menu-toggle.js"></script>  
        <main>
            <form id="form" action="pageResultats.php" method="POST">  
                <h1>Green init facilite la compréhension des résultats d’auto-évaluation</h1>
                <br>
                <p>
                    Commencez par sélectionner les outils qui vous intéressent (les liens s'ouvrent dans une nouvelle fenêtre). Une fois sur le site de l'outil, 
                    entrez l'url de votre service numérique et commencez un scan. Notez les résultats du scan dans les champs du formulaire appropriés. 
                    Cliquez sur "Envoyer les résultats" pour générer votre rapport d'autoévaluation.
                </p>
                    <h2><a href="https://www.ecoindex.fr/" target="_blank" class="bigLinks">Éco-index <i class="material-icons-outlined">open_in_new</i></a></h2>
                    <br>
                    <div>
                        <label for="score_ecoindex">Score</label>
                        <input type="number" class="ecoIndex" name="score_ecoindex" id="score_ecoindex" placeholder="Score Éco-index">
                    </div>
                    <div>
                        <label for="poids">Poids</label>
                        <input type="number" class="ecoIndex" name="poids" id="poids" placeholder="Poids" step="0.001">
                    </div>
                    <div>
                        <label for="complexite">Complexité</label>
                        <input type="number" class="ecoIndex" name="complexite" id="complexite" placeholder="Complexité">
                    </div>
                    <div>
                        <label for="requetes">Requêtes</label>
                        <input type="number" class="ecoIndex" name="requetes" id="requetes" placeholder="Requêtes">
                    </div>
                </section>
                <section>
                    <h2><a href="https://pagespeed.web.dev/" target="_blank" class="bigLinks">Page speed <i class="material-icons-outlined">open_in_new</i></a></h2>
                    <div>
                        <label for="performances">Performances</label>
                        <input type="number" class="pageSpeed" name="performances" id="performances" placeholder="Performances" requiered="false">
                    </div>
                    <div>
                        <label for="accessibilite">Accessibilite</label>
                        <input type="number" class="pageSpeed" name="accessibilite" id="accessibilite" placeholder="Accessibilite" requiered="false">
                    </div>
                    <div>
                        <label for="bonnes_pratique">Bonnes pratiques</label>
                        <input type="number" class="pageSpeed" name="bonnes_pratique" id="bonnes_pratique" placeholder="Bonnes pratiques" requiered="false">
                    </div>
                    <div>
                        <label for="SEO">SEO</label>
                        <input type="number" class="pageSpeed" name="SEO" id="SEO" placeholder="SEO" requiered="false">
                    </div>
                </section>
                <button type="submit" class="bouton-vert">Envoyer les résultats</button>
            </form>
        </main>
        <?php include 'footer.php'; ?>
        <script src="required.js"></script>
        <script>
            // Tooltip
            tippy('#score_ecoindex', {
                content: 'Score global sur 100'
            });
            tippy('#poids', {
                content: 'Poids de la page web en Mo'
            });
            tippy('#complexite', {
                content: 'Simplicité de la page web en nombre d\'éléments'
            });
            tippy('#requetes', {
                content: 'Nombre de requêtes sur la page web'
            });
            tippy('#score_pagespeed', {
                content: 'Score global'
            });

            tippy('#performances', {
                content: 'Performances de la page web sur 100 en version Desktop'
            });
            tippy('#accessibilite', {
                content: 'Accessibilité de la page web sur 100 en version Desktop'
            });
            tippy('#bonnes_pratique', {
                content: 'Bonnes pratiques de la page web sur 100 en version Desktop'
            });
            tippy('#SEO', {
                content: 'SEO de la page web sur 100 en version Desktop'
            });
        </script>
    </body>
</html>