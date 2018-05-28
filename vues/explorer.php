<?php
	include 'includes/general_includes.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo _EXPLORER ;?></title>
	<?php include 'includes/head.html' ;?>
</head>
<body>
	<div id="main">
	<!-- Menu -->
	<div id="menu">
		<?php include 'includes/menu.php';?>
	</div>

	<div id="container" class="explorer">
		<form id="searchForm" method="post">
			<h2><?php echo _T_PARCOURIR ;?></h2>
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
				<label><?php echo _ENCOURS ;?>
					<input type="checkbox" name="checkbox" value="encours">
					<span class="checkmark"></span>
				</label>
				<label><?php echo _ENTREPOTES ;?>
					<input type="checkbox" name="checkbox" value="potes">
					<span class="checkmark"></span>
				</label>
				<label><?php echo _OUVERTE ;?>
					<input type="checkbox" name="checkbox" value="ouverte">
					<span class="checkmark"></span>
				</label>
			</div>

			<input type="submit" name="rechercher" class="hidden">
		</form>
		<!-- Affichage des résultats -->
		<div id="results">
			<div class="tri">
				<p>
					<?php echo _TRI_VUE ;?>
				</p>
				<span class="checkmark"></span>
			</div>

			<div id="liste_rechercher">
				<?php include '../controles/recherche.php'; ?>
			</div>
			<span class="nbresults"><?php echo $resultat; ?></span>
		</div>
	</div>
	
	<!-- Pied de page -->
	<div id="footer">
		<?php include ("includes/footer.php");?>
	</div>
	</div>

	<script src="../controles/autocomplete.js">
	</script>
</body>
<html>