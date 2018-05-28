<?php
include 'functions.php';

$message = "";
$resultat = "";

if (isset($_POST['rechercher']) && !empty($_POST['recherche'])) {

	$term = secureVar($_POST['recherche']);

	$sqlBD = "SELECT id, etat, droits FROM bandesdessinees WHERE title LIKE :term AND droits!='privee' GROUP BY id";
	$sqlUser = "SELECT * FROM utilisateurs WHERE name LIKE :term";
	$sqlCase = "SELECT etatC FROM cases WHERE id_bd =:id_bd";

	// Pour les bd
	$reqBD = $bdd->prepare($sqlBD);
	$reqBD->execute(array('term' => '%'.$term.'%'));

	while ($data = $reqBD->fetch()) {
		// Récupération données à comparer
		$droits = $data['droits'];
		$etatBD = $data['etat'];
		$id_bd = $data['id'];

		if (isset($_POST['checkbox']) && !empty($_POST['checkbox'])) {
			$checkbox = $_POST['checkbox'];
			$sqlBD = "SELECT DISTINCT id, title, droits, participants, couverture, url, etat FROM bandesdessinees WHERE etat=:checkbox OR droits=:checkbox GROUP BY id HAVING id=:id_bd";
			$reqBD = $bdd->prepare($sqlBD);
			$reqBD->bindParam(":checkbox", $checkbox);
			$reqBD->bindParam(":id_bd", $id_bd);
			$reqBD->execute();

			// compte résultats
			if ($reqBD->rowCount() != 0) {
				$resultatBD = $reqBD->rowCount(). ' resultat <br>';

				while ($data = $reqBD->fetch()) {
					$titre = $data['title'];
					$participants = $data['participants'];
					$couverture = $data['couverture'];
					$url = $data['url'];
					$droits = $data['droits'];
					$etatBD = $data['etat'];

					// pour les fanions
					$id_bd = $data['id'];
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
			$reqBD->closeCursor();
		}
				
		// Affiche tous les résultats
		elseif (!isset($_POST['checkbox'])) {
			$sqlBD = "SELECT DISTINCT id, title, droits, participants, couverture, url, etat FROM bandesdessinees WHERE id=:id_bd AND droits!='privee' GROUP BY id";
			$reqBD = $bdd->prepare($sqlBD);
			$reqBD->bindParam(':id_bd', $id_bd);
			$reqBD->execute();

			if ($reqBD->rowCount() != 0) {
				$resultatBD = $reqBD->rowCount(). ' resultat <br>';
				while ($data = $reqBD->fetch()) {
					$titre = $data['title'];
					$participants = $data['participants'];
					$couverture = $data['couverture'];
					$url = $data['url'];
					$droits = $data['droits'];
					$etatBD = $data['etat'];

					// pour les fanions
					$id_bd = $data['id'];
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
			$reqBD->closeCursor();
		}		
	}
	$reqBD->closeCursor();

	// Pour les user
	$reqUser = $bdd->prepare($sqlUser);
	$reqUser->execute(array('term' => '%'.$term.'%'));

	while ($data = $reqUser->fetch()) {
		$user = $data['name'];
		$participations = $data['bd_join'];
		$cases = $data['case_cree'];
		$avatar = $data['avatar'];
		$url_user = $data['url'];

		include 'includes/miniatureUser.php';
	}
	$reqUser->closeCursor();

} else {
	$resultat = "champs recherche vide";
}
?>