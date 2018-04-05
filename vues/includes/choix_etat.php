<p class="consignes">Vous devez choisir l'état de votre bd</p>
<div class="choix">
	<label for="potes">
		<h4>Entre potes</h4>
		<p>Vous seul pouvez choisir qui participera à votre Bd. Idéal pour un délire entre amis.<br>
			<span class="visibilite">Visible par tous !</span>
		</p>
	</label>
	<input type="radio" name="etat" value="entre-potes" id="potes" />
</div>
<div class="choix">
	<label for="tous">
		<h4>Ouverte à tous</h4>
		<p>
			Tout le monde peut participer à votre bd. N'essayez pas d'avoir le contrôle et laissez vous surprendre.<br>
			<span class="visibilite">Visible par tous !</span>
		</p>
	</label>
	<input type="radio" name="etat" value="ouverte-tous" id="tous" />
</div>
<div class="choix">
	<label for="privee">
		<h4>Privées</h4>
		<p>
			Seulement vous et vos amis pouvez accéder à votre bd. Pour laisser notre par d'ombre s'exprimer.
			<span class="visibilite">Visible uniquement pour les participants !</span>
		</p>
	</label>
	<input type="radio" name="etat" value="privee" id="privee" />
</div>