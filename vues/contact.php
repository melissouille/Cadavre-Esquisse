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
	<link rel="stylesheet" type="text/css" href="styles/style.less">
	<?php include 'includes/head.html' ;?>
</head>
<body>
	<!-- Menu -->
	<div id="menu">
		<?php include("includes/menu.php");?>
	</div>

<<<<<<< HEAD
	<div id="container" class="contact">
		<fieldset>
			<legend><?php echo _CONTACT ;?> :</legend>
			<form method="POST" action="../controles/formContact.php" form="contact">
				<label><?php echo _NOM ;?></label><br>
				<input type="text" name="username"><br>
=======
	<fieldset>
		<legend><?php echo _CONTACT ;?> :</legend>
		<form method="POST" action="../controles/formContact.php" form="contact">
			<label><?php echo _NOM ;?></label><br>
			<input type="text" name="username"><br>
>>>>>>> parent of b59ca4a... update 27/04

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
	
	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>
</body>
<html>