<?php
	// Connexion à la base de données :
	include ("../modeles/connexion_bdd.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact</title>
	<script src="controles/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!-- Menu -->
	<?php include("includes/menu.php");?>

	<fieldset>
		<legend>Contact :</legend>
		<form method="POST" action="../controles/formContact.php" form="contact">
			<label>Pseudo :</label><br>
			<input type="text" name="username"><br>

			<label>Email :</label><br>
			<input type="text" name="email"><br>

			<label>Message :</label><br>
			<textarea form="contact" rows="10" cols="50"></textarea><br>

			<button class="boutons" type="submit" name="envoyer" value="envoyer">Envoyer</button>
		</form>
	</fieldset>

	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>
</body>
<html>