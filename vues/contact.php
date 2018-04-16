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
	<title><?php echo _CONTACT ;?></title>
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
	
	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>
</body>
<html>