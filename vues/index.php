<?php
	// Connexion à la base de données :
	include ("../modeles/connexion_bdd.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Accueil</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!-- Menu -->
	<div id="menu">
		<?php include("includes/menu.php");?>
	</div>

	<div class="content">
		<section>
			<div class="encart"> 
				
			</div>
		</section>

		<section>
			<div class="lidee">
				<h2 class="titres">L'idée ?</h2>
				<p>Créer une bd à plusieurs.<br>
				Une case chacun, chacun son tour.</p>


				<div class="guide">
					<button class="boutons"><a href="principe.php">Suivez le guide !</a> </button>
				</div>
			</div>
		</section>

		<section class="bd_terminees">
			<h2 class="bandeau titres" id="titre_bd_terminees">Bande Dessinée terminée</h2>
			<p>Consultez les Bande Dessinée les mieux notées.</p>

				<?php include ("includes/miniatureBD.php"); ?>

			<button class="boutons">
				<a href="#" id="voir_terminees">Tout voir</a>
			</button>
		</section>

		<section class="bd_encours">
			<h2 class="bandeau titres" id="titre_bd_encours">Bande Dessinée en cours...</h2>
			<div class="legendes">
				<div class="bloc_case">
					<div id="case_reservee" class="etats_case">
						<h3>Case réservée</h3>
						<p>Vous pouvez faire une demande de notification pour savoir quand la prochaine case sera disponible !</p>
					</div>
				</div>
				<div class="bloc_case">
					<div id="case_disponible" class="etats_case">
						<h3>Case disponible</h3>
						<p></p>
					</div>
				</div>
			</div>

			<?php include ("includes/miniatureBD.php"); ?>

			<button class="boutons">
				<a href="#" id="voir_encours">Tout voir</a>
			</button>
		</section>
	</div>

	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>

</body>
</html>