<?php
	include 'includes/general_includes.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>S'inscrire</title>
	<?php include 'includes/head.html' ;?>
</head>
<body>
	<div id="main">
	<!-- Menu -->
	<div id="menu">
		<?php include'includes/menu.php';?>
	</div>

<div id="container" class="inscription">
	<fieldset>
		<legend>Inscription</legend>
		<form id="registerForm" method="POST" action="../controles/inscription_config.php" novalidate="novalidate">
			
			<label for="username">
				<abbr>Un Pseudo ? *</abbr>
				<br>
				<input type="text" id="username" name="username" placeholder="pseudo"/>
			</label>
			<br>
			<label for="email">
				<abbr>Email : *</abbr>
				<br>
				<input type="email" id="email" name="email" placeholder="exemple@mail.com">
			</label>
			<br>
			<label for="password">
				<abbr title="Le mot de passe doit comporté minumum 6 caractères avec au moins 1 minuscule, 1 majuscule, 1 chiffre et 1 caractère spécial.">Mot de Passe : *</abbr>
				<br>
				<input type="password" id="password" name="password" placeholder="mot de passe">
			</label>
			<br>

			<label for="description">
				<abbr>Description *</abbr>
				<br>
				<textarea id="description" name="description" placeholder="votre description"></textarea>
			</label>
			<br>

			<label>
				<abbr title="saisir une url">Un site perso ?</abbr>
				<br>
				<input type="url" name="website" placeholder="url de votre site">
			</label>
			<p>
				<span>* obligatoires.</span>
			</p>
			<button type="submit" name="submit" class="boutons" value="inscription">Valider Inscription</button>
		</form>
	</fieldset>
</div>

	<!-- Pied de page -->
	<div id="footer">
		<?php include 'includes/footer.php';?>
	</div>
	</div>
</body>
<html>