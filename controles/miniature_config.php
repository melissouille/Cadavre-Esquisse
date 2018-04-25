<?php
$queryBD = "SELECT id, title, droits, participants, couverture, url, etat FROM bandesdessinees WHERE etat=:etatBD AND droits!='privee' LIMIT 6";
$queryCase = "SELECT etatC FROM cases WHERE id_bd =:id_bd";

$requeteBD=$bdd->prepare($queryBD);
$requeteBD->bindParam(":etatBD", $etatBD);
$requeteBD->execute();
while ($donnees=$requeteBD->fetch()) {
	$titre = $donnees['title'];
	$droits = $donnees['droits'];
	$participants = $donnees['participants'];
	$couverture = $donnees['couverture'];
	$url = $donnees['url'];
	$id_bd = $donnees['id'];
	$etat = $donnees['etat'];

	if ($droits != 'privee') {
		if ($etat == 'terminee') {
			$etatC= '';
			include 'includes/miniatureBD.php';
		} elseif ($etat == 'encours') {
			$requeteCase=$bdd->prepare($queryCase);
			$requeteCase->bindParam(":id_bd", $id_bd);
			$requeteCase->execute();
			$donneesCase=$requeteCase->fetch();
			$etatC = $donneesCase['etatC'];
			if ($etatC != 'termine') {
				include 'includes/miniatureBD.php';
			}
			$requeteCase->closeCursor();
		}
	}
}
$requeteBD->closeCursor();
?>