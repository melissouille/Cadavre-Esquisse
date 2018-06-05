<?php
	include 'includes/general_includes.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title><?php echo _PAGE_BD ;?></title>
	<?php include 'includes/head.html' ;?>
</head>
<body>
	<div id="main">
	<!-- Menu -->
	<div id="menu">
		<?php include'includes/menu.php';?>
	</div>

	<div id="container">
		<?php if(isset($_SESSION['id'])) {
			include '../controles/listeBD.php';
		} else {
			include 'includes/noconnect.php';
		}
		?>
	</div>

	<!-- Pied de page -->
	<div id="footer">
		<?php include ("includes/footer.php");?>
	</div>
	</div>
</body>
</html>