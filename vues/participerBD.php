<?php
	include 'includes/general_includes.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo _PARTICIPERBD ;?></title>
	<?php include 'includes/head.html' ;?>
</head>
<body>
	<div id="main">
	<!-- Menu -->
	<div id="menu">
		<?php include 'includes/menu.php';?>
	</div>

	<div id="container" class="participer">
		<!-- Uniquement pour les utilisateurs connectés -->
		<?php if (isset($_SESSION['id'])) { ?>
		<form id="searchForm" method="post">
			<h2 class="titres"><?php echo _T_PARTICIPER ;?></h2>
			<!-- pour mise en forme jquery ui id="box" -->
			<div id="box">
				<label for="recherche"><?php echo _BARRE_RECHERCHE ;?></label><br>
				<input type="text" name="recherche" id="recherche" autocomplete="off">
			</div>
			<br>
			<div id="filtres">
				<label>
					<div class="text">
					<?php echo _CASERESERVEES ;?>
					</div>
					<div class="fanionfiltre" id="reserve"></div>
					<input type="checkbox" name="checkbox" value="reserve">
					<span class="checkmark"></span>
				</label>
				<label class="etatsfiltre">
					<div class="text">
					<?php echo _CASEDISPOS ;?>
					</div>
					<div class="fanionfiltre" id="vide"></div>
					<input type="checkbox" name="checkbox" value="disponible">
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
				<?php include '../controleurs/participer.php'; ?>
			</div>
			<span class="nbresults"><?php echo $resultat; ?></span>
		</div>
		<?php
		} else {
			include 'includes/noconnect.php';
		}
		?>
	</div>
	
	<!-- Pied de page -->
	<div id="footer">
		<?php include 'includes/footer.php';?>
	</div>

	</div>
	<script src="../controleurs/autocomplete/autocomplete.js">
	</script>
</body>
<html>