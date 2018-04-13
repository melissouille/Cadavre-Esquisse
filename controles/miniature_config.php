<?php 
$requete=$bdd->prepare("SELECT id, titre, droits, nb_participant, couverture, url FROM bandesdessinees WHERE etat=:etat");
$requete->bindValue(":etat", $etat, PDO::PARAM_STR);
$requete->execute();
while ($donnees=$requete->fetch()) {
	$titre = $donnees['titre'];
	$droits = $donnees['droits'];
	$participants = $donnees['nb_participant'];
	$couverture = $donnees['couverture'];
	$url = $donnees['url'];
	$id_bd = $donnees['id'];

	if ($droits != 'Privée') {
		if ($etat = 'encours') {
			$query=$bdd->prepare("SELECT etatC FROM cases WHERE id_bd =:id_bd");
			$query->bindValue(":id_bd", $id_bd, PDO::PARAM_STR);
			$query->execute();
			$data=$query->fetch();
			$etatC = $data['etatC'];
			$query->closeCursor();
		}
		include 'includes/miniatureBD.php';
	}
}
$requete->closeCursor();
?>