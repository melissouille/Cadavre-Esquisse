<?php
	include 'includes/general_includes.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title><?php echo _PARAM_BD ;?></title>
	<?php include 'includes/head.html' ;?>
</head>
<body>
	<div id="main">
	<!-- Menu -->
	<div id="menu">
		<?php include'includes/menu.php';?>
	</div>

	<div id="container" class="paramBD">
		<h2><?php echo _T_PARAM_BD ;?></h2>
		<div class="entete">
			<p class="italic">Créé le <span>date</span></p>
			<p><span class="italic">Participants : </span><span class="bold">nombre</span></p>
			<p class="bold"><span>nombre</span> pages</p>
			<p class="bold"><span>droits</span></p>
		</div>
		<div class="titre">
			<h3 class="bold"><?php echo _TITRE;?> :</h3>
			<input type="text" name="titre" value="titre" class="titre_bd"/>
		</div>
		<div class="participants">
			<h3><?php echo _CONFIG_PARTICIPANTS ;?> :</h3>
			<input type="search" name="rechercheUser" id="searchbaruser" class="participants" placeholder="<?php echo _CHAMP_RECHERCHE ;?>"/>
			<br>
			<button type="button" name="ajouter" value="ajouter" id="ajouter">Ajouter</button>
			<br>

			<div class="checkbox">
				<!-- ajout des participants de la base de données -->
			</div>
		</div>
						
		<div class="etat">
			<h3><?php echo _CHOIX_ETAT ;?></h3>
			<div id="includechoix">
				<?php include 'includes/choix_etat.php'; ?>
			</div>
		</div>

		<div class="bouton">
			<button type="button" name="valider" value="valider">
				<?php echo _VALIDER ;?>
			</button>
		</div>
		<!-- modifier BDD quand bouton cliqué -->
	</div>

	<!-- Pied de page -->
	<div id="footer">
		<?php include 'includes/footer.php';?>
	</div>
	</div>

	<script>
		/* POUR LE CHOIX DES PARTICIPANTS*/
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
		});
		// Enlève le choix au click de la croix
		var close = document.getElementsByClassName("close");
		var i;
		for (i = 0; i < close.length; i++) {
			close[i].onclick = function() {
				var div = this.parentElement;
				div.style.display = "none";
			}
		}
	</script>
</body>
<html>