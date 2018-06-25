<?php
	include '../includes/general_includesBD.php';
?>
<!DOCTYPE html>
<html lang='fr'>
<head>
	<meta charset='utf-8'>
	<title><?php echo test-creation-contenu-2 ;?></title>
	<?php include '../includes/headBD.html' ;?>
</head>
<body>
	<div id='main'>
	<!-- Menu -->
	<div id='menu'>
		<?php include '../includes/menuBD.php';?>
	</div>
	<div id='container' class='bandedessinee'>
		<h2>test creation contenu 2</h2>
		<img src='http://localhost/cadavre_esquisse/img/couverture1.jpg'>
	</div>

	<!-- Pied de page -->
	<div id='footer'>
		<?php include '../includes/footer.php';?>
	</div>
	</div>
</body>
</html>