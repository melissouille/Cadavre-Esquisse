<?php
include 'functions.php';
include '../modeles/query.php';

$message = "";
$resultat = "";

if (isset($_POST['rechercher']) && !empty($_POST['recherche'])) {

	$term = secureVar($_POST['recherche']);

	// Pour les bd
	$requeteBD = $bdd->prepare($sqlBDexplorer);
	$requeteBD->execute(array('term' => '%'.$term.'%'));

	while ($data = $requeteBD->fetch()) {
		// Récupération données à comparer
		$droits = $data['droits'];
		$etatBD = $data['etat'];
		$id_bd = $data['id'];

		if (isset($_POST['checkbox']) && !empty($_POST['checkbox'])) {

			$checkbox = $_POST['checkbox'];
			$requeteCheckbox = $bdd->prepare($sqlBDcheckbox);
			$requeteCheckbox->bindParam(":checkbox", $checkbox);
			$requeteCheckbox->bindParam(":id_bd", $id_bd);
			$requeteCheckbox->execute();

			// compte résultats
			if ($requeteCheckbox->rowCount() != 0) {
				$resultatBD = $requeteCheckbox->rowCount(). ' resultat <br>';

				while ($data = $requeteCheckbox->fetch()) {
					$titre = $data['title'];
					$participants = $data['participants'];
					$couverture = $data['couverture'];
					$url = $data['url'];
					$droits = $data['droits'];
					$etatBD = $data['etat'];

					// pour les fanions
					$id_bd = $data['id'];
					$requeteCase=$bdd->prepare($sqlCase);
					$requeteCase->bindParam(":id_bd", $id_bd);
					$requeteCase->execute();
					$cases=$requeteCase->fetch();
					$etatC = $cases['etatC'];
					include 'includes/miniatureBD.php';
					$requeteCase->closeCursor();
				}
			} else {
				$message = _MSG_AUCUNRESULTAT;
			}
			$requeteCheckbox->closeCursor();
		}
				
		// Affiche tous les résultats
		elseif (!isset($_POST['checkbox'])) {
			
			$requeteBD2 = $bdd->prepare($sqlBDnoCheckbox);
			$requeteBD2->bindParam(':id_bd', $id_bd);
			$requeteBD2->execute();

			if ($requeteBD2->rowCount() != 0) {
				$resultatBD = $requeteBD2->rowCount(). ' resultat <br>';
				while ($data = $requeteBD2->fetch()) {
					$titre = $data['title'];
					$participants = $data['participants'];
					$couverture = $data['couverture'];
					$url = $data['url'];
					$droits = $data['droits'];
					$etatBD = $data['etat'];

					// pour les fanions
					$id_bd = $data['id'];
					$requeteCase=$bdd->prepare($sqlCase);
					$requeteCase->bindParam(":id_bd", $id_bd);
					$requeteCase->execute();
					$cases=$requeteCase->fetch();
					$etatC = $cases['etatC'];

					include 'includes/miniatureBD.php';

					$requeteCase->closeCursor();
				}
			} else {
				$message = _MSG_AUCUNRESULTAT;
			}
			$requeteBD2->closeCursor();
		}		
	}
	$requeteBD->closeCursor();

	// Pour les user
	$requeteUser = $bdd->prepare($sqlUser);
	$requeteUser->execute(array('term' => '%'.$term.'%'));

	while ($data = $requeteUser->fetch()) {
		$user = $data['name'];
		$participations = $data['bd_join'];
		$cases = $data['case_cree'];
		$avatar = $data['avatar'];
		$url_user = $data['url'];

		include 'includes/miniatureUser.php';
	}
	$requeteUser->closeCursor();} else {
	$resultat = _CHAMPS_RECHERCHE_VIDE;
}