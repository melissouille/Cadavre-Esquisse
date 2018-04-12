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
	<link rel="stylesheet/less" type="text/css" href="/styles/style.less"></head>
<body>
	<!-- Menu -->
	<div id="menu">
		<?php include("includes/menu.php");?>
	</div>
	<h2><?php echo _T_PARCOURIR ;?></h2>
	<form>
		<label><?php echo _BARRE_RECHERCHE ;?></label>
		<input type="text" name="search" id="search_bar" value=""><br>
		<label for="terminee"><?php echo _TERMINEE ;?></label>
		<input type="checkbox" id="terminee" name="terminee" value="terminee"><br>
		<label for="encours"><?php echo _ENCOURS ;?></label>
		<input type="checkbox" id="encours" name="encours" value="encours"><br>
		<label for="entrepotes"><?php echo _ENTREPOTES ;?></label>
		<input type="checkbox" id="entrepotes" name="entrepotes" value="entrepotes"><br>
		<label for="ouverte"><?php echo _OUVERTE ;?></label>
		<input type="checkbox" id="ouverte" name="ouverte" value="ouverte"><br>
	</form>
	<div class="resultat">
		<div class="tri">
			<p>
				<?php echo _TRI_VUE ;?>
			</p>
		</div>
		<p>AFFICHE LES RESULTATS DE LA RECHERCHE</p>
	</div>
	
	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>

<script type="text/javascript">
	// Récup recherche
	var saisie = $('#search_bar');
</script>
</body>
<html>