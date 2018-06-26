<?php
	session_start();
	include 'bddconnect.php';
	include 'functions.php';
	include 'lang_config.php';
	include '../modeles/query.php';
//STOCKER LES ERREURS :
	$er = 0;
	$message = "";

	if (isset($_POST['valider'])) {

		// LES VARIABLES SAISIES
		$titre = secureVar($_POST['titre']);
		$pages = secureVar($_POST['nb_pages']);
		$temps = secureVar($_POST['temps']);
		$droits = secureVar($_POST['droit']);

		// LES VARIABLES AUTOMATIQUES
		$id_user = $_SESSION['id'];
		$id_bd = rand();
		// boolean aléatoire = couverture1 ou couverture2
		$hasardcouverture = rand(1,2);
		switch ($hasardcouverture) {
			case 1:
				$couverture = "http://localhost/cadavre_esquisse/img/couverture1.jpg";
				break;
			case 2:
				$couverture = "http://localhost/cadavre_esquisse/img/couverture2.jpg";
				break;
		}
		$date_creation = date('Y-m-d');
		$etat = 'encours';
	
		

		
	// LES TESTS
		if (empty($titre) || !isset($titre)) {
			$message = _ERREUR_TITREVIDE;
			$er++;
		} else {
			include 'verifications/titre.php';
		}

		if (empty($droits) || !isset($droits)) {
			$message = _ERREUR_ETATVIDE;
			$er++;
		} else {
			$participant = 1;
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
			// Création entrée dans table bandesdessinees //
			$req=$bdd->prepare($sqlCreationBD);
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
			$req->bindParam(':participant', $participant);
			$req->execute();
					
				$requser=$bdd->prepare($sqluser);
				$requser->bindParam(':id_user', $id_user);
				$requser->execute();

					$data = $requser->fetch();
					$bd_cree_bdd = $data['bd_cree'];

					$bd_cree = $bd_cree_bdd + 1;
					
					$requpdate=$bdd->prepare($sqlupdate);
					$requpdate->bindParam(':id_user', $id_user);
					$requpdate->bindParam(':bd_cree', $bd_cree);
					$requpdate->execute();
					$requpdate->closeCursor();

				$requser->closeCursor();
			$req->closeCursor();
			include 'assoc_bd_user.php';

		$_SESSION['titre'] = $titre;
					
		if ($droits == 'potes') {
			header('Location: http://localhost/cadavre_esquisse/vues/ajoutparticipant.php');
		} 
		if ($droits == 'tous' || $droits == 'privee') {
			header('Location: http://localhost/cadavre_esquisse/vues/ajoutcase.php');
		}
	}
	echo $message;
}
?>