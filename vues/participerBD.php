<?php
	include '../controles/bddconnect.php';
	include ("../controles/lang_config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo _EXPLORER ;?></title>
	<link rel="stylesheet" type="text/css" href="styles/style.less">
	<?php include 'includes/head.html' ;?>
</head>
<body>
	<div id="main">
	<!-- Menu -->
	<div id="menu">
		<?php include("includes/menu.php");?>
	</div>

	<div id="container" class="participer">
		<form id="searchForm" method="post">
			<h2 class="titres"><?php echo _T_PARTICIPER ;?></h2><!-- pour mise en forme jquery ui id="box" -->
			<div id="box">
				<label for="recherche"><?php echo _BARRE_RECHERCHE ;?></label><br>
				<input type="text" name="recherche" id="rechercheencours" autocomplete="off">
			</div>
			<br>
			<div id="filtres">
				<label><?php echo _CASERESERVEES ;?>
					<input type="checkbox" name="checkbox" value="reserve">
					<span class="checkmark"></span>
				</label>
				<br>
				<label><?php echo _CASEDISPOS ;?>
					<input type="checkbox" name="checkbox" value="disponible">
					<span class="checkmark"></span>
				</label>
				<br>
			</div>

			<input type="submit" name="rechercher" class="hidden">
		</form>
		<div id="results">
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
			<div class="tri">
				<p>
					<?php echo _TRI_VUE ;?>
				</p>
				<span class="checkmark"></span>
			</div>

			<div id="liste_rechercher">
				<?php include '../controles/participer.php'; ?>
			</div>
			<span class="nbresults"><?php echo $resultat; ?></span>
		</div>
	</div>
	
	<!-- Pied de page -->
	<div id="footer">
		<?php include ("includes/footer.php");?>
	</div>
	</div>
	<script src="../controles/autocompletes/autocomplete.js">
	</script>
</body>
<html>