<?php
	include 'bddconnect.php';
	include 'functions.php';
	
	if (isset($_POST['ajouter'])) {
		if (isset($_POST['rechercheUser']) && !empty($_POST['rechercheUser'])) {

			$participant = secureVar($_POST['rechercheUser']);
			$query = " SELECT id, name, avatar, case_cree FROM utilisateurs WHERE name = :participant";
			$requete = $bdd->prepare($query);
			$requete->bindParam(':participant', $participant);
			$requete->execute();

			$donnees = $requete->fetch();
			$id_participants = $donnees['id'];
			$nom = $donnees['name'];
			$avatar = $donnees['avatar'];
			$cases = $donnees['case_cree'];

			include 'includes/participants.php';	
			$requete->closeCursor();
		} else {
			echo "champs vide";
		}
	} else {
		return false;
	}
?>
