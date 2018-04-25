<?php
	include '../controles/bddconnect.php';
	include '../controles/lang_config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Création d'une BD</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<?php include 'includes/head.html' ;?>
		<script>
		$('input:radio').click(function() {
			$("input:radio").toggle('slow', function() {
				if (document.getElementByName("droit").val() != "potes") {
					document.getElementById('choixpotes').style.visibilite="hidden";
				} else {
					document.getElementById('choixpotes').style.visibilite="visible";
				}
			});
		});
	</script>
</head>
<body>
	<!-- Menu -->
	<div id="menu">
		<?php include("includes/menu.php");?>
	</div>

	<div class="container" id="creation_bd">

		<?php 
		if (isset($_SESSION['id'])) { ?>
			
		<fieldset id="createForm">
			
			<form method="POST" action="../controles/creationBD_config.php">

				<div id="choixtitre">
					<h2><?php echo _T_CREATION ;?></h2>
					<label for="titre">
						<input type="text" name="titre" id="titre" placeholder="<?php echo _CHAMP_TITRE; ?>"/>
						<br>
						<span class="consignes"><?php echo _SPAN_TITRE ;?></span>
					</label>
				</div>

				<div id="choixdroit">
					<h3 class="consignes"><span class="numero">1</span><?php echo _LABEL_DROIT ;?></h3>
					<div id="includechoix">
						<div class="choix">
							<label for="potes">
								<h4 class="potes"><?php echo _ENTREPOTES ;?></h4>
								<p><?php echo _EXP_ENTREPOTES ;?><br>
									<span class="visibilite">
										<?php echo _VISIBLE_TOUS ;?>
									</span>
								</p>
							</label>
							<input type="radio" name="droit" value="pote" id="potes" />
						</div>
						<div class="choix">
							<label for="tous">
								<h4 class="tous"><?php echo _OUVERTE ;?></h4>
								<p>
									<?php echo _EXP_OUVERTE ;?>
									<br>
									<span class="visibilite">
										<?php echo _VISIBLE_TOUS ;?>
									</span>
								</p>
							</label>
							<input type="radio" name="droit" value="tous" id="tous" />
						</div>
						<div class="choix">
							<label for="privee">
								<h4 class="privee"><?php echo _PRIVEE ;?></h4>
								<p>
									<?php echo _EXP_PRIVEE ;?>
									<br>
									<span class="visibilite">
										<?php echo _VISIBLE_PARTICIPANT ;?>
									</span>
								</p>
							</label>
							<input type="radio" name="droit" value="privee" id="privee" />
						</div>
					</div>
				</div>
				<div id="choixpotes">
					<label for="potes">
						<?php echo _LABEL_POTES ;?>
						<span class="consignes">
							<?php echo _SPAN_POTES ;?>
						</span>
						<input type="text" name="potes" id="searchpotes" value="<?php echo _CHAMP_RECHERCHE ;?>" />
						<br>
						<div class="checkbox">
							<input type="checkbox" name="potes" value="">
							<label>
								<span class="avatar"></span>
								<span class="nom"></span>
								<span class="cases"></span>
							</label>
						</div>
					</label>
				</div>

				<div id="choixtemps">
					<label for="temps">
						<h3><span class="numero">2</span><?php echo _LABEL_TEMPS ;?></h3>

						<span class="consignes">
							<?php echo _SPAN_TEMPS ;?>
						</span>
						<select name="temps">
							<option value="" selected></option>
							<option value="1h">1<?php echo _1HEURE ;?></option>					
							<option value="3h">3<?php echo _HEURES ;?></option>
							<option value="6h">6<?php echo _HEURES ;?></option>
							<option value="12h">12<?php echo _HEURES ;?></option>
							<option value="1j">1<?php echo _1JOUR ;?></option>
							<option value="2j">2<?php echo _JOURS ;?></option>
							<option value="3j">3<?php echo _JOURS ;?></option>
							<option value="4j">4<?php echo _JOURS ;?></option>
							<option value="5j">5<?php echo _JOURS ;?></option>
							<option value="6j">6<?php echo _JOURS ;?></option>
							<option value="1s">1<?php echo _SEMAINE ;?></option>
						</select>
					</label>
				</div>

				<div id="choixpage">
					<label for="nb_pages">
						<h3><span class="numero">3</span><?php echo _LABEL_PAGE ;?></h3>

						<span class="consignes">
							<?php echo _SPAN_PAGE ;?> 
						</span>
						<select name="nb_pages">
							<option value="" selected></option>
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
					</label>
				</div>

				<div class="valider">
					<label for="submit"><?php echo _LABEL_VALIDER ;?>
						<button type="submit" name="submit" value="valider">
							<?php echo _VALIDER_ET_COMMENCER ;?>
						</button>
					</label>
				</div>
			</form>
			</fieldset>
			<?php
		} else {
			?>
			<div class="unlog">
				<p class="erreurConnect"><?php echo _ERREUR_CONNECTPAGECREATION;?></p>
				<?php include ('modals/connexion.php'); ?>
			</div>
			<?php 
			}
	?>
		
	</div>	
	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>
</body>
<html>