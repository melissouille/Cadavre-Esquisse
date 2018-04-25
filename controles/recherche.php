<?php
include 'functions.php';

$message = "";
$resultat = "";

if (isset($_POST['rechercher']) && !empty($_POST['recherche'])) {

	$term = secureVar($_POST['recherche']);

	$queryBD = "SELECT id, etat, droits FROM bandesdessinees WHERE title LIKE :term AND droits!='privee' GROUP BY id";
	$queryUser = "SELECT * FROM utilisateurs WHERE name LIKE :term";
	$queryCase = "SELECT etatC FROM cases WHERE id_bd =:id_bd";
	// inner join pour tables relationnelle

	// Pour les bd
	$requeteBD = $bdd->prepare($queryBD);
	$requeteBD->execute(array('term' => '%'.$term.'%'));

	while ($donnees = $requeteBD->fetch()) {
		// Récupération données à comparer
		$droits = $donnees['droits'];
		$etatBD = $donnees['etat'];
		$id_bd = $donnees['id'];

		if (isset($_POST['checkbox']) && !empty($_POST['checkbox'])) {
			$checkbox = $_POST['checkbox'];
			$queryBD = "SELECT DISTINCT id, title, droits, participants, couverture, url, etat FROM bandesdessinees WHERE etat=:checkbox OR droits=:checkbox GROUP BY id HAVING id=:id_bd";
			$reqBD = $bdd->prepare($queryBD);
			$reqBD->bindParam(":checkbox", $checkbox);
			$reqBD->bindParam(":id_bd", $id_bd);
			$reqBD->execute();

			// compte résultats
			if ($reqBD->rowCount() != 0) {
				$resultatBD = $reqBD->rowCount(). ' resultat <br>';

				while ($donnees = $reqBD->fetch()) {
					$titre = $donnees['title'];
					$participants = $donnees['participants'];
					$couverture = $donnees['couverture'];
					$url = $donnees['url'];
					$droits = $donnees['droits'];
					$etatBD = $donnees['etat'];

					// pour les fanions
					$id_bd = $donnees['id'];
					$reqCase=$bdd->prepare($queryCase);
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
			$reqBD->closeCursor();
		}
				
		// Affiche tous les résultats
		elseif (!isset($_POST['checkbox'])) {
			$queryBD = "SELECT DISTINCT id, title, droits, participants, couverture, url, etat FROM bandesdessinees WHERE id=:id_bd AND droits!='privee' GROUP BY id";
			$reqBD = $bdd->prepare($queryBD);
			$reqBD->bindParam(':id_bd', $id_bd);
			$reqBD->execute();

			if ($reqBD->rowCount() != 0) {
				$resultatBD = $reqBD->rowCount(). ' resultat <br>';
				while ($donnees = $reqBD->fetch()) {
					$titre = $donnees['title'];
					$participants = $donnees['participants'];
					$couverture = $donnees['couverture'];
					$url = $donnees['url'];
					$droits = $donnees['droits'];
					$etatBD = $donnees['etat'];

					// pour les fanions
					$id_bd = $donnees['id'];
					$reqCase=$bdd->prepare($queryCase);
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
			$reqBD->closeCursor();
		}		
	}
	$requeteBD->closeCursor();

	// Pour les user
	$requeteUser = $bdd->prepare($queryUser);
	$requeteUser->execute(array('term' => '%'.$term.'%'));

	while ($donnees = $requeteUser->fetch()) {
		$user = $donnees['name'];
		$participations = $donnees['bd_join'];
		$cases = $donnees['case_cree'];
		$avatar = $donnees['avatar'];
		$url_user = $donnees['url'];

		include 'includes/miniatureUser.php';
	}
	$requeteUser->closeCursor();

} else {
	$resultat = "champs recherche vide";
}
?>