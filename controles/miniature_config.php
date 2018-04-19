<?php
// $etatBD ok
$requeteBD=$bdd->prepare("SELECT id, title, droits, participants, couverture, url, etat FROM bandesdessinees WHERE etat=:etatBD");
$requeteBD->bindValue(":etatBD", $etatBD, PDO::PARAM_STR);
$requeteBD->execute();
while ($donnees=$requeteBD->fetch()) {
	$titre = $donnees['title'];
	$droits = $donnees['droits'];
	$participants = $donnees['participants'];
	$couverture = $donnees['couverture'];
	$url = $donnees['url'];
	$id_bd = $donnees['id'];
	$etat = $donnees['etat'];

	if ($droits != 'Privée') {
		if ($etat == 'terminee') {
			$etatC= '';
			include 'includes/miniatureBD.php';
		} elseif ($etat == 'encours') {
			$requeteCase=$bdd->prepare("SELECT etatC FROM cases WHERE id_bd =:id_bd");
			$requeteCase->bindValue(":id_bd", $id_bd, PDO::PARAM_STR);
			$requeteCase->execute();
			$donneesCase=$requeteCase->fetch();
			$etatC = $donneesCase['etatC'];
			include 'includes/miniatureBD.php';
			$requeteCase->closeCursor();
		}
	}
}
$requeteBD->closeCursor();
?>