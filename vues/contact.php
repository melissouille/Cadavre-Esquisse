<?php
include '../controles/bddconnect.php';
	// Configuration langues :
	include ("../controles/lang_config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo _CONTACT ;?></title>
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
		<fieldset>
			<legend><?php echo _CONTACT ;?> :</legend>
			<form method="POST" action="../controles/formContact.php" form="contact">
				<label><?php echo _NOM ;?></label><br>
				<input type="text" name="username"><br>

				<label><?php echo _MAIL ;?></label><br>
				<input type="text" name="email"><br>

				<label><?php echo _BLA ;?></label><br>
				<textarea form="contact" rows="10" cols="50"></textarea><br>

				<button class="boutons" type="submit" name="envoyer" value="envoyer">Envoyer</button>
			</form>
		</fieldset>
		<div class="reseaux">
			<?php echo _REJOIN_RESEAUX ;?>
			<span class="facebook"></span>
			<span class="instagram"></span>
		</div>
	</div>
	
	<!-- Pied de page -->
	<div id="footer">
		<?php include ("includes/footer.php");?>
	</div>
	</div>
</body>
<html>