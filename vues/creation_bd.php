<?php
	include 'includes/general_includes.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Création d'une BD</title>
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
					<div id="choixpotes" style="display: block">
						<label for="searchbaruser">
							<h4><span class="numero">*</span><?php echo _LABEL_POTES ;?></h4>
							<p><?php echo _SPAN_POTES ;?></p>
						</label>
						<br>
						<input type="search" name="rechercheUser" id="searchbaruser" class="nameuser" autocomplete="off" placeholder="<?php echo _CHAMP_RECHERCHE ;?>">
						<button type="button" name="ajouter" value="ajouter" id="ajouter">Ajouter</button>
						<br>
						<div class="checkbox">
							<label for="checkboxNodeList" class="nodelist">
								usertest1
								<span class="close">x</span>
								<input type="checkbox" class="hidden" name="checkboxNodeList[]" value="usertest1" checked="true">	
							</label>
					</div>
				</div>

				<div id="choixtemps">
					<label for="temps">
						<h3><span class="numero">2</span><?php echo _LABEL_TEMPS ;?></h3>

						<p class="consignes">
							<?php echo _SPAN_TEMPS ;?>
						</p>
						<div id="sliderange">
							<!--
							<input type='range' min="1" max="168" name="nb_pages" value="1" class="slider" id="rangetemps">
							-->
							<select id="durees">
								<option value="1" label="1h">1 heures</option>		
								<option value="3">3 heures</option>
								<option value="6">6 heures</option>
								<option value="12">12 heures</option>
								<option value="24">1 jours</option>
								<option value="48">2 jours</option>
								<option value="72">3 jours</option>
								<option value="96">4 jours</option>
								<option value="120">5 jours</option>
								<option value="144">6 jours</option>
								<option value="168" label="7j">7 jours</option>
							</select>
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
							<span id="unepage">1</span>
							<input type='range' min="1" max="10" name="nb_pages" value="1" class="slider" id="rangepage" onchange="updateTextInput(this.value);">
							<input type="text" id="textInput" value="">
							<span id="dixpage">10</span>
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
		function updateTextInput(val) {
          document.getElementById('textInput').value=val; 
        }
		$(document).ready(function() {
			$('input[name="droit"]').click(function() {
				if ($(this).attr('id') == "potes") {
					$("#choixpotes").show('slow');
				} else {
					$("#choixpotes").hide('slow');
				}		
			});
		});

		// POUR LE CHOIX DES PARTICIPANTS
		$(document).ready(function() {
			$(function() {
				$("#searchbaruser").on('input', function() {
					$("#searchbaruser").autocomplete({
						source: '../controles/autocompleteUser.php?term='+$("#searchbaruser").val()
					});
				});
			});
		});

		$('#ajouter').click(function () {
			//Récupère valeur input search
			var inputvaleur = $("#searchbaruser").val();
			var txtlist = document.createTextNode(inputvaleur);

			// Création du LABEL
			var label = document.createElement("LABEL");
			label.setAttribute("for", "checkboxNodeList");
			label.className = "nodelist";
			label.appendChild(txtlist);

			// Le Bouton close source w3schools
			var span = document.createElement("SPAN");
			var txt = document.createTextNode("\u00D7");
			span.className = "close";
			span.appendChild(txt);
			label.appendChild(span);

			// Création du INPUT
			var checkbox = document.createElement("INPUT");
			checkbox.setAttribute("type", "checkbox");
			checkbox.setAttribute("name", "checkboxNodeList[]");
			checkbox.setAttribute("value", inputvaleur);
			checkbox.setAttribute("checked", true);
			checkbox.className = "hidden";
			label.appendChild(checkbox);
			
			$(".checkbox").append(label);			
			
			// Enlève le choix au click de la croix
			var close = document.getElementsByClassName("close");
			var i;
			for (i = 0; i < close.length; i++) {
			  close[i].onclick = function() {
			    var div = this.parentElement;
			    div.style.display = "none";
			  }
			}
		});
	</script>
</body>
<html>