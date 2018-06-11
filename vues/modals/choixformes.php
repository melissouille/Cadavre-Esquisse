<button type="button" class="bouton_formes">
	<img class="icone" src="../img/choix-formes.png" alt="Choix formes" title="Choisir formes" width="40px" />
</button>

<div id="formes-modal" style="display: none">
  <form class="templates">
  	<label>
  		<img class="template" src="" width="273px" height="421px">
  		<input type='radio' id="template_1" class="hidden"/>
  	</label>
    <label>
    	<img class="template" src="" width="421px" height="421px">
    	<input type='radio' id="template_2" class="hidden"/>
    </label>
    <label>
    	<img class="template" src="">
    	<input type='radio' id="template_3" class="hidden"/>
    </label>
    <label>
    	<img class="template" src="" width="546px" height="421px">
    	<input type='radio' id="template_4" class="hidden"/>
    </label>
    <label>
    	<img class="template" src="">
    	<input type='radio' id="template_5" class="hidden" />
    </label>
  </form>
</div>
<script>
	
		$('.bouton_formes').click(function() {
			$("#formes-modal").toggle('slow');
		});	
</script>

