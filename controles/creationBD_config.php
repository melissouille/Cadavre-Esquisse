<?php
	session_start();
include 'bddconnect.php';
include 'functions.php';
include 'lang_config.php';
//STOCKER LES ERREURS :
	$er = 0;
	$message = "";

	if (isset($_POST['valider'])) {

		// LES VARIABLES AUTOMATIQUES
		$id_user = $_SESSION['id'];
		$id_bd = rand();
		// boolean aléatoire = couverture1 ou couverture2
		$hasardcouverture = rand(1,2);
		switch ($hasardcouverture) {
			case 1:
				$couverture = "http://localhost/cadavre_esquisse/img/cde-apercubd-type.jpg";
				break;
			case 2:
				$couverture = "";
				break;
		}
		$date_creation = date('Y-m-d');
		$etat = 'encours';

		// Création de la page de la bande dessinée //
		$url = "www.cadavreesquisse.com/".$titre."";
		

		// LES VARIABLES SAISIES
		$titre = secureVar($_POST['titre']);
		$pages = secureVar($_POST['nb_pages']);
		$temps = secureVar($_POST['temps']);
		$droits = secureVar($_POST['droit']);

		

	// LES TESTS
		if (empty($titre) || !isset($titre)) {
			$message = _ERREUR_TITREVIDE;
			$er++;
		}

		if (empty($droits) || !isset($droits)) {
			$message = _ERREUR_ETATVIDE;
			$er++;
		} 
		elseif ($droits == "pote") {

			if (isset($_POST['checkboxNodeList'])) {

				include 'verifications/participants.php';

			} else {
				$nbparticipant = 1;
			}
		} 

		if (!isset($pages)) {
			$message = _ERREUR_NBPAGEVIDE;
			$er++;
		}
		if (!isset($temps)) {
			$message = _ERREUR_TEMPSVIDE;
			$er++;
		} else {
			$pages = $_POST['nb_pages'];
		}
 
		// BASE DE DONNEES
		if ($er == 0) {
			$sql = "
			INSERT INTO bandesdessinees (id, title, droits, id_user, url, couverture, etat, date_creation, pages, temps_real, participants)
			VALUES (:id_bd, :titre, :droits, :id_user, :url, :couverture, :etat, :date_creation, :pages, :temps, :nbparticipants)";

			// Création entrée dans table bandesdessinees //
			$req=$bdd->prepare($sql);

			$req->bindParam(':id_bd', $id_bd);
			$req->bindParam(':titre', $titre);
			$req->bindParam(':droits', $droits);
			$req->bindParam(':id_user', $id_user);
			$req->bindParam(':url', $url);
			$req->bindParam(':couverture', $couverture);
			$req->bindParam(':etat', $etat);
			$req->bindParam(':date_creation', $date_creation);
			$req->bindParam(':pages', $pages);
			$req->bindParam(':temps', $temps);
			$req->bindParam(':nbparticipants', $nbparticipants);

			$req->execute();
			$message = "Temps de " .$temps. "<br>
						Pages = " .$pages;

			// Pour la table d'association //	
			$sqlassoc = "INSERT INTO assoc_bd_user(id_bd,id_user) VALUES (:id_bd, :id_user)";
			$reqassoc=$bdd->prepare($sqlassoc);
			$reqassoc->bindParam(':id_bd', $id_bd);
			$reqassoc->bindParam(':id_user', $id_user);
			$reqassoc->execute();

			$reqassoc->closeCursor();

			$req->closeCursor();			
		}
		echo $message;
	}
?>