<?php
	session_start();
include 'bddconnect.php';
include 'functions.php';
include 'lang_config.php';
//Stocker nombre d'erreur :
	$er=0;
	// boolean aléatoire = couverture1 ou couverture2
	if (isset($_POST['valider'])) {
		/* les variables saisies */
		$titre = secureVar($_POST['titre']);
		$pages = secureVar($_POST['nb_pages']);
		$temps = secureVar($_POST['temps']);
		$droits = secureVar($_POST['droit']);

		/* les variables automatiques */
		$date_creation = date('Y-m-d');
		// état en cours par défaut à la création
		$etat = 'encours';
		// couverture par défaut :
		$couverture = "http://localhost/cadavre_esquisse/img/cde-apercubd-type.jpg";
		
		$id_user = $_SESSION['id'];
		$url = "www.cadavreesquisse.com/".$titre."";
		$participants = 1;

		/* les tests */
		if (empty($titre) || !isset($titre)) {
			$message = _ERREUR_TITREVIDE;
			$er++;
		}
		if (empty($droits) || !isset($droits)) {
			$message = _ERREUR_ETATVIDE;
			$er++;
		} elseif ($droits == "pote") {
			// on récupère valeur checkbox 
			if (isset($_POST['participants']) && !empty($_POST['participants'])) {
				
			}
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
			$query = "
			INSERT INTO bandesdessinees (title, droits, id_user, url, couverture, etat, date_creation, pages, temps_real, participants)
			VALUES (:titre, :droits, :id_user, :url, :couverture, :etat, :date_creation, :pages, :temps, :participants);
			SELECT id FROM bandesdessinees WHERE title = :titre;";
			$requete=$bdd->prepare($query);

			$requete->bindParam(':titre', $titre);
			$requete->bindParam(':droits', $droits);
			$requete->bindParam(':id_user', $id_user);
			$requete->bindParam(':url', $url);
			$requete->bindParam(':couverture', $couverture);
			$requete->bindParam(':etat', $etat);
			$requete->bindParam(':date_creation', $date_creation);
			$requete->bindParam(':pages', $pages);
			$requete->bindParam(':temps', $temps);
			$requete->bindParam(':participants', $participants);

			$requete->execute();

			$donnees = $requete->fetch();
			$id_bd = $donnees['id'];

			// Table d'association
			$assoc = "INSERT INTO assoc_bd_user(id_bd,id_user) VALUES (:id_bd, :id_user)";
			$reqAssoc=$bdd->prepare($assoc);
			$reqAssoc->bindParam(':id_bd', $id_bd);
			$reqAssoc->bindParam(':id_user', $id_user);
			$reqAssoc->execute();

			$reqAssoc->closeCursor();
			$requete->closeCursor();
			$message = _BDENREGISTREE;
		}
		echo $message;
	}
?>