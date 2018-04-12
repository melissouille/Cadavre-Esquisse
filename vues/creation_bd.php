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
	<title>Création d'une BD</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<!-- Less -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.0.0/less.min.js" ></script>
	<link rel="stylesheet/less" type="text/css" href="/styles/style.less"></head>
<body>
	<!-- Menu -->
	<div id="menu">
		<?php include("includes/menu.php");?>
	</div>

	<div class="content">
		<fieldset>
			<form>
				<div id="choix_titre">
					<h2><?php echo _T_CREATION ;?></h2>
					<br>
					<input type="text" id="titre_bd" name="titre" value="<?php echo _CHAMP_DE_TITRE ;?>" />
					<br>
					<span><?php echo _SPAN_TITRE ;?></span>
				</div>
				<div id="choix_etat">
					<?php include ("includes/choix_etat.php"); ?>
				</div>

				<div id="choix_potes">
					<h4><?php echo _CHOIX_POTES ;?></h4>
					<p class="consignes">
						<?php echo _CHOIX_POTES_CONSIGNES ;?>
					</p>

					<input type="text" name="potes" id="" value="<?php echo _CHAMP_RECHERCHE ;?>" /><br>
					<!-- Ajoute div class checkbox avec input et label avec valeurs à partir de la BDD pour chaque résultat trouvé -->
					<div class="checkbox">
						<input type="checkbox" name="potes" value="">
						<label>
							<span class="avatar"></span>
							<span class="nom"></span>
							<span class="cases"></span>
						</label>
					</div>
				</div>

				<div class="temps">
					<h4><?php echo _CHOIX_TEMPS ;?></h4>
					<p class="consignes">
						<?php echo _CHOIX_TEMPS_CONSIGNES ;?>
					</p>
					<select name="temps">
						<!-- Affichage du nombre d'option en fonction de l'état de partage -->
						<!-- Pour la Slidebar, utilisation potentiel de jQuery ou autre framework -->
						<!-- Heures -->
						<option value="1h">1h</option>					
						<option value="3h">3h</option>
						<option value="6h">6h</option>
						<option value="12h">12h</option>
						<!-- Jours -->
						<option value="1j">
							1 <?php echo _1JOUR ;?>
						</option>
						<option value="2j">
							2 <?php echo _JOURS ;?>
						</option>
						<option value="3j">
							3 <?php echo _JOURS ;?>
						</option>
						<option value="4j">
							4 <?php echo _JOURS ;?>
						</option>
						<option value="5j">
							5 <?php echo _JOURS ;?>
						</option>
						<option value="6j">
							6 <?php echo _JOURS ;?>
						</option>
						<option value="1s">
							1 semaine
						</option>
					</select>
				</div>

				<div class="nb_pages">
					<h4><?php echo _CHOIX_PAGE ;?></h4>
					<p class="consignes">
						<?php echo _CHOIX_PAGE_CONSIGNES ;?> 
					</p>
					<select name="nb_pages">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
					<!-- Pour la Slidebar, utilisation potentiel de jQuery ou autre framework -->
				</div>
				<div class="valider">
					<h4><?php echo _CHOIX_VALIDER ;?></h4>
					<div class="boutons">
						<input type="button" name="valider" id="valide_crea" value="<?php echo _VALIDER_ET_COMMENCER ;?>" />
					</div>
				</div>
			</form>
		</fieldset>
	</div>	
	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>
</body>
<html>