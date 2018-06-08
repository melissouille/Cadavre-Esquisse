<?php
	session_start();

	$sql = "
		INSERT INTO bandesdessinees (title, droits, id_user, url, couverture, etat, date_creation, pages, temps_real, participants)
		VALUES (:titre, :droits, :id_user, :url, :couverture, :etat, :date_creation, :pages, :temps, :participant)";

	// Création entrée dans table bandesdessinees //
	$req=$bdd->prepare($sql);

	$req->bindParam(':titre', $titre);
	$req->bindParam(':droits', $droits);
	$req->bindParam(':id_user', $id_user);
	$req->bindParam(':url', $url);
	$req->bindParam(':couverture', $couverture);
	$req->bindParam(':etat', $etat);
	$req->bindParam(':date_creation', $date_creation);
	$req->bindParam(':pages', $pages);
	$req->bindParam(':temps', $temps);
	$req->bindParam(':participant', $participant);

	$req->execute();				
	$req->closeCursor();
?>