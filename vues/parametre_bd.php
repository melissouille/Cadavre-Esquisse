<?php
	// Connexion à la base de données :
	include ("../modeles/connexion_bdd.php");
	// Configuration langues :
	include ("../controles/lang_config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo _PARAM_BD ;?></title>
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
		<?php include("includes/menu.php");?>
	</div>

	<div class="content">
		<h2><?php echo _T_PARAM_BD ;?></h2>
		<div class="titre">
			<h3><?php echo _TITRE;?> :</h3>
			<input type="text" name="titre" value="titre" class="titre_bd"/>
		</div>
		<div class="participants">
			<h3><?php echo _CONFIG_PARTICIPANTS ;?> :</h3>
			<input type="text" name="participants" class="participants"/>
			<!-- Dialogue BDD + fonction affichage // ?? type de sélection ??-->
		</div>
		<div class="details" style="display: none">
			<ul>
				<li>Créé le <span class="date_creation"></span></li>
				<li><span class="nb_participant"></span><?php echo  _NB_PARTICIPANTS ;?></li>
			</ul>
		</div>
				
		<div class="etat">
			<h3><?php echo _CHOIX_ETAT ;?> :</h3>
			<?php include ("includes/choix_etat.php"); ?>
		</div>

		<button type="button" name="valider" value="valider">
			<?php echo _VALIDER ;?>
		</button>
		<!-- modifier BDD quand bouton cliqué -->
	</div>

	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>
</body>
<html>