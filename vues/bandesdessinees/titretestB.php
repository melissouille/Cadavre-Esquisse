<?php
	include 'route.php';
	echo $connectBDD;
	echo $lang;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo $stylesheet;?>">
	<?php echo $head;?>
</head>
<body>
	<div id="main">
	<!-- Menu -->
	<div id="menu">
		<?php echo $menu;?>
	</div>
	<div id="container">
	</div>

	<!-- Pied de page -->
	<div id="footer">
		<?php echo $footer;?>
	</div>

	</div>
</body>
</html>
