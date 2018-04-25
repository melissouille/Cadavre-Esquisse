<?php
	include '../controles/bddconnect.php';
	include ("../controles/lang_config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo _EXPLORER ;?></title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<?php include 'includes/head.html' ;?>
</head>
<body>
	<!-- Menu -->
	<div id="menu">
		<?php include("includes/menu.php");?>
	</div>

	<div class="container">
		<form id="searchForm" method="post">
			<h2 class="titres"><?php echo _T_PARCOURIR ;?></h2><!-- pour mise en forme jquery ui id="box" -->
			<div id="box">
				<label for="recherche"><?php echo _BARRE_RECHERCHE ;?></label><br>
				<input type="text" name="recherche" id="recherche" autocomplete="off">
			</div>
			<br>
			<div id="filtres">
				<label><?php echo _TERMINEE ;?>
					<input type="checkbox" name="checkbox" value="terminee">
					<span class="checkmark"></span>
				</label>
				<br>
				<label><?php echo _ENCOURS ;?>
					<input type="checkbox" name="checkbox" value="encours">
					<span class="checkmark"></span>
				</label>
				<br>
				<label><?php echo _ENTREPOTES ;?>
					<input type="checkbox" name="checkbox" value="potes">
					<span class="checkmark"></span>
				</label>
				<br>
				<label><?php echo _OUVERTE ;?>
					<input type="checkbox" name="checkbox" value="ouverte">
					<span class="checkmark"></span>
				</label>
				<br>
			</div>

			<input type="submit" name="rechercher">
		</form>
		<div id="results">
			<div class="tri">
				<p>
					<?php echo _TRI_VUE ;?>
				</p>
			</div>
			<div id="liste_rechercher">
				<h4>Résultats:</h4>
				<?php include '../controles/recherche.php'; ?>
			</div>
		</div>
	</div>
	
	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>

	<script>
		$(function() {
			$("#recherche").on('input', function() {
				$("#recherche").autocomplete({
					source: '../controles/autocomplete.php?term='+$("#recherche").val()
				});
			});
		});
	</script>
</body>
<html>