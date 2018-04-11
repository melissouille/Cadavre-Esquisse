<?php
	// Connexion à la base de données :
	include ("../modeles/connexion_bdd.php");
	// Configuration langues :
	include ("../controles/lang_config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo _PAGE_BD ;?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!-- Menu -->
	<div id="menu">
		<?php include("includes/menu.php");?>
	</div>
	<div class="content">
		<div>
			<h2 class="titres"><i>Titre BD</i></h2>
		</div>

		<div class="case_vide" id="forme">
			<p><?php echo _CONSIGNE_FORME ;?></p>
		</div>
		<!-- HOVER -->
		<div class="over_case">
			<img src="">
			<!-- SI TERMINEE = -->
			<p id="realisee_par"><?php echo _CASE_REALISE_PAR ;?></p>
			<!-- SI RESERVEE = -->
			<p id="reservee_par"><?php echo _CASE_RESERVEE_PAR ;?></p>
			<!-- SI DISPONIBLE -->
			<p id="case_disponible"><?php echo _RESERVER_CASE ;?></p>
		</div>
		<div class="temps">
			<!-- Décompte temps restant pour réalisation -->
		</div>
		<div>
			<!-- Bouton en bas de page(Si case déjà réservé) -->
			<button><?php echo _PARTICIPER_NOTIF ;?></button>
			<p></p>
		</div>
	</div>
	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>
</body>
<html>

<!-- NOTES -->
<?php
		/* dialogue base de données
		// for ou foreach {
		if (case[0].etat == "vide") { //?? Synthaxe ??
			// affiche div.case_vide
			// applique l'algorithme :
			include ("../controles/planches_page_vierge.php");
		};
		/* RESERVATION
		elseif (case[c].etat == "reservee") {
			include ("modals/reservation.php");
		}
		elseif (case[c].etat == "complete") {
			// affiche div.case_termine pour toutes les cases terminées
			include ("../controles/choix_planches.php");
		}
			
		}
		// fin boucle } */?>