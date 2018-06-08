<?php
	session_start();
	include 'bddconnect.php';
	include 'functions.php';
	include 'lang_config.php';
//STOCKER LES ERREURS :
	$er = 0;
	$message = "";

	if (isset($_POST['valider'])) {

		// LES VARIABLES SAISIES
		$titre = secureVar($_POST['titre']);
		$_SESSION['titre'] = $titre;
		$pages = secureVar($_POST['nb_pages']);
		$temps = secureVar($_POST['temps']);
		$droits = secureVar($_POST['droit']);

		// LES VARIABLES AUTOMATIQUES
		$id_user = $_SESSION['id'];
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

		
	// LES TESTS
		if (empty($titre) || !isset($titre)) {
			$message = _ERREUR_TITREVIDE;
			$er++;
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
			include 'requetes/reqcreationbd.php';
			include 'requetes/assoc_bd_user.php';
			/* Créer un fichier pour la bd 
			fopen('bd/'.$titre'.php', 'w+');
			*/
			if ($droits == 'pote') {
				header('Location: http://localhost/cadavre-esquisse/vues/ajoutparticipant.php');
			} 
			if ($droits == 'tous' || $droits == 'privee') {
				header('Location: http://localhost/cadavre-esquisse/vues/ajoutcase.php');
			}
		}
		echo $message;
	}
?>