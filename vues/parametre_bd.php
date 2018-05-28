<?php
	include '../controles/bddconnect.php';
	include ("../controles/lang_config.php");
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo _PARAM_BD ;?></title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<?php include 'includes/head.html' ;?>
</head>
<body>
	<div id="main">
	<!-- Menu -->
	<div id="menu">
		<?php include("includes/menu.php");?>
	</div>

	<div id="container">
		<h2><?php echo _T_PARAM_BD ;?></h2>
		<div class="titre">
			<h3><?php echo _TITRE;?> :</h3>
			<input type="text" name="titre" value="titre" class="titre_bd"/>
		</div>
		<div class="participants">
			<h3><?php echo _CONFIG_PARTICIPANTS ;?> :</h3>
			<input type="text" name="participants" class="participants"/>
			<!-- Dialogue BDD + fonction affichage // ?? type de sélection ??-->
		</div>
		<div class="details" style="display: none">
			<ul>
				<li>Créé le <span class="date_creation"></span></li>
				<li><span class="nb_participant"></span><?php echo  _NB_PARTICIPANTS ;?></li>
			</ul>
		</div>
				
		<div class="etat">
			<h3><?php echo _CHOIX_ETAT ;?> :</h3>
			<?php include ("includes/choix_etat.php"); ?>
		</div>

		<button type="button" name="valider" value="valider">
			<?php echo _VALIDER ;?>
		</button>
		<!-- modifier BDD quand bouton cliqué -->
	</div>

	<!-- Pied de page -->
	<div id="footer">
		<?php include ("includes/footer.php");?>
	</div>
	</div>
</body>
<html>