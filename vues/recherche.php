<?php
	// Connexion à la base de données :
	include ("../modeles/connexion_bdd.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Rechercher</title>
	<script src="controles/script.js"></script>
	<link rel="stylesheet" type="text/css" href="vues/style.css">
</head>
<body>
	<!-- Menu -->
	<?php include("includes/menu.php");?>

	<form>
		<label>Rechercher une BD</label>
		<input type="text" name="search" id="search_bar" value="">
		<!-- dialogue bdd -->
		<div class="tri">
		</div>
		<?php include ("includes/miniatureBD.php");?>
	</form>
	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>
</body>
<html>