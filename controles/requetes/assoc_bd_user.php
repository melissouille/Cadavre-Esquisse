<?php
	$sqlassoc = "INSERT INTO assoc_bd_user(id_bd,id_user) VALUES (:id_bd, :id_user)";
	$reqassoc=$bdd->prepare($sqlassoc);
	$reqassoc->bindParam(':id_bd', $id_bd);
	$reqassoc->bindParam(':id_user', $id_user);
	$reqassoc->execute();
	$reqassoc->closeCursor();
?>