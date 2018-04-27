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
</head>
<body>
	<div id="main">
	<!-- Menu -->
	<div id="menu">
		<?php include("includes/menu.php");?>
	</div>

	<div id="container" class="creation_bd">

		<?php 
		if (isset($_SESSION['id'])) { ?>
			
			<form method="POST" id="createForm">

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
					<div id="choixpotes" style="display: none">
						<label for="rechercheUser">
							<h4><span class="numero">*</span><?php echo _LABEL_POTES ;?></h4>
							<p><?php echo _SPAN_POTES ;?></p>
						</label>
						<br>
						<input type="search" name="rechercheUser" id="rechercheUser" autocomplete="off" placeholder="<?php echo _CHAMP_RECHERCHE ;?>">
						<button type="submit" name="ajouter" value="ajouter">Ajouter</button>

						<div class="checkbox"></div>
					</div>
				</div>

				<div id="choixtemps">
					<label for="temps">
						<h3><span class="numero">2</span><?php echo _LABEL_TEMPS ;?></h3>

						<p class="consignes">
							<?php echo _SPAN_TEMPS ;?>
						</p>
						<div class="slidecontainer">
							<input type="range" name="temps" list="durees" class="slider" value="1h">
							<datalist id="durees">
								<option value="1h" label="1h"></option>		
								<option value="3h"></option>
								<option value="6h"></option>
								<option value="12h"></option>
								<option value="1j"></option>
								<option value="2j"></option>
								<option value="3j"></option>
								<option value="4j"></option>
								<option value="5j"></option>
								<option value="6j"></option>
								<option value="1s" label="1<?php echo _SEMAINE ;?>"></option>
							</datalist>
						</div>
					</label>
				</div>

				<div id="choixpage">
					<label for="nb_pages">
						<h3><span class="numero">3</span><?php echo _LABEL_PAGE ;?></h3>

						<span class="consignes">
							<?php echo _SPAN_PAGE ;?> 
						</span>
						<div class="slidecontainer">
							<input type='range' min="1" max="10" name="nb_pages" value="1" class="slider" id="rangepage" list="datalistpages">
							<datalist id="datalistpages">
							<option value="1" label="1"></option>
							<option value="2"></option>
							<option value="3"></option>
							<option value="4"></option>
							<option value="5" label="5"></option>
							<option value="6"></option>
							<option value="7"></option>
							<option value="8"></option>
							<option value="9"></option>
							<option value="1s" label="10"></option>
						</datalist>
						</div>

					</label>
				</div>
			</form>

			<div class="valider">
				<h2 class="titres"><?php echo _LABEL_VALIDER ;?></h2>
				<button type="submit" name="valider" formaction="../controles/creationBD_config.php" form="createForm">
					<?php echo _VALIDER_ET_COMMENCER ;?>
				</button>
			</div>
			<?php
		} else {
			include 'includes/noconnect.php';
		}
		?>
	</div>	
	
	<!-- Pied de page -->
	<div id="footer">
		<?php include ("includes/footer.php");?>
	</div>
	</div>

	<script>
		$(document).ready(function() {
			$('input[name="droit"]').click(function() {
				if ($(this).attr('id') == "potes") {
					$("#choixpotes").show('slow');
				} else {
					$("#choixpotes").hide('slow');
				}		
			});
			$("#searchUserForm").submit(function () {
				$.post("ajoutparticipants.php",$(this).serialize(),function(data){
					$("div#checkbox").append(data);
				});
				return false; // pour ne pas recharger la page 
			}); 
		});
		$(function() {
			$("#rechercheUser").on('input', function() {
				$("#rechercheUser").autocomplete({
					source: '../controles/autocompleteUser.php?term='+$("#rechercheUser").val()
				});
			});
		});
	</script>
</body>
<html>