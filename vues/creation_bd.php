<?php
	include '../controles/bddconnect.php';
	include '../controles/lang_config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Création d'une BD</title>
	<link rel="stylesheet" type="text/css" href="styles/style.less">
	<?php include 'includes/head.html' ;?>
</head>
<body>
	<!-- Menu -->
	<div id="menu">
		<?php include("includes/menu.php");?>
	</div>

	<div class="container" id="creation_bd">

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
				</div>
				<div id="choixpotes" style="display: none">
					<div id="box">
						<label for="rechercheUser">
							<h4><span class="numero">*</span><?php echo _LABEL_POTES ;?></h4>
							<p><?php echo _SPAN_POTES ;?></p>
						</label>
						<br>
						<input type="search" name="rechercheUser" id="rechercheUser" autocomplete="off" placeholder="<?php echo _CHAMP_RECHERCHE ;?>">
						<button type="submit" name="ajouter" value="ajouter">Ajouter</button>
					</div>

<<<<<<< HEAD
						<div class="checkbox">
						
						</div>
=======
					<div class="checkbox">
						<?php
						require '../controles/ajoutparticipants.php';
						?>
>>>>>>> parent of b59ca4a... update 27/04
					</div>
				</div>

				<div id="choixtemps">
					<label for="temps">
						<h3><span class="numero">2</span><?php echo _LABEL_TEMPS ;?></h3>

						<p class="consignes">
							<?php echo _SPAN_TEMPS ;?>
						</p>
						<div class="slidecontainer">
							<input type="range" name="temps" class="slider" min="0" max ="9" step="1" >
							<input type="text" id="inputduree" name="ionrange" value="">
							<output name="resultduree"></output>
							<div id="outputduree"></div>
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
							<input type='range' min="1" max="10" name="nb_pages" step="1" class="slider" id="rangepage" list="datalistpages">
							<output name="resultpages"></output>
							<datalist id="datalistpages">
								<option value="1" label="1">1</option>
								<option value="2"></option>
								<option value="3"></option>
								<option value="4"></option>
								<option value="5" label="5">5</option>
								<option value="6"></option>
								<option value="7"></option>
								<option value="8"></option>
								<option value="9"></option>
								<option value="10" label="10">10</option>
						</datalist>
						</div>

					</label>
				</div>
			</form>
			<div class="valider">
				<?php echo _LABEL_VALIDER ;?>
				<button type="submit" name="valider" formaction="../controles/creationBD_config.php" form="createForm">
					<?php echo _VALIDER_ET_COMMENCER ;?>
				</button>
			</div>
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
<<<<<<< HEAD

=======
>>>>>>> parent of b59ca4a... update 27/04
	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>

	<script>
		// JQUERY 
		$(document).ready(function() {
			$('input[name="droit"]').click(function() {
				if ($(this).attr('id') == "potes") {
					$("#choixpotes").show('slow');
				} else {
					$("#choixpotes").hide('slow');
				}		
			});
<<<<<<< HEAD
			$("#searchUserForm").submit(function () {
				$.post("ajoutparticipants.php",$(this).serialize(),function(data){
					$("div#checkbox").append(data);
				});
				return false; // pour ne pas recharger la page 
			});
			$(function() {
				$("#rechercheUser").on('input', function() {
					$("#rechercheUser").autocomplete({
						source: '../controles/autocompleteUser.php?term='+$("#rechercheUser").val()
					});
				});
			});
			/* Pour afficher valeur range des pages :*/
			$(function() {
				$('#rangepage').next().text('');
				$('#rangepage').on('input', function() {
					var $set = $(this).val();
					$(this).next().text($set);
=======
		});
		$(function() {
			$("#rechercheUser").on('input', function() {
				$("#rechercheUser").autocomplete({
					source: '../controles/autocompleteUser.php?term='+$("#rechercheUser").val()
>>>>>>> parent of b59ca4a... update 27/04
				});
			});

			$("#inputduree").ionRangeSlider(function(){
				type: "single",
				values: ['1','3','6','12','24','48']
			});
			var slider = $("#inputduree").data("ionRangeSlider");
			slider.update({
				values : ['1','3','6','12','24','48','72','94','120','144','168']
			});
		});

		/* JS
		function step() {
			var droit = document.querySelector('input[name=droit]:checked').value;
			if (droit == 'tous' ) {
				var heures = [1,3,6,12,24,48];
				return heures;
			} else {
				var heures = [1,3,6,12,24,48,72,94,120,144,168];
				return heures;
			}
			var heures = [1,3,6,12,24,48,72,94,120,144,168];
			var input = document.getElementById('inputduree');
			var output = document.getElementById('outputduree');
			input.oninput = function() {
				output.innerHTML = heures[this.value];
			};
			input.oninput();
		};
		*/
		
	</script>
</body>
<html>