<button type="button" class="bouton_formes">
	<img class="icone" src="../img/choix-formes.png" alt="Choix formes" title="Choisir formes" width="40px" />
</button>

<div id="formes-modal" style="display: none">
	<fieldset>
		<legend>Choisissez la forme de votre case :</legend>
		<form class="templates">
	  	<label for="template_1" class="verticalalign">
	  		<img class="template" src="../img/templates/template1.jpg" height="60%">
	  		<input type='radio' id="template_1" class="hidden"/>
	  	</label>
	    <label for="template_2" class="verticalalign">
	    	<img class="template" src="../img/templates/template2.jpg" height="60%">
	    	<input type='radio' id="template_2" class="hidden"/>
	    </label>
	    <label for="template_3" class="verticalalign">
	    	<img class="template" src="../img/templates/template3.jpg" height="60%">
	    	<input type='radio' id="template_3" class="hidden"/>
	    </label>
	    <label for="template_4" class="verticalalign">
	    	<img class="template" src="../img/templates/template4.jpg" height="60%">
	    	<input type='radio' id="template_4" class="hidden"/>
	    </label>
	    <label for="template_5">
	    	<img class="template" src="../img/templates/template5.jpg" height="90%">
	    	<input type='radio' id="template_5" class="hidden" />
	    </label>
	  </form>
	</fieldset>
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
</script>

