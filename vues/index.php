<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Accueil</title>
	<script src="controles/script.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- Menu -->
	<?php include("includes/menu.php");?>

	<div class="content">
		<section class="encart">
			<div>
				
			</div>
		</section>

		<section class="lidee">
			<h2>L'idée ?</h2>
			<p>Créer une bd à plusieurs.<br>
			Une case chacun, chacun son tour.</p>

			<div class="guide">
				<a href="principe.php">Suivez le guide !</a> <!-- Bouton -->
			</div>
		</section>

		<section class="bd_terminees">
			<h2>Bande Dessinée terminée</h2>
			<p>Consultez les Bande Dessinée les mieux notées.</p>

				<?php include ("includes/miniatureBD.php"); ?>

			<a href="#" id="voir_terminees">Tout voir</a> <!--Bouton -->
		</section>

		<section class="bd_encours">
			<div class="legendes">
				<div class="case_reservee">
					<h3>Case réservée</h3>
					<p>Vous pouvez faire une demande de notification pour savoir quand la prochaine case sera disponible !</p>
				</div>
				<div class="case_disponible">
					<h3>Case disponible</h3>
					<p></p>
				</div>
			</div>
			
			<?php include ("includes/miniatureBD.php"); ?>

			<a href="#" id="voir_encours">Tout voir</a> <!--Bouton -->
		</section>
	</div>

	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>
</body>
</html>