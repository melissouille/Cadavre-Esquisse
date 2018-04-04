<?php
	include ("../../controles/fonctions_reservation.php");
?>

<div id="case_reservee">
	<p>Case réservée par <span class="pseudo"></span></p>
	<p class="deadline">Temps restant : <span class="temps_restant"></span></p>
</div>

<div id="case_reservation">
	<button type="button" name="reservation" value="reserver">Réserver cette case</button>
</div>

<div id="case_annulation_resa">
	<button type="button" name="reservation" value="annuler">Annuler réservation et libérer la case</button>
</div>