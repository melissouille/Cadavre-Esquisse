<?php
	session_start();
include 'bddconnect.php';
include 'functions.php';
include 'lang_config.php';
//Stocker nombre d'erreur :
	$er=0;

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
		$couverture = "localhost/cadavre_esquisse/img/cde-apercubd-type.jpg";
		
		$id_user = $_SESSION['id'];
		$url = "localhost/cadavre_esquisse/".$titre."";
		$participants = 1;

		/* les tests */
		if (empty($titre) || !isset($titre)) {
			$message = _ERREUR_TITREVIDE;
			$er++;
		}
		if (empty($droits) || !isset($droits)) {
			$message = _ERREUR_ETATVIDE;
			$er++;
		}
		/* elseif ($droits == "pote") {
			// on récupère valeur checkbox 
			if (isset($_POST['participants']) && !empty($_POST['participants'])) {
				
			}
		} */
		if (!isset($temps)) {
			$message = _ERREUR_TEMPSVIDE;
			$er++;
		}
		if (!isset($pages)) {
			$message = _ERREUR_NBPAGEVIDE;
			$er++;
		}
		

		if ($er == 0) {
			$sql = "
			INSERT INTO bandesdessinees (title, droits, id_user, url, couverture, etat, date_creation, pages, temps_real, participants)
			VALUES (:titre, :droits, :id_user, :url, :couverture, :etat, :date_creation, :pages, :temps, :participants);
			SELECT id FROM bandesdessinees WHERE title = :titre;";
			$req=$bdd->prepare($sql);

			$req->bindParam(':titre', $titre);
			$req->bindParam(':droits', $droits);
			$req->bindParam(':id_user', $id_user);
			$req->bindParam(':url', $url);
			$req->bindParam(':couverture', $couverture);
			$req->bindParam(':etat', $etat);
			$req->bindParam(':date_creation', $date_creation);
			$req->bindParam(':pages', $pages);
			$req->bindParam(':temps', $temps);
			$req->bindParam(':participants', $participants);

			$req->execute();

			$data = $req->fetch();
			$id_bd = $data['id'];

			// Table d'association
			$sqlassoc = "INSERT INTO assoc_bd_user(id_bd,id_user) VALUES (:id_bd, :id_user)";
			$reqAssoc=$bdd->prepare($sqlassoc);
			$reqAssoc->bindParam(':id_bd', $id_bd);
			$reqAssoc->bindParam(':id_user', $id_user);
			$reqAssoc->execute();

			$reqAssoc->closeCursor();
			$req->closeCursor();
			$message = _BDENREGISTREE;
		}
		echo $message;
	}
?>