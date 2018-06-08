<?php
	include 'includes/general_includes.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter participant</title>
	<?php include 'includes/head.html';?>
</head>
<body>
	<div id="main">
	<!-- Menu -->
	<div id="menu">
		<?php include("includes/menu.php");?>
	</div>

	<div id="container" class="ajoutparticipant">
		<!--
		<form method="POST" id="participantForm">
				<label for="searchbaruser">
					<h4><span class="numero">*</span><?php echo _LABEL_POTES ;?></h4>
							<p><?php echo _SPAN_POTES ;?></p>
				</label>
				<br>
				<input type="search" name="rechercheUser" id="searchbaruser" class="nameuser" autocomplete="off" placeholder="<?php echo _CHAMP_RECHERCHE ;?>">
				<br>
				<button type="button" name="ajouter" value="ajouter" id="ajouter">Ajouter</button>
				<br>
				<div class="checkbox">
				</div>

				<div class="valider">
					<h2 class="titres"><?php echo _LABEL_VALIDER ;?></h2>
					<button type="submit" name="valider" formaction="../controles/choixparticipants.php" form="participantForm">
						<?php echo _VALIDER_ET_COMMENCER ;?>
					</button>
				</div>
		</form>
	-->
	</div>

	<!-- Pied de page -->
	<div id="footer">
		<?php include ("includes/footer.php");?>
	</div>
	</div>

	<script>
		/* POUR LE CHOIX DES PARTICIPANTS
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
	*/
	</script>
</body>
</html>