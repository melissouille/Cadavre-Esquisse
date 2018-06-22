<?php
session_start();

	if (isset($_FILES['ajoutercase'])) {

		$titre=$_SESSION['titre'];
		$_FILES['ajoutercase']['name'];
		$_FILES['ajoutercase']['type'];
		$_FILES['ajoutercase']['size'];
		$_FILES['ajoutercase']['tmp_name'];
		$_FILES['ajoutercase']['error'];
		// TIME_CREATION automatique dans la bdd
		
		$sqlbd="SELECT id FROM bandesdessinees WHERE title=:titre";
		$reqbd=$bdd->prepare($sqlbd);
		$reqbd->bindParam(':titre', $titre);
		$reqbd->execute();
			$data=$reqbd->fetch();
			$id_bd=$data['id'];

			$sqlassoc="SELECT COUNT(*) AS nbr FROM cases WHERE id_bd=:id_bd";
			$reqassoc=$bdd->prepare($sqlassoc);
			$reqassoc->bindParam(':id_bd',$id_bd);
			$reqassoc->execute();
				$case_existe=($reqassoc->fetchColumn()==0)?1:0;
				// S'il y a déjà au moins une case
				if (!$case_existe) {
					// On sélectionne le numero le plus grand pour trouver la dernière case
					$sqlcase="SELECT MAX(numero) as numax FROM cases WHERE id_bd=:id_bd";
					$reqcase->bindParam(':id_bd',$id_bd);
					$reqcase->execute();
						while ($data=$reqcase->fetch()) {
							$format=$data['format'];

						}
				} 
				// S'il n'y a pas de case associée 
				elseif ($case_existe) {
					$url='www.cadavre-esquisse/'.$titre.'/case1';
					$etat='termine';
					$numero=1;

					$sqlcase="INSERT INTO cases (id_bd, id_user, url, etatC, image, format, numero) VALUES :id_bd, :id_user, :url, :etat, :image, :format, :numero";
					$reqcase=$bdd->prepare($sqlcase);
					$reqcase->bindParam(':id_bd',$id_bd);
					$reqcase->bindParam(':id_user',$_SESSION['id']);
					$reqcase->bindParam(':url',$url);
					$reqcase->bindParam(':etat',$etat);

				}

			$reqassoc->closeCursor();

		$reqbd->closeCursor();

	}
?>