<label for="searchbaruser">
	<h4><span class="numero">*</span><?php echo _LABEL_POTES ;?></h4>
	<p><?php echo _SPAN_POTES ;?></p>
</label>
<br>
<input type="search" name="rechercheUser" id="searchbaruser" class="nameuser" autocomplete="off" placeholder="<?php echo _CHAMP_RECHERCHE ;?>">
<button type="button" name="ajouter" value="ajouter" id="ajouter">Ajouter</button>
<br>
<ul class="checkbox">
</ul>
<script>
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
		var valeur = $("#searchbaruser").val();
		// Création du label
		var liste = $("<li></li>").text(valeur);		
		$(".checkbox").append(liste);

		// Le Bouton close source w3schools
		var myNodelist = document.getElementsByTagName("LI");
		var i;
		for (i = 0; i < myNodelist.length; i++) {
		  var span = document.createElement("SPAN");
		  var txt = document.createTextNode("\u00D7");
		  span.className = "close";
		  span.appendChild(txt);
		  myNodelist[i].appendChild(span);
		}
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