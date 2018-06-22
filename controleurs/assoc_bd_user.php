<?php
	$reqassoc=$bdd->prepare($sqlassoc);
	$reqassoc->bindParam(':id_bd', $id_bd);
	$reqassoc->bindParam(':id_user', $id_user);
	$reqassoc->execute();
	$reqassoc->closeCursor();
?>