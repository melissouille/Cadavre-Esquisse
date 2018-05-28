<?php
	include 'bddconnect.php';
	$id_user = $_SESSION['id'];

	//Requète SQL
	$sqlAssoc = "
		SELECT id_bd FROM assoc_bd_user 
		WHERE id_user=:id_user";
	$sqlBD = "
		SELECT * FROM bandesdessinees
		WHERE id = :id_bd";
	$sqlCase = "SELECT etatC FROM cases WHERE id_bd =:id_bd";

	$reqAssoc=$bdd->prepare($sqlAssoc);
	$reqAssoc->bindParam(':id_user', $id_user);
	$reqAssoc->execute();

	while ($dataAssoc=$reqAssoc->fetch()) {
		$id_bd = $dataAssoc['id_bd'];
		$reqBD=$bdd->prepare($sqlBD);
		$reqBD->bindParam(':id_bd', $id_bd);
		$reqBD->execute();

		while ($dataBD = $reqBD->fetch()) {
			$titre = $dataBD['title'];
			$droits = $dataBD['droits'];
			$participants = $dataBD['participants'];
			$couverture = $dataBD['couverture'];
			$url = $dataBD['url'];
			$id_bd = $dataBD['id'];
			$etatBD = $dataBD['etat'];

			if ($etatBD == 'terminee') {
				$etatC= '';
				include 'includes/miniatureBD.php';
			} 
			elseif ($etatBD == 'encours') {
				$reqCase=$bdd->prepare($sqlCase);
				$reqCase->bindParam(":id_bd", $id_bd);
				$reqCase->execute();
				$dataCase=$reqCase->fetch();
				$etatC = $dataCase['etatC'];
				include 'includes/miniatureBD.php';
				if ($etatC != 'termine') {
					include 'includes/miniatureBD.php';
				}
				$reqCase->closeCursor();
		}
		}
		$reqBD->closeCursor();
	}
	$reqAssoc->closeCursor();
	
?>