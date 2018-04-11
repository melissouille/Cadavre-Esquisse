<p class="consignes">1- <?php echo _CHOIX_ETAT ;?></p>
<div class="choix">
	<label for="potes">
		<h4><?php echo _ENTREPOTES ;?></h4>
		<p><?php echo _EXP_ENTREPOTES ;?><br>
			<span class="visibilite">
				<?php echo _VISIBLE_TOUS ;?>
			</span>
		</p>
	</label>
	<input type="radio" name="etat" value="entre-potes" id="potes" />
</div>
<div class="choix">
	<label for="tous">
		<h4><?php echo _OUVERTE ;?></h4>
		<p>
			<?php echo _EXP_OUVERTE ;?><br>
			<span class="visibilite">
				<?php echo _VISIBLE_TOUS ;?>
			</span>
		</p>
	</label>
	<input type="radio" name="etat" value="ouverte-tous" id="tous" />
</div>
<div class="choix">
	<label for="privee">
		<h4><?php echo _PRIVEE ;?></h4>
		<p>
			<?php echo _EXP_PRIVEE ;?>
			<span class="visibilite">
				<?php echo _VISIBLE_PARTICIPANT ;?>
			</span>
		</p>
	</label>
	<input type="radio" name="etat" value="privee" id="privee" />
</div>