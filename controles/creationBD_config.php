<?php
	session_start();
	include ("../modeles/connexion_bdd.php");
	//Stocker nombre d'erreur :
	$er=0;

	if (isset($_POST['submit'])) {
		/* les variables saisies */
		$titre = $_POST['titre'];
		$pages = $_POST['nb_pages'];
		$temps = $_POST['temps'];
		$droits = $_POST['droit'];

		/* les variables automatiques */
		$date_creation = date('Y-m-d');
		$etat = 'encours';
		$id_user = $_SESSION['id'];
		$url = "www.cadavreesquisse.com/".$titre."";

		/* les tests */
		if (empty($titre) && !isset($titre)) {
			echo "Merci de saisir un titre";
			$er++;
		}
		if (empty($droits) && !isset($droits)) {
			echo "Merci de choisir un état";
			$er++;
		}
		if (!isset($pages)) {
			echo "Merci de choisir un nombre de page";
			$er++;
		}
		if (!isset($temps)) {
			echo "Merci de choisir un temps de réalisation d'une case";
			$er++;
		}

		if ($er == 0) {
			$requete=$bdd->prepare('
				INSERT INTO bandesdessinees (title, droits, id_user, etat, date_creation, pages, temps_real, url) 
				VALUES (:titre, :droits, :id_user, :etat, :date_creation, :pages, :temps, :url)');
			$requete->bindValue(':titre', $titre, PDO::PARAM_STR);
			$requete->bindValue(':droits', $droits, PDO::PARAM_STR);
			$requete->bindValue(':id_user', $id_user, PDO::PARAM_INT);
			$requete->bindValue(':url', $url, PDO::PARAM_STR);
			// $requete->bindValue(':couverture', $couverture, PDO::PARAM_STR);
			$requete->bindValue(':etat', $etat, PDO::PARAM_STR);
			$requete->bindValue(':date_creation', $date_creation, PDO::PARAM_STR);
			$requete->bindValue(':pages', $pages, PDO::PARAM_INT);
			$requete->bindValue(':temps', $temps, PDO::PARAM_STR);
			$requete->execute();
			$requete->closeCursor();
			echo "Bande dessinée enregistrée";
		}
	}
?>