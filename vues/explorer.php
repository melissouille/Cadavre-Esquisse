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
	<title><?php echo _EXPLORER ;?></title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<!-- Less -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.0.0/less.min.js" ></script>
		<link rel="stylesheet/less" type="text/css" href="/styles/style.less">
	<!-- Bootstrap -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<!-- jQuery -->
  		<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<!-- jQuery UI -->
  		<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  		
  		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  		
	<script>
		$(function() {
			$("#recherche").on('input', function() {
				$("#recherche").autocomplete({
					source: '../controles/autocomplete.php?term='+$("#recherche").val()
				});
			});
		});
	</script>

</head>
<body>
	<!-- Menu -->
	<div id="menu">
		<?php include("includes/menu.php");?>
	</div>

	<h2><?php echo _T_PARCOURIR ;?></h2>

	<form action="recherche.php" method="post">
		<!-- pour mise en forme jquery ui id="box" -->
		<div id="box">
			<label for="recherche"><?php echo _BARRE_RECHERCHE ;?></label>
			<input type="text" name="recherche" id="recherche" autocomplete="off">
		</div>
		<br>
		<label for="terminee"><?php echo _TERMINEE ;?></label>
		<input type="checkbox" id="terminee" name="terminee" value="terminee"><br>
		<label for="encours"><?php echo _ENCOURS ;?></label>
		<input type="checkbox" id="encours" name="encours" value="encours"><br>
		<label for="entrepotes"><?php echo _ENTREPOTES ;?></label>
		<input type="checkbox" id="entrepotes" name="entrepotes" value="entrepotes"><br>
		<label for="ouverte"><?php echo _OUVERTE ;?></label>
		<input type="checkbox" id="ouverte" name="ouverte" value="ouverte"><br>

		<input type="submit" name="submit">
	</form>
	<div id="results">
		<div class="tri">
			<p>
				<?php echo _TRI_VUE ;?>
			</p>
		</div>
		<div id="liste_rechercher">
			<h4>Résultats:</h4>
			
			<li></li>
		</div>
	</div>
	
	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>
</body>
<html>