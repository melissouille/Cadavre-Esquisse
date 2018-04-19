<?php
	// Connexion à la base de données :
	include "../modeles/connexion_bdd.php";
	// Configuration langues :
	include "../controles/lang_config.php";
	// Configuration Less :
	require "../controles/less.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title><?php echo _ACCUEIL ;?></title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<!-- Less -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.0.0/less.min.js" ></script>
		<link rel="stylesheet/less" type="text/css" href="/styles/style.less">
	<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- Menu -->
	<div id="menu">
		<?php include'includes/menu.php';?>
	</div>

	<?php include 'includes/header.php';?>
	
	<div class="content">
		<section>
			<div class="lidee">
				<h2 class="titres">
					<?php echo _T_PRINCIPE ;?></h2>
				<p><?php echo _PRINCIPE ;?></p>
				<div class="guide">
					<div class="boutons">
						<a href="principe.php">
							<?php echo _ENSAVOIRPLUS ;?>
						</a>
					</div>
				</div>
			</div>
		</section>
		<section class="bd_terminees">
			<h2 class="bandeau titres" id="titre_bd_terminees">
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

		<section class="bd_encours">
			<h2 class="bandeau titres" id="titre_bd_encours">
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
	<?php include ("includes/footer.php");?>

</body>
</html>