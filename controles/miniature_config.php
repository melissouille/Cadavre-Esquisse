<?php
$sqlBD = "SELECT id, title, droits, participants, couverture, url, etat FROM bandesdessinees WHERE etat=:etatBD AND droits!='privee' LIMIT 6";
$sqlCase = "SELECT etatC FROM cases WHERE id_bd =:id_bd";

$reqBD=$bdd->prepare($sqlBD);
$reqBD->bindParam(":etatBD", $etatBD);
$reqBD->execute();
while ($data=$reqBD->fetch()) {
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
			$reqCase=$bdd->prepare($sqlCase);
			$reqCase->bindParam(":id_bd", $id_bd);
			$reqCase->execute();
			$dataCase=$reqCase->fetch();
			$etatC = $dataCase['etatC'];
			// quand la premiere case est remplie
			if ($etatC != 'termine') {
				include 'includes/miniatureBD.php';
			}
			$reqCase->closeCursor();
		}
	}
}
$reqBD->closeCursor();
?>