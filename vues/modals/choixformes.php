<button type="button" class="bouton_formes" onclick="loadDoc()">
	<img class="icone" src="../img/choix-formes.png" alt="Choix formes" title="Choisir formes" width="40px" />
</button>

<div id="formes-modal" style="display: none">
</div>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("formes-modal").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ajax.php", true);
  xhttp.send();
}
/*	$('.bouton_formes').click(function() {
		$("#formes-modal").toggle('slow');
	});
	$('.close').click(function() {
		$("#formes-modal").hide('slow');
	});
*/
	$(function() {
		$('.template').css('border', '5px white solid');
		$('.template').click(function() {
			$('.template').css('border','5px white solid');
			$(this).css('border','5px #3e5164 solid');
			// Récupère l'id des radio qui sont les src
			var src = $(this).attr('src');
			var id = $(this).attr('id');
			var alt = $(this).attr('class');
			// Modifier img apercu
			$(".apercu").attr({
				src: src,
				id: id,
				alt: alt});
			$("#telecharger_template").attr({
				href: src,
				download: id});
		});
	});

</script>

