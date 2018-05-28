<label for="checkboxPote">
	<div>
		<img class="avatar" src="<?php echo $avatar; ?>"></img>
		<h4 class="nom"><?php echo $nom; ?></h4>
		<?php 
		if ($cases != 0) {
			?>
			<p class="cases"><?php echo $cases; ?> cases</p>
			<?php
		}
		?>
	</div>
	<input type="checkbox" name="participants" value="<?php echo $id_participants; ?>" class="hidden" checked>
	<span class="close">&times;</span>
</label>
<script type="text/javascript">
	/*
	Si déselectionné
	if (input[name='participants']:uncheck) {
		alors la valeur nulle
		input[name='participants'].attr('value') = "";
	}
	*/
</script>