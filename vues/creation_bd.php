<?php
	include '../controles/bddconnect.php';
	include '../controles/lang_config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Création d'une BD</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<?php include 'includes/head.html' ;?>
</head>
<body>
	<!-- Menu -->
	<div id="menu">
		<?php include("includes/menu.php");?>
	</div>

	<div class="container" id="creation_bd">

		<?php 
		if (isset($_SESSION['id'])) { ?>
			
		<fieldset>
			<legend><?php echo _T_CREATION ;?></legend>
			
			<form id="createForm" method="POST" action="../controles/creationBD_config.php">

				<div class="choixtitre">
					<label for="titre"><?php echo _LABEL_TITRE ;?></label>
					<input type="text" name="titre" id="titre" />
					<span class="consignes"><?php echo _SPAN_TITRE ;?></span>
				</div>

				<div id="choixdroit">
					<?php include ("includes/choix_droit.php"); ?>
				</div>

				<div class="choixtemps">
					<label for="temps"><?php echo _LABEL_TEMPS ;?></label>
					<span class="consignes">
						<?php echo _SPAN_TEMPS ;?>
					</span>
					<select name="temps">
						<option value="" selected></option>
						<option value="1h">1<?php echo _1HEURE ;?></option>					
						<option value="3h">3<?php echo _HEURES ;?></option>
						<option value="6h">6<?php echo _HEURES ;?></option>
						<option value="12h">12<?php echo _HEURES ;?></option>
						<option value="1j">1<?php echo _1JOUR ;?></option>
						<option value="2j">2<?php echo _JOURS ;?></option>
						<option value="3j">3<?php echo _JOURS ;?></option>
						<option value="4j">4<?php echo _JOURS ;?></option>
						<option value="5j">5<?php echo _JOURS ;?></option>
						<option value="6j">6<?php echo _JOURS ;?></option>
						<option value="1s">1<?php echo _SEMAINE ;?></option>
					</select>
				</div>

				<div class="choixpage">
					<label for="nb_pages"><?php echo _LABEL_PAGE ;?></label>
					<span class="consignes">
						<?php echo _SPAN_PAGE ;?> 
					</span>
					<select name="nb_pages">
						<option value="" selected></option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
				</div>

				<div class="valider">
					<label for="submit"><?php echo _LABEL_VALIDER ;?></label>
					<button type="submit" name="submit" value="valider">
						<?php echo _VALIDER_ET_COMMENCER ;?>
					</button>
				</div>
			</form>
			</fieldset>
			<?php
		} else {
			?>
			<div class="unlog">
				<p class="erreurConnect"><?php echo _ERREUR_CONNECTPAGECREATION;?></p>
				<?php include ('modals/connexion.php'); ?>
			</div>
			<?php 
			}
	?>
		
	</div>	
	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>
</body>
<html>