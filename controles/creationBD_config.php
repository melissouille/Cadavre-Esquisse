<?php
	session_start();
include 'bddconnect.php';
include 'functions.php';
include 'lang_config.php';
//Stocker nombre d'erreur :
	$er=0;

	if (isset($_POST['submit'])) {
		/* les variables saisies */
		$titre = secureVar($_POST['titre']);
		$pages = secureVar($_POST['nb_pages']);
		$temps = secureVar($_POST['temps']);
		$droits = secureVar($_POST['droit']);

		/* les variables automatiques */
		$date_creation = date('Y-m-d');
		// état en cours par défaut à la création
		$etat = 'encours';
		$id_user = $_SESSION['id'];
		$url = "www.cadavreesquisse.com/".$titre."";

		/* les tests */
		if (empty($titre) || !isset($titre)) {
			$message = _ERREUR_TITREVIDE;
			$er++;
		}
		if (empty($droits) || !isset($droits)) {
			$message = _ERREUR_ETATVIDE;
			$er++;
		}
		if (!isset($pages)) {
			$message = _ERREUR_NBPAGEVIDE;
			$er++;
		}
		if (!isset($temps)) {
			$message = _ERREUR_TEMPSVIDE;
			$er++;
		}

		if ($er == 0) {
			$query = "INSERT INTO bandesdessinees (title, droits, id_user, etat, date_creation, pages, temps_real, url) VALUES (:titre, :droits, :id_user, :etat, :date_creation, :pages, :temps, :url)";
			$requete=$bdd->prepare($query);

			$requete->bindParam(':titre', $titre);
			$requete->bindParam(':droits', $droits);
			$requete->bindParam(':id_user', $id_user);
			$requete->bindParam(':url', $url);
			// $requete->bindParam(':couverture', $couverture);
			$requete->bindParam(':etat', $etat);
			$requete->bindParam(':date_creation', $date_creation);
			$requete->bindParam(':pages', $pages);
			$requete->bindParam(':temps', $temps);

			$requete->execute();
			$requete->closeCursor();
			$message = _BDENREGISTREE;
		}
		echo $message;
	}
?>