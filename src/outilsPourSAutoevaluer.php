<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styleGlobal.css">
		<link rel="icon" href="..\lib\img\logo.png" />
		<link rel="stylesheet" href="styleAutoevaluation.css">
		<link rel="stylesheet" href="header.css">
		<title>Pages d'outils pour s'auto-diagnostiquer</title>
		<script src="matomo.js"></script>
	</head>
	<body>
		<?php include 'header.php'; ?>
		<script src="menu-toggle.js"></script>
		<main>
			<h1>Outils pour s'auto-évaluer</h1>
			<form>
				<article>
					<h2>Éco-index</h2>
					<p>
						Service en ligne proposé par GreenIT.fr, il fournit une note allant de A à G et une note sur 100, ainsi que quelques conseils pour améliorer son site web. 
						Quelques mesures sur l'empreinte environnementale sont données pour pouvoir donner à l'utilisateur.rice une idée de la consommation des ressources de sa page. 
						Le projet est en open source et est amélioré par ses contributeurs. 
					</p>
					<a href="https://www.ecoindex.fr/" class="bigLinks">Éco-index</a>
				</article>
				<hr>
				<article>
					<h2>GTmetrix</h2>
					<p>
						Services en lignes Permettant de connaitre la vitesse de chargement des pages, grâce à un système de note allant de A à G et de pourcentage d'efficacité permettant 
						de savoir si le site est performant ainsi que de donner quelques pistes d'amélioration pour améliorer les performances qui sont fortement liée aux critère NR 
					</p>
					<a href="https://gtmetrix.com/" class="bigLinks">GTmetrix</a>
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
				<a href="comprendreSesResultats.php"><input type="button" value="tester son site"/></a>
			</form>
		</main>
		<?php include 'footer.php'; ?>
	</body>
</html>