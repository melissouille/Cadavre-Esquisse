<?php
include '../modeles/query.php';

$requeteBD=$bdd->prepare($sqlBDminiatures);
$requeteBD->bindParam(":etatBD", $etatBD);
$requeteBD->execute();
while ($data=$requeteBD->fetch()) {
	$titre = $data['title'];
	$droits = $data['droits'];
	$participants = $data['participants'];
	$couverture = $data['couverture'];
	$url = $data['url'];
	$id_bd = $data['id'];
	$etat = $data['etat'];

	if ($droits != 'privee') {
		if ($etat == 'terminee') {
			$etatC= '';
			include 'includes/miniatureBD.php';
		} elseif ($etat == 'encours') {
			$requeteCase=$bdd->prepare($sqlCase);
			$requeteCase->bindParam(":id_bd", $id_bd);
			$requeteCase->execute();
			$dataCase=$requeteCase->fetch();
			$etatC = $dataCase['etatC'];
			// quand la premiere case est remplie
			if ($etatC != 'termine') {
				include 'includes/miniatureBD.php';
			}
			$requeteCase->closeCursor();
		}
	}
}
$requeteBD->closeCursor();
?>