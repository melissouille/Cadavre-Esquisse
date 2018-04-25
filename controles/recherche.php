<?php
include 'functions.php';

$message = "";

if (isset($_POST['rechercher']) && !empty($_POST['recherche'])) {

	$term = secureVar($_POST['recherche']);

	$queryBD = "SELECT etat, droits FROM bandesdessinees WHERE title LIKE :term AND droits!='privee'";
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

		if (isset($_POST['checkbox']) && !empty($_POST['checkbox'])) {
			$checkbox = $_POST['checkbox'];
			$queryBD = "SELECT id, title, droits, participants, couverture, url, etat FROM bandesdessinees WHERE etat=:checkbox OR droits=:checkbox";
			$reqBD = $bdd->prepare($queryBD);
			$reqBD->bindParam(":checkbox", $checkbox);
			$reqBD->execute();

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

				// compte résultats
				$resultatnb = $reqBD->rowCount();
				if ($resultatnb != 0) {
					echo $resultatnb. ' resultat <br>';
				} else {
					$message = _MSG_AUCUNRESULTAT;
				}
				include 'includes/miniatureBD.php';
				$reqCase->closeCursor();
			}
			$reqBD->closeCursor();			
		}
		// Affiche tous les résultats
		elseif (!isset($_POST['checkbox'])) {
			$queryBD = "SELECT id, title, droits, participants, couverture, url, etat FROM bandesdessinees WHERE droits!='privee'";
			$reqBD = $bdd->prepare($queryBD);
			$reqBD->execute();

			$resultatnb = $reqBD->rowCount();
			if ($resultatnb != 0) {
				echo $resultatnb. ' resultat <br>';
			} else {
				$message = _MSG_AUCUNRESULTAT;
			}
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
			$reqBD->closeCursor();
		}		
	}

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
	echo "champs recherche vide";
}
?>