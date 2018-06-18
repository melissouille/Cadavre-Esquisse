<div class="choix">
	<label for="potes">
		<h4 class="potes"><?php echo _ENTREPOTES ;?></h4>
		<p>
			<?php echo _EXP_ENTREPOTES ;?>
			<br>
			<span class="visibilite">
				<?php echo _VISIBLE_TOUS ;?>
			</span>
		</p>
	</label>
	<input type="radio" name="droit" value="potes" id="potes" />
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