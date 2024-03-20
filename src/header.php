<?php
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
                    <a class="deroulant">
                        Introduction au numérique responsable
                        <span class="triangle">▼</span>
                    </a>
                    <ul class="sous">
                        <li><a href="definition.php" value="allLinks" <?php if ($current_page == 'definition.php') echo 'aria-current="page"'; ?>>C'est quoi le numérique responsable ?</a></li>
                        <li><a href="formulaire.php" value="3U" <?php if ($current_page == 'formulaire.php') echo 'aria-current="page"'; ?>>Est-ce que mon projet respecte les 3U</a></li>
                    </ul>
                </li>
                <li class="MenuItem">
                    <a class="deroulant">
                        Comment et pourquoi agir à mon niveau ?
                        <span class="triangle">▼</span>
                    </a>
                    <ul class="sous">
                        <li><a href="commentEtPourquoiAgir.php#associationAgir" value="association" <?php if ($current_page == 'commentEtPourquoiAgir.php') echo 'aria-current="page"'; ?>>Association</a></li>
                        <li><a href="commentEtPourquoiAgir.php#entrepriseAgir" value="collectivite" <?php if ($current_page == 'commentEtPourquoiAgir.php') echo 'aria-current="page"'; ?>>Collectivité</a></li>
                        <li><a href="commentEtPourquoiAgir.php#collectiviteAgir" value="tpe" <?php if ($current_page == 'commentEtPourquoiAgir.php') echo 'aria-current="page"'; ?>>TPE</a></li>
                    </ul>
                </li>
                <li class="MenuItem"><a href="selectionDOutils.php" class="allLinks" <?php if ($current_page == 'selectionDOutils.php') echo 'aria-current="page"'; ?>>Sélection d'outils pour s'autoévaluer</a></li>
                <li class="MenuItem"><a href="notreOutilGreeninit.php" class="allLinks" <?php if ($current_page == 'notreOutilGreeninit.php') echo 'aria-current="page"'; ?>>Notre outil Green init</a></li>
                <li class="MenuItem">
                    <a href="index.php" <?php if ($current_page == 'index.php') echo 'aria-current="page"'; ?>>
                        <img class="logoSite" src="/img/logo.png" alt="Logo de GreenInit">
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
