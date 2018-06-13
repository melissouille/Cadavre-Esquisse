<?php

	$sql = "
		INSERT INTO bandesdessinees (id, title, droits, id_user, url, couverture, etat, date_creation, pages, temps_real, participants)
		VALUES (:id_bd, :titre, :droits, :id_user, :url, :couverture, :etat, :date_creation, :pages, :temps, :participant)";

	// Création entrée dans table bandesdessinees //
	$req=$bdd->prepare($sql);

	$req->bindParam(':id_bd', $id_bd);
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

		$sqluser = "SELECT id, bd_cree FROM utilisateurs WHERE id = :id_user";
		$requser=$bdd->prepare($sqluser);
		$requser->bindParam(':id_user', $id_user);
		$requser->execute();

			$data = $requser->fetch();
			$bd_cree_bdd = $data['bd_cree'];

			$bd_cree = $bd_cree_bdd + 1;

			$sqlupdate = "UPDATE utilisateurs SET bd_cree = :bd_cree WHERE id = :id_user";
			$requpdate=$bdd->prepare($sqlupdate);
			$requpdate->bindParam(':id_user', $id_user);
			$requpdate->bindParam(':bd_cree', $bd_cree);
			$requpdate->execute();
			$requpdate->closeCursor();

		$requser->closeCursor();


	$req->closeCursor();
?>