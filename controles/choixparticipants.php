<?php
	session_start();
	include 'bddconnect.php';
	include 'functions.php';
	include 'lang_config.php';

	//STOCKER LES ERREURS :
	$er = 0;
	$message = "";

	echo "TITRE BD = ".$_SESSION['titre']."<br>";

	if (isset($_POST['checkboxNodeList'])) {
		foreach ($_POST['checkboxNodeList'] as $value) {

			echo "Le participant $value a été sélectionné <br>";

			$nbparticipant = count($_POST['checkboxNodeList']) +1; // pour le créateur
			echo "Il y a $nbparticipant participants <br>";

			$sqlparticipant = "SELECT id FROM utilisateurs WHERE name = :value";
			$reqparticipant = $bdd->prepare($sqlparticipant);
			$reqparticipant->bindParam(':value', $value);
			$reqparticipant->execute();

			while ($data = $reqparticipant->fetch()) {
				$id_user = $data['id'];

				echo "l'id du participant est ".$id_user."<br>";

				
				$sqlbd = "SELECT id FROM bandesdessinees WHERE titre = :titre";
				$reqbd=$bdd->prepare($sqlbd);
				$reqbd->bindParam(':titre', $titre);

				echo "Titre = ".$titre. "<br>";

				$sqlassoc = "INSERT INTO assoc_bd_user(id_bd,id_user) VALUES (:id_bd, :id_user)";
				$reqassoc=$bdd->prepare($sqlassoc);
				$reqassoc->bindParam(':id_bd', $id_bd);
				$reqassoc->bindParam(':id_user', $id_user);
				$reqassoc->execute();

				$reqassoc->closeCursor();
			}
			$reqparticipant->closeCursor();
		}
	} else {
		$message = "Merci de choisir au moins 1 participant";
		$er++;
	}
	echo $message;
?>