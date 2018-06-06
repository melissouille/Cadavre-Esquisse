<?php
	foreach ($_POST['checkboxNodeList'] as $value) {
		echo "Le participant $value a été sélectionné <br>";

		$nbparticipant = count($_POST['checkboxNodeList']) +1; // pour le créateur
		echo "Il y a $nbparticipant participants";

		$sqlparticipant = "SELECT id FROM utilisateurs WHERE name = :value";
		$reqparticipant = $bdd->prepare($sqlparticipant);
		$reqparticipant->bindParam(':value', $value);
		$reqparticipant->execute();

		while ($data = $reqparticipant->fetch()) {
			$id_user = $data['id'];
			$sqlassoc = "INSERT INTO assoc_bd_user(id_bd,id_user) VALUES (:id_bd, :id_user)";
			$reqassoc=$bdd->prepare($sqlassoc);
			$reqassoc->bindParam(':id_bd', $id_bd);
			$reqassoc->bindParam(':id_user', $id_user);
			$reqassoc->execute();

			$reqassoc->closeCursor();
		}
		$reqparticipant->closeCursor();
	}
?>