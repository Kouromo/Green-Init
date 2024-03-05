<?php
    $current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//kouromo.alwaysdata.net/matomo/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->
</head>
<body>
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
                            <li><a href="commentEtPourquoiAgir.php#collectiviteAgir" value="tpe" <?php if ($current_page == 'commentEtPourquoiAgir.php') echo 'aria-current="page"'; ?>>TPE</a></li>
                            <li><a href="commentEtPourquoiAgir.php#entrepriseAgir" value="collectivite" <?php if ($current_page == 'commentEtPourquoiAgir.php') echo 'aria-current="page"'; ?>>Collectivité</a></li>
                        </ul>
                    </li>
                    <li class="MenuItem"><a href="outilsPourSAutoevaluer.php" class="allLinks" <?php if ($current_page == 'outilsPourSAutoevaluer.php') echo 'aria-current="page"'; ?>>Outils pour s'autoévaluer</a></li>
                    <li class="MenuItem"><a href="comprendreSesResultats.php" class="allLinks" <?php if ($current_page == 'comprendreSesResultats.php') echo 'aria-current="page"'; ?>>Comprendre ses résultats</a></li>
                    <li class="MenuItem">
                        <a href="index.php" <?php if ($current_page == 'index.php') echo 'aria-current="page"'; ?>>
                            <img class="logoSite" src="/img/logo.png" alt="Logo de GreenInit">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
