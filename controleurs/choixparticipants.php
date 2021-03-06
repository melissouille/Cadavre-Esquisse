<?php
	session_start();
	include 'bddconnect.php';
	include 'functions.php';
	include 'lang_config.php';
	include '../modeles/query.php';

	//STOCKER LES ERREURS :
	$er = 0;
	$message = "";

	if (isset($_POST['checkboxNodeList'])) {
		foreach ($_POST['checkboxNodeList'] as $value) {

			echo "$value a été sélectionné <br>";

			$nbparticipant = count($_POST['checkboxNodeList']);

			echo "$nbparticipant participants <br>";

			$reqparticipant = $bdd->prepare($sqlparticipant);
			$reqparticipant->bindParam(':value', $value);
			$reqparticipant->execute();

			while ($datauser = $reqparticipant->fetch()) {
				$id_user = $datauser['id'];
				$avatar = $datauser['avatar'];

				echo "l'id du participant est ".$id_user."<br>";

				$titre = $_SESSION['titre'];
				echo "Titre = ".$titre. "<br>";

				$reqbd=$bdd->prepare($sqlParticipantBD);
				$reqbd->bindParam(':titre', $titre);
				$reqbd->execute();

				$databd = $reqbd->fetch();
				$id_bd = $databd['id'];
				
				echo "Id BD = ".$id_bd. "<br>";

				include 'assoc_bd_user.php';
	
				$reqbd->closeCursor();
			}
			$reqparticipant->closeCursor();
			header('Location: http://localhost/cadavre-esquisse/vues/ajoutcase.php');
		}
	} else {
		$message = "Merci de choisir au moins 1 participant";
		$er++;
	}
	echo $message;
?>