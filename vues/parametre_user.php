<?php
	// Connexion à la base de données :
	include ("../../modeles/connexion_bdd.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Paramètre Auteur</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<!-- Less -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.0.0/less.min.js" ></script>
	<link rel="stylesheet/less" type="text/css" href="/styles/style.less">	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<!-- Less -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.0.0/less.min.js" ></script>
	<link rel="stylesheet/less" type="text/css" href="/styles/style.less"></head>
<body>
	<!-- Menu -->
	<?php include("../includes/menu.php");?>


	<!-- Pied de page -->
	<?php include ("../includes/footer.php");?>
</body>
<html>
<!-- Envoi fichier form :
	input type="file"
	input type="submit" value="Envoyer"
-->