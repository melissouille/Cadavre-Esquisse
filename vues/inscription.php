<?php
	include '../controles/bddconnect.php';
	include ("../controles/lang_config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>S'inscrire</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<?php include 'includes/head.html' ;?>
</head>
<body>
	<!-- Menu -->
	<div id="menu">
		<?php include("includes/menu.php");?>
	</div>

<div class="content">
	<fieldset>
		<legend>Inscription</legend>
		<form id="registerForm" method="POST" action="../controles/inscription_config.php" novalidate="novalidate">
			
			<label for="avatar"><abbr title="Taille max : 50Ko"><?php echo _AVATAR ;?></abbr></label>
			<input type="file" name="avatar" id="avatar" /><br />

			<label for="username"><abbr title="required">Un Pseudo ?*</abbr></label>
			<input type="text" id="username" name="username"/><br>

			<label for="email"><abbr title="required">Email :*</abbr></label>
			<input type="email" id="email" name="email" placeholder="exemple@mail.com"><br>

			<label for="password"><abbr title="Le mot de passe doit comporté minumum 6 caractères avec au moins 1 minuscule, 1 majuscule, 1 chiffre et 1 caractère spécial.">Mot de Passe :*</abbr></label>
			<input type="password" id="password" name="password"><br>

			<label for="description"><abbr title="required">Description *</abbr></label>
			<input type="text" id="description" name="description"><br>

			<label><abbr title="saisir une url">Un site perso ?</abbr></label>
			<input type="url" name="website"><br>

			<p>
				<span>Les champs prédédés d'un * sont obligatoires.</span>
			</p>
			<button type="submit" name="submit" class="boutons" value="inscription">Valider Inscription</button>
		</form>
	</fieldset>
</div>

	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>
</body>
<html>