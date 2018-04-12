<?php
	session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
	<nav>
		<ul>
			<li><a href="index.php">
				<?php echo _ACCUEIL ;?>
			</a></li>
			<li><a href="principe.php">
				<?php echo _LEPRINCIPE ;?>
			</a></li>
			<li><a href="explorer.php">
				<?php echo _EXPLORER ;?>
			</a></li>
			<li><a href="#">
				<?php echo _PARTICIPERBD ;?>
			</a></li>
			<li><a href="creation_bd.php">
				<?php echo _CREERBD ;?>
			</a></li>
			<li><a href="contact.php">
				<?php echo _CONTACT ;?>
			</a></li>
			<li>
				<?php
					if (isset($_SESSION['user'])) {
						$connecte = 1;
						include ('modals/dropdown_profil.php');
					} else {
						include ('modals/connexion.php');
					}
				?>
			</li>
		</ul>
	</nav>
</body>
</html>
