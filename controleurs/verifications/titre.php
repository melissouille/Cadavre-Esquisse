<?php
	$sql = "SELECT COUNT(*) AS nbr FROM bandesdessinees WHERE title =:titre";

	$requete = $bdd->prepare($sql);
	$requete->bindParam(':titre',$titre);
	$requete->execute();

	$titre_libre=($requete->fetchColumn()==0)?1:0;

	$requete->closeCursor();

	// Si le titre est déjà présent dans la base
	if (!$titre_libre) {
		$message = _ERREUR_TITREPRIT;
		$er++;
	}