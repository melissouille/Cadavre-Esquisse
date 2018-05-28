<?php
	// Connexion à la base de données :
	include '../controles/bddconnect.php';
	// Configuration langues :
	include "../controles/lang_config.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title><?php echo _ACCUEIL ;?></title>
	<link rel="stylesheet" type="text/css" href="styles/style.less">
	<?php include 'includes/head.html' ;?>
</head>
<body>
	<div id="main">
	<!-- Menu -->
	<div id="menu">
		<?php include'includes/menu.php';?>
	</div>

	<div id="container" class="index">
		<?php include 'includes/header.php';?>
		<section class="lidee">
			<h2><?php echo _T_PRINCIPE ;?></h2>
			<p><?php echo _PRINCIPE ;?></p>
			<div class="boutons">
				<a href="principe.php">
					<?php echo _ENSAVOIRPLUS ;?>
				</a>
			</div>
		</section>
		<section class="terminees">
			<h2 class="bandeau">
				<?php echo _T_BDTERMINEES ;?>
			</h2>
			<p><?php echo _BDTERMINEES ;?></p>
			<div class="miniature">
				<?php 
					$etatBD='terminee';
					include '../controles/miniature_config.php';
				?>
			</div>
			
			<div class="boutons">
				<a href="#" id="voir_terminees">
					<?php echo _TOUTVOIR ;?>
				</a>
			</div>
		</section>

		<section class="encours">
			<h2 class="bandeau">
				<?php echo _T_BDENCOURS ;?>
			</h2>
			<div class="indications">
				<div id="case_reservee" class="etats_case">
					<div class="fanion" id="reserve"></div>
					<div class="legendes_text">
						<h3><?php echo _CASERESERVEE ;?></h3>
						<p><?php echo _P_CASERESERVEE ;?></p>
					</div>
				</div>
				<div id="case_disponible" class="etats_case">
					<div class="fanion" id="vide"></div>
					<div class="legendes_text">
						<h3><?php echo _CASEDISPO ;?></h3>
						<p><?php echo _P_CASEDISPO ;?></p>
					</div>
				</div>
			</div>

			<div class="miniature">
				<?php 
					$etatBD = 'encours';
					include '../controles/miniature_config.php'; 
				?>
			</div>

			<div class="boutons">
				<a href="#" id="voir_encours">
					<?php echo _TOUTVOIR ;?>
				</a>
			</div>
		</section>
	</div>

	<!-- Pied de page -->
	<div id="footer">
		<?php include ("includes/footer.php");?>
	</div>
	</div>
</body>
</html>