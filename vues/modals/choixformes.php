<button type="button" class="bouton_formes">
	<img class="icone" src="../img/choix-formes.png" alt="Choix formes" title="Choisir formes" width="40px" />
</button>

<div id="formes-modal" style="display: none">
		<h3>Choisissez la forme de votre case :</h3>
		<div class="templates">
	  		<img id="template1.jpg" class="template" src="../img/templates/template1.jpg" value="1"/>
	    	<img id="template2.jpg" class="template" src="../img/templates/template2.jpg" value="2"/>
	    	<img id="template3.jpg" class="template" src="../img/templates/template3.jpg" value="3"/>
	    	<img id="template4.jpg" class="template" src="../img/templates/template4.jpg" value="4"/>
	    	<img id="template5.jpg" class="template" src="../img/templates/template5.jpg" value="5"/>
	  </div>
  <button type="button" class="close">x</button>
  <div class="arrow-up"></div>
</div>

<script>
		$('.bouton_formes').click(function() {
			$("#formes-modal").toggle('slow');
		});
		$('.close').click(function() {
			$("#formes-modal").hide('slow');
		});

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

