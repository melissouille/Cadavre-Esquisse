<?php
include 'functions.php';
include '../modeles/query.php';

$message = "";
$resultat = "";
$id_login = $_SESSION['id'];


if (isset($_POST['rechercher']) && !empty($_POST['recherche'])) {

	$term = secureVar($_POST['recherche']);
		
	// Pour les bd
	$requeteBD = $bdd->prepare($sqlSelect);
	$requeteBD->execute(array(
		'term' => '%'.$term.'%',
		'id_login' => $id_login
	));

	while ($data = $requeteBD->fetch()) {
		// Récupération données à comparer
		$id_bd = $data['id'];

		if (isset($_POST['checkbox']) && !empty($_POST['checkbox'])) {
			$checkbox = $_POST['checkbox'];

		}
				
		// Affiche tous les résultats
		elseif (!isset($_POST['checkbox'])) {
			$requeteBDsansfiltre = $bdd->prepare($queryBDparticiper);
			$requeteBDsansfiltre->bindParam(':id_bd', $id_bd);
			$requeteBDsansfiltre->execute();

			if ($requeteBD->rowCount() != 0) {
				$resultatBD = $requeteBDsansfiltre->rowCount(). ' resultat <br>';
				while ($data2 = $requeteBDsansfiltre->fetch()) {
					$titre = $data2['title'];
					$participants = $data2['participants'];
					$couverture = $data2['couverture'];
					$url = $data2['url'];
					$droits = $data2['droits'];
					$etatBD = $data2['etat'];

					// pour les fanions
					$id_bd = $data2['id'];
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
			$requeteBDsansfiltre->closeCursor();
		}		
	}
	$requeteBD->closeCursor();}
else {
	$resultat = _CHAMPS_RECHERCHE_VIDE;
}
?>