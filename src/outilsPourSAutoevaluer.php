<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styleGlobal.css">
		<link rel="icon" href="\img\logo.png" />
		<link rel="stylesheet" href="styleAutoevaluation.css">
		<link rel="stylesheet" href="header.css">
		<title>Pages d'outils pour s'auto-diagnostiquer</title>
		<script src="matomo.js"></script>
	</head>
	<body>
		<?php include 'header.php'; ?>
		<script src="menu-toggle.js"></script>
		<main>
			<h1>Outils pour s'autoévaluer</h1>
			<form>
				<article>
					<h2>Éco-index</h2>
					<p>
						Service en ligne proposé par <a href="https://greenit.fr" class="allLinks" aria-label="lien vers le site de Green IT">GreenIT.fr</a>, il fournit une note allant de A à G et une note sur 100, ainsi que quelques conseils pour améliorer son site web. 
						Quelques mesures sur l'empreinte environnementale sont données pour pouvoir donner à l'utilisateur.rice une idée de la consommation des ressources de sa page. 
						Le projet est en open source et est amélioré par ses contributeurs. 
					</p>
					<a href="https://www.ecoindex.fr/" class="bigLinks" aria-label="lien vers le site éco-index">Éco-index</a>
				</article>
				<hr>
				<article>
					<h2>GTmetrix</h2>
					<p>
						Service en ligne permettant de connaitre la vitesse de chargement des pages, grâce à un système de note allant de A à G et de pourcentage d'efficacité permettant 
						de savoir si le site est performant ainsi que de donner quelques pistes d'amélioration pour améliorer les performances qui sont fortement liée aux critère NR.
					</p>
					<a href="https://gtmetrix.com/" class="bigLinks" aria-label="lien vers le site GTmetrix">GTmetrix</a>
				</article>
				<hr>
				<article>
					<h2>Wave</h2>
					<p>
						WAVE® est une suite d'outils d'évaluation qui aide les site Web plus accessible aux personnes handicapées. WAVE peut identifier de nombreuses erreurs d'accessibilité 
						et des lignes directrices pour l'accessibilité du contenu, mais facilite également l'évaluation humaine du contenu Web.
					</p>
					<a href="https://wave.webaim.org/" class="bigLinks" aria-label="lien vers le site Wave">Wave</a>
				</article>
				<hr>
				<article>
					<h2>EcoDiag</h2>
					<p>
						Ici, nous nous éloignons de votre site web pour mesurer le bilan carbonne de votre structure. Ecodiag permet, à partir d'un inventaire des équipements informatiques 
						sur un périmètre donné, de calculer le bilan carbone d'une année. 
					</p>
					<a href="https://ecoinfo.cnrs.fr/ecodiag-calcul/" class="bigLinks" aria-label="lien vers l'outil Ecodiag sur le site EcoInfo">Ecodiag</a>
				</article>
				<hr>
				<a href="comprendreSesResultats.php"><input type="button" value="Tester son site"/></a>
			</form>
		</main>
		<?php include 'footer.php'; ?>
	</body>
</html>
