<label class="consignes"><?php echo _LABEL_DROIT ;?></label>
<div class="choix">
	<label for="potes">
		<h4><?php echo _ENTREPOTES ;?></h4>
		<p><?php echo _EXP_ENTREPOTES ;?><br>
			<span class="visibilite">
				<?php echo _VISIBLE_TOUS ;?>
			</span>
		</p>
	</label>
	<input type="radio" name="droit" value="Entre pote" id="potes" />
	<div class="choixpotes">
	<label for="potes"><?php echo _LABEL_POTES ;?></label>
	<span class="consignes">
		<?php echo _SPAN_POTES ;?>
	</span>
	<input type="text" name="potes" id="potes" value="<?php echo _CHAMP_RECHERCHE ;?>" /><br>
	<div class="checkbox">
		<input type="checkbox" name="potes" value="">
		<label>
			<span class="avatar"></span>
			<span class="nom"></span>
			<span class="cases"></span>
		</label>
	</div>
</div>
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
	<input type="radio" name="droit" value="Ouverte à tous" id="tous" />
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
	<input type="radio" name="droit" value="Privée" id="privee" />
</div>
<!-- Masquer la div par défaut
<?php $choixpotes /* = "style='display:none'"; */?> -->
