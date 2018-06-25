<?php
$titreurl = str_replace(' ', '-', $titre);
$fichier = fopen('../vues/bd/'.$titreurl.'.php', 'w+');
$contenu = "<?php
	include '../includes/general_includesBD.php';
?>
<!DOCTYPE html>
<html lang='fr'>
<head>
	<meta charset='utf-8'>
	<title><?php echo $titreurl ;?></title>
	<?php include '../includes/headBD.html' ;?>
</head>
<body>
	<div id='main'>
	<!-- Menu -->
	<div id='menu'>
		<?php include '../includes/menuBD.php';?>
	</div>
	<div id='container' class='bandedessinee'>
		<h2>$titre</h2>
		<img src='$couverture'>
	</div>

	<!-- Pied de page -->
	<div id='footer'>
		<?php include '../includes/footer.php';?>
	</div>
	</div>
</body>
</html>";
fwrite($fichier, $contenu);
fclose($fichier);
$url = "www.cadavreesquisse.com/".$titreurl."";
?>