<?php
	// Connexion à la base de données :
	include ("../modeles/connexion_bdd.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>S'inscrire</title>
	<script src="controles/script.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- Menu -->
	<?php include("includes/menu.php");?>

<div class="content">
	<fieldset>
		<legend>Inscription</legend>
		<form id="registerForm" method="POST" action="../controles/func_inscription.php" novalidate="novalidate">
			<label>Un Pseudo ?</label>
			<input type="text" id="username" name="username" required/>

			<label>Email :</label>
			<input type="text" id="email" name="email" placeholder="exemple@mail.com" required>

			<label>Mot de Passe :</label>
			<input type="password" name="password" required>
			<p><span>Le mot de passe doit comporté minumum 6 caractères avec au moins 1 minuscule, 1 majuscule, 1 chiffre et 1 caractère spécial.</span></p>

			<label>Un site perso ?</label>
			<input type="text" name="website">

			<button type="submit" name="submit" value="inscription">Valider Inscription</button>
		</form>
	</fieldset>
</div>

	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>
</body>
<html>