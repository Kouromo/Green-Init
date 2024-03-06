<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styleGlobal.css">
		<link rel="icon" href="\img\logo.png" />
		<link rel="stylesheet" href="styleAutoevaluation.css">
		<link rel="stylesheet" href="header.css">
		<link rel="stylesheet" href="footer.css">
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
						Services en lignes Permettant de connaitre la vitesse de chargement des pages, grâce à un système de note allant de A à G et de pourcentage d'efficacité permettant 
						de savoir si le site est performant ainsi que de donner quelques pistes d'amélioration pour améliorer les performances qui sont fortement liée aux critère NR.
					</p>
					<a href="https://gtmetrix.com/" class="bigLinks" aria-label="lien vers le site GTmetrix">GTmetrix</a>
				</article>
				<hr>
				<article>
					<h2>Wave</h2>
					<p>
						Lorem ipsum dolor sit amet consectetur 
						adipisicing elit. Sapiente illum praesentium 
						natus quae placeat doloribus facilis possimus ab 
						dolor, cumque numquam unde repudiandae! Enim tempore 
						ipsa fugit aliquam possimus voluptatibus.
					</p>
					
				</article>
				<hr>
				<div class="bouton-result">
					<a href="comprendreSesResultats.php"><input class="bouton-vert" type="button" value="Tester son site"/></a>
				</div>
			</form>
		</main>
		<?php include 'footer.php'; ?>
	</body>
</html>
