<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edition d'une BD</title>
	<script src="controles/script.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- Menu -->
	<?php include("includes/menu.php");?>

	<div class="header">
		<a href="parametre_bd.php">Paramètre BD</a>
		<a href="#.pdf" title="PDF">Télécharger le PDF</a>
	</div>
	<div id="titre">
		<h2>Titre BD</h2>
	</div>

	<?php
		// dialogue base de données
		// for ou foreach {
		if (case[0].etat == "vide") { //?? Synthaxe ??
			// affiche div.case_vide
			// applique l'algorithme :
			include ("../controles/planches_page_vierge.php");
		};
		/* RESERVATION */
		elseif (case[c].etat == "reservee") {
			include ("modals/reservation.php");
		}
		elseif (case[c].etat == "complete") {
			// affiche div.case_termine pour toutes les cases terminées
			include ("../controles/choix_planches.php");
		}
			
		}
		// fin boucle }
	?>
	<div class="case_vide">
		<!-- image ;  flèche en bouton select ; case en bouton option de select -->
	</div>
	
	<div class="case_termine">
		<img src="">
		<!-- HOVER -->
			<p>Case réalisé par <span class="pseudo"></span></p>
			<button type="button" name="avis" value="like">Like</button>
			<button type="button" name="avis" value="dislike">Dislike</button>
	</div>
	
	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>
</body>
<html>