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
	<title>Création d'une BD</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<!-- Less -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.0.0/less.min.js" ></script>
		<link rel="stylesheet/less" type="text/css" href="/styles/style.less">
	<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- Menu -->
	<div id="menu">
		<?php include("includes/menu.php");?>
	</div>

	<div class="content">

		<?php 
		if (isset($_SESSION['id'])) { ?>
			
		<fieldset>
			<legend><?php echo _T_CREATION ;?></legend>
			
			<form id="createForm" method="POST" action="../controles/creationBD_config.php">

				<div class="choixtitre">
					<label for="titreBD"><?php echo _LABEL_TITRE ;?></label>
					<input type="text" name="titre" id="titreBD" />
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
			<p> Veuillez-vous connecter pour créer une bd.</p>
			<?php
		}
	?>
		
	</div>	
	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>
</body>
<html>