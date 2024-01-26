<?php
    // Récupérez le nom du fichier actuel.
    $current_page = basename($_SERVER['PHP_SELF']);
?>

<header>
    <div class="navbar">
        <div class="menu-button">
            <button class="menu-button" id="menu-toggle" aria-label="Menu">Menu</button>
        </div>
        <nav role="navigation">
            <ul>
                <li class="MenuItem">
                    <a href="definition.php" class="allLinks deroulant" aria-haspopup="true" <?php if ($current_page == 'definition.php') echo 'aria-current="page"'; ?>>
                        Introduction au numérique responsable
                        <span class="triangle">▼</span>
                    </a>
                    <ul class="sous">
                        <li><a href="definition.php" value="allLinks" <?php if ($current_page == 'definition.php') echo 'aria-current="page"'; ?>>C'est quoi le numérique responsable ?</a></li>
                        <li><a href="formulaire.php" value="3U" <?php if ($current_page == 'formulaire.php') echo 'aria-current="page"'; ?>>Est-ce que mon projet respecte les 3U</a></li>
                    </ul>
                </li>
                <li class="MenuItem">
                    <a href="commentEtPourquoiAgir.php" class="allLinks deroulant" aria-haspopup="true" <?php if ($current_page == 'commentEtPourquoiAgir.php') echo 'aria-current="page"'; ?>>
                        Comment et pourquoi agir à mon niveau ?
                        <span class="triangle">▼</span>
                    </a>
                    <ul class="sous">
                        <li><a href="commentEtPourquoiAgir.php#associationAgir" value="association" <?php if ($current_page == 'commentEtPourquoiAgir.php') echo 'aria-current="page"'; ?>>Association</a></li>
                        <li><a href="commentEtPourquoiAgir.php#collectiviteAgir" value="tpe" <?php if ($current_page == 'commentEtPourquoiAgir.php') echo 'aria-current="page"'; ?>>TPE</a></li>
                        <li><a href="commentEtPourquoiAgir.php#entrepriseAgir" value="collectivite" <?php if ($current_page == 'commentEtPourquoiAgir.php') echo 'aria-current="page"'; ?>>Collectivité</a></li>
                    </ul>
                </li>
                <li class="MenuItem"><a href="outilsPourSAutoevaluer.php" class="allLinks" <?php if ($current_page == 'outilsPourSAutoevaluer.php') echo 'aria-current="page"'; ?>>Outils pour s'autoévaluer</a></li>
                <li class="MenuItem"><a href="comprendreSesResultats.php" class="allLinks" <?php if ($current_page == 'comprendreSesResultats.php') echo 'aria-current="page"'; ?>>Comprendre ses résultats</a></li>
                <li class="MenuItem">
                    <a href="index.php" <?php if ($current_page == 'index.php') echo 'aria-current="page"'; ?>>
                        <img src="/img/logo.png" alt="Logo de GreenInit" width="50" height="50">
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
