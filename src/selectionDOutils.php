<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styleGlobal.css">
		<link rel="icon" href="\img\logo.png" />
		<link rel="stylesheet" href="header.css">
		<link rel="stylesheet" href="footer.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
		<title>Pages d'outils pour s'auto-diagnostiquer</title>
		<script src="matomo.js"></script>
	</head>
	<body>
		<?php include 'header.php'; ?>
		<script src="menu-toggle.js"></script>
		<main>
			<h1>Notre sélection d’outils pour l’auto-évaluation</h1>
			<p>
			Notre sélection d'outils pour une première approche de l’auto-évaluation a fait le choix d’outils
		    qui ne nécessitent pas d’installation d’application dans votre service numérique ou ordinateur ou serveur de données.
			</p>
			<form>
				<article>
					<h2>Éco-index</h2>
					<p>
						Service en ligne initié par <a href="https://greenit.fr" target="_blank" class="allLinks" aria-label="lien vers le site de Green IT">GreenIT.fr</a>, il fournit une note allant de A à G et une note sur 100, ainsi que quelques conseils pour améliorer son site web. 
						Quelques mesures sur l'empreinte environnementale sont données pour pouvoir donner à l'utilisateur.rice une idée de la consommation des ressources de sa page. 
						Le projet est en open source et est amélioré par ses contributeurs.
						Notre conseil : choisir les 5 pages les plus fréquentées de votre site web et tester chacune des pages 
					</p>
					<a href="https://www.ecoindex.fr/" target="_blank" class="bigLinks" aria-label="lien vers le site éco-index">Éco-index <i class="material-icons-outlined">open_in_new</i></a>
				</article>
				<hr>
				<article>
					<h2>PageSpeed Insights</h2>
					<p>
						Outil de test des performances des pages web au format bureau et mobile. 
						Il se base sur l’outil Lighthouse, un projet Open Source. Il fournit une note allant 
						de 0 à 100 sur 4 points : performance, accessibilité, bonnes pratiques, SEO 
					</p>
					<a href="https://pagespeed.web.dev/" target="_blank" class="bigLinks" aria-label="lien vers le site PageSpeed">PageSpeed Insights <i class="material-icons-outlined">open_in_new</i></a>
				</article>
				<hr>
				<div class="bouton-result">
					<a href="notreOutilGreeninit.php"><input class="bouton-vert" type="button" value="Tester son site"/></a>
				</div>
				<hr>
				<br>
				<span class="bigTextSpecial">Pour aller plus loin 🚀</span>
				<article>
					<h2>GTmetrix</h2>
					<p>
						Service en ligne permettant de connaitre la vitesse de chargement des pages, grâce à un système de note allant de A à G et de pourcentage d'efficacité permettant 
						de savoir si le site est performant ainsi que de donner quelques pistes d'amélioration pour améliorer les performances qui sont fortement liée aux critère NR.
					</p>
					<a href="https://gtmetrix.com/" target="_blank" class="bigLinks" aria-label="lien vers le site GTmetrix">GTmetrix <i class="material-icons-outlined">open_in_new</i></a>
				</article>
				<article>
					<h2>Wave</h2>
					<p>
						WAVE® est une suite d'outils d'évaluation de l’accessibilité web. WAVE peut identifier de nombreuses erreurs d'accessibilité 
						et des lignes directrices pour l'accessibilité du contenu, mais facilite également l'évaluation humaine du contenu Web.
						Notre conseil : 
					</p>
					<a href="https://wave.webaim.org/" target="_blank" class="bigLinks" aria-label="lien vers le site Wave">Wave <i class="material-icons-outlined">open_in_new</i></a>
				</article>
				<hr>
				<article>
					<h2>Green Web Foundation</h2>
					<p>
						 Outil en anglais, qui indique si l'hébergement du site est Green. Si c'est le cas, il fourni un petit sticker au format image montrant que votre site
						 est hébergé Green, à intégrer à votre site.
						 Notre conseil :
					</p>
					<a href="https://www.thegreenwebfoundation.org/" target="_blank" class="bigLinks" aria-label="lien vers la page de scan de Green Web Foundation">Green Web Foundation <i class="material-icons-outlined">open_in_new</i></a>
				</article>
				<hr>
				<article>
					<h2> > Pour le système d’information votre organisation </h2>
					<br>
					<h2>EcoDiag</h2>
					<p>
						Ici, nous nous éloignons de votre site web pour mesurer le bilan carbonne de votre structure. Ecodiag permet, à partir d'un inventaire des équipements informatiques 
						sur un périmètre donné, de calculer le bilan carbone d'une année. 
						Notre conseil : 
					</p>
					<a href="https://ecoinfo.cnrs.fr/ecodiag-calcul/" target="_blank" class="bigLinks" aria-label="lien vers l'outil Ecodiag sur le site EcoInfo">Ecodiag <i class="material-icons-outlined">open_in_new</i></a>
				</article>
			</form>
		</main>
		<?php include 'footer.php'; ?>
	</body>
</html>
