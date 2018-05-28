<?php
include 'functions.php';
$message = "";
$resultat = "";
$id_login = $_SESSION['id'];


if (isset($_POST['rechercher']) && !empty($_POST['recherche'])) {

	$term = secureVar($_POST['recherche']);

	$sqlSelect = "
		SELECT id
		FROM bandesdessinees
		WHERE title LIKE :term
			/* seulement les bd ouverte à tous*/
			AND droits='tous'
			/*seulement les bd encours*/
			AND etat='encours'
			/*ne prend pas en compte les bd crée par l'utilisateur*/
			AND id_user!=:id_login
		GROUP BY id";
	$sqlCase = "SELECT etatC FROM cases WHERE id_bd =:id_bd";
	$queryBD = "
		SELECT DISTINCT id, title, droits, participants, couverture, url, etat 
		FROM bandesdessinees 
		WHERE id=:id_bd 
			AND droits='tous'
			AND etat='encours'
		GROUP BY id";

	// Pour les bd
	$reqBD = $bdd->prepare($sqlSelect);
	$reqBD->execute(array(
		'term' => '%'.$term.'%',
		'id_login' => $id_login
	));

	while ($data = $reqBD->fetch()) {
		// Récupération données à comparer
		$id_bd = $data['id'];

		if (isset($_POST['checkbox']) && !empty($_POST['checkbox'])) {
			$checkbox = $_POST['checkbox'];

		}
				
		// Affiche tous les résultats
		elseif (!isset($_POST['checkbox'])) {
			$queryBD = "SELECT DISTINCT id, title, droits, participants, couverture, url, etat FROM bandesdessinees WHERE id=:id_bd AND droits='tous' GROUP BY id";
			$reqBDsansfiltre = $bdd->prepare($queryBD);
			$reqBDsansfiltre->bindParam(':id_bd', $id_bd);
			$reqBDsansfiltre->execute();

			if ($reqBD->rowCount() != 0) {
				$resultatBD = $reqBDsansfiltre->rowCount(). ' resultat <br>';
				while ($donnees = $reqBDsansfiltre->fetch()) {
					$titre = $donnees['title'];
					$participants = $donnees['participants'];
					$couverture = $donnees['couverture'];
					$url = $donnees['url'];
					$droits = $donnees['droits'];
					$etatBD = $donnees['etat'];

					// pour les fanions
					$id_bd = $donnees['id'];
					$reqCase=$bdd->prepare($sqlCase);
					$reqCase->bindParam(":id_bd", $id_bd);
					$reqCase->execute();
					$cases=$reqCase->fetch();
					$etatC = $cases['etatC'];

					include 'includes/miniatureBD.php';

					$reqCase->closeCursor();
				}
			} else {
				$message = _MSG_AUCUNRESULTAT;
			}
			$reqBDsansfiltre->closeCursor();
		}		
	}
	$reqBD->closeCursor();
}
else {
	$resultat = "champs recherche vide";
}
?>