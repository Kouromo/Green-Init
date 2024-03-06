<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styleGlobal.css">
		<link rel="icon" href=".\lib\img\logo.png" />
		<link rel="stylesheet" href="formulaire.css">
		<link rel="stylesheet" href="header.css">
		<title>Formulaire 3U</title>
		<script src="matomo.js"></script>
	</head>
	<body>
		<?php include 'header.php'; ?>
		<script src="menu-toggle.js"></script>
		<script>
			document.addEventListener('DOMContentLoaded', function () {
				var allDetails = document.querySelectorAll('.question details');
				allDetails.forEach(function (detail) {
					detail.addEventListener('toggle', function (event) {
						if (event.target.open) {
							// Fermer tous les autres détailsallDetails.forEach(function (otherDetail) {
								if (otherDetail !== event.target) {
									otherDetail.open = false;
								}
							});
						}
					});
				});
			});
		</script>
		<form>
			<h1>Questionnaire 3U</h1>
			<p>
				*Utile, Utilisable, Utilisé
			</p>
			<br>
			<section class="sectionU">
				<h2>Utile</h2>
				<h3>Est-ce que le projet est nécessaire ?</h3>
				<div class="question">
					<p>
						1. Votre site web est-il nécessaire au développement de votre activité ?
					</p>
					<details>
						<summary>
							<span class="answers">Oui</span>
						</summary>
						<p>
							Créer un site web est un bon moyen de communication avec votre audience ou pour mettre à disposition des fonctionnalités pour les utilisateur.rice.s. L’un n’exclut pas l’autre, mais il faut porter attention à l’éco responsabilité de votre site. 
						</p>
					</details>
					<details>
						<summary>
							<span class="answers">Non</span>
						</summary>
						<p>
							Il faudrait dans ce cas probablement revoir les objectifs de votre projet de création de site web. Vous pouvez tout de même poursuivre ce questionnaire pour avoir des attendus clairs concernant les 3U. 
						</p>
					</details>
				</div>
				<div class="question">
					<p>
						2. Votre site est-il uniquement dédié à la communication ou comptez-vous y ajouter des fonctionnalités ? (Exemple : commandes en ligne)
					</p>
					<details>
						<summary>
							<span class="answers">Oui</span>
						</summary>
						<p>
							Un site vitrine sera globalement plus léger qu’un site disposant de fonctionnalités complexes (ex : e-commerce)
						</p>
					</details>
					<details>
						<summary>
							<span class="answers">Non</span>
						</summary>
						<p>
							Si vous souhaitez ajouter des fonctionnalités à votre site, il faut désormais se poser la question de la valeur ajoutée de ces fonctionnalités. Sont-elles réellement utiles ? Si oui, votre projet de création de site web semble en effet avoir un réel intérêt pour votre activité. 
						</p>
					</details>
				</div>
			</section>
			<br>
			<section class="sectionU">
				<div class="question">
					<h2>Utilisable</h2>
					<h3>Est-il accessible ?</h3>
					<p>
						1. Votre site web est-il facilement trouvable par les utilisateurs ? Par exemple via la communication de l’existence de votre site, ou son référencement dans les moteurs de recherches.
					</p>
					<details>
						<summary>
							<span class="answers">Oui</span>
						</summary>
						<p>
							Très bien !! votre site est retrouvable par les utilisateur.rice.s cela réduit les chances d’avoir un site fantôme et donc inutile. Il faut maintenant savoir si vous avez bels et bien des utilisateur.rice.s. 
						</p>
					</details>
					<details>
						<summary>
							<span class="answers">Non</span>
						</summary>
						<p>
							C’est dommage si votre site n’est pas référencé ou si vous n’avez pas fait connaitre son existence à votre réseau il est compliqué de justifier son existence, si vous ne comptez pas communiquer sur son existence dans le futur peut-être serait-il préférable de changer de support de communication. 
						</p>
					</details>
				</div>
				<div class="question">
					<p>
						2. Avez-vous pensé à introduire des principes d’accessibilité dans votre site ? (Contrastes, daltonisme, responsivité, ...)
					</p>
					<details>
						<summary>
							<span class="answers">Oui</span>
						</summary>
						<p>
							Votre site vous permettra d’inclure un plus grand nombre d'utilisateur.rice.s, y compris ceux ayant des besoins spécifiques tels que des troubles visuels. Il garantira une expérience utilisateur optimale en prenant en compte des principes d'accessibilité tels que des contrastes adaptés, la prise en charge du daltonisme, et une conception responsive pour une utilisation sur différents appareils. 
						</p>
					</details>
					<details>
						<summary>
							<span class="answers">Non</span>
						</summary>
						<p>
							Un site accessible permettrait d’obtenir une plus large audience et de diversifier le public. Il y a pleins de guides pour devenir et renforcer son accessibilité. Des outils permettent également de mesurer son accessibilité comme WAVE. 
							<br/>
							Un site accessible permet de :  
							<br/>
							- Naviguer avec une synthèse vocale et/ou plage braille 
							<br/>
							- Personnaliser l’affichage du site selon ses besoins 
							<br/>
							- Naviguer sans utiliser la souris
						</p>
					</details>
				</div>
			</section>
			<br>
			<section class="sectionU">
				<h2>Utilisé</h2>
				<h3>Un site a besoin d'utilisateurs et seront-ils présent sur le vôtre ?</h3>
				<div class="question">
					<p>
						1. Votre site web reçoit-il actuellement des visiteurs ou pensez-vous qu’il en recevra suffisamment ?
					</p>
					<details>
						<summary>
							<span class="answers">Oui</span>
						</summary>
						<p>
							Bravo si vous avez mis des réponse positive aux question positive alors votre projet fait sens et est dans la bonne voie, cependant il faut faire attention avoir un site qui respecte les 3U n’est que la première étape il faut maintenant inscrire votre projet dans le temps et dans un futur plus responsable. Continuez comme ça !! 
						</p>
					</details>
					<details>
						<summary>
							<span class="answers">Non</span>
						</summary>
						<p>
							Cela est inquiétant, si votre site n’atteint pas vos attentes cela est peut-être lié à un manque d’utilité selon les utilisateur.rice.n   s ou un manque de communication dessus 
						</p>
					</details>
				</div>
			</section>
		</form>
		<?php include 'footer.php'; ?>
	</body>
</html>