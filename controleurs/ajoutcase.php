<?php
include '../modeles/query.php';

	if (isset($_FILES['ajoutercase'])) {

		$titre=$_SESSION['titre'];
		$_FILES['ajoutercase']['name'];
		$_FILES['ajoutercase']['type'];
		$_FILES['ajoutercase']['size'];
		$_FILES['ajoutercase']['tmp_name'];
		$_FILES['ajoutercase']['error'];
		// TIME_CREATION automatique dans la bdd
		
		$reqbd=$bdd->prepare($sqlSelectIdBD);
		$reqbd->bindParam(':titre', $titre);
		$reqbd->execute();
			$data=$reqbd->fetch();
			$id_bd=$data['id'];

			$reqassoc=$bdd->prepare($SelectCountCase);
			$reqassoc->bindParam(':id_bd',$id_bd);
			$reqassoc->execute();
				$case_existe=($reqassoc->fetchColumn()==0)?1:0;
				// S'il y a déjà au moins une case
				if (!$case_existe) {
					// On sélectionne le numero le plus grand pour trouver la dernière case
					$reqcase=$bdd->prepare($SelectMaxCase);
					$reqcase->bindParam(':id_bd',$id_bd);
					$reqcase->execute();
						while ($data=$reqcase->fetch()) {
							$format=$data['format'];
							if ($format == 1) {
								// format 1 ou 4
								// afficher seulement template 1 et 4
								// sauf si dernière case de ligne retour ligne
							}
							elseif ($format == 2) {
								// format 2
								// afficher seulement template 2
								// sauf si dernière case de ligne retour ligne
							}
							elseif ($format == 3) {
								// nouvelle ligne
								// retour à la ligne
							}
							elseif ($format == 4) {
								// format 1 ou nouvelle ligne
								// sauf si dernière case de ligne retour ligne
							}
							elseif ($format == 5) {
								// format 2
							}
						}
				} 
				// S'il n'y a pas de case associée 
				elseif ($case_existe) {
					$url='www.cadavre-esquisse/'.$titre.'/case1';
					$etat='termine';
					$numero=1;

					$reqcase=$bdd->prepare($InsertCase);
					$reqcase->bindParam(':id_bd',$id_bd);
					$reqcase->bindParam(':id_user',$_SESSION['id']);
					$reqcase->bindParam(':url',$url);
					$reqcase->bindParam(':etat',$etat);

				}

			$reqassoc->closeCursor();

		$reqbd->closeCursor();

	}
?>