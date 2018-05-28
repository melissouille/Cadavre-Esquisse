<?php
	//Stocker nombre d'erreur :
	$er = 0;
	$message = "";
	 // Par défaut non inscrit :
	$inscription =  0 ;


	// Vérifications :
	if (isset($_POST['submit'])) {

		include 'bddconnect.php';
		// formatage des requètes :
		$queryname = "SELECT COUNT(*) AS nbr FROM utilisateurs WHERE name =:username";
		$querymail = "SELECT COUNT(*) AS nbr FROM utilisateurs WHERE email =:email";
		$querymdp = "";
		
		$username = secureVar($_POST['username']);
		$email = secureVar($_POST['email']);
		$password = secureVar($_POST['password']);
		$description = secureVar($_POST['description']);
		// Date du jour automatique
		$date_inscription = date('Y-m-d');

			/* A DEFINIR */
			$role = "";
			$url = "";//url du profil

		$lien = $_POST['website'];

		/* TEST PSEUDO */
			if (!empty($username) && isset($username)) {
				// Pseudo entre 2 et 36 caractères alphanumériques + underscore + dot
				if (preg_match('`^([a-zA-Z0-9-_.]{2,36})$`', $username)) {
					
					$requete = $bdd->prepare($queryuser);
					$requete->bindParam(':username',$username);
					$requete->execute();
					$pseudo_libre=($requete->fetchColumn()==0)?1:0;
					$requete->closeCursor();
					// Si le nom d'utilisateur est déjà présent dans la base
					if (!$pseudo_libre) {
						$message = _ERREUR_PSEUDOPRIT;
						$er++;
					}
				}
				else {
					$message = _ERREUR_FORMATPSEUDO;
					$er++;
				}
			} else {
				$message = _ERREUR_PSEUDOVIDE;
				$er++;
			}
		/* TEST EMAIL */
			if (!empty($email) && isset($email)) {

				if (preg_match(" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ", $email)) {

					$requete = $bdd->prepare($querymail);
					$requete->bindParam(':email',$email);
					$requete->execute();
					$mail_libre=($requete->fetchColumn()==0)?1:0;
					$requete->closeCursor();
					if (!$mail_libre) {
						$message = _ERREUR_MAILPRIT;
						$er++;
					}
				} else {
					$message = _ERREUR_FORMATMAIL;
					$er++;
				}
			} else {
				$message = _ERREUR_MAILVIDE;
				$er++;
			}
		/* TEST MOT DE PASSE */
			if (!empty($password) && isset($password)) {
					
				// Mot de passe sécurisé
				if (preg_match("#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}$#", $password)) {
					// Crypter mot de passe
					
				} else {
					$message = _ERREUR_FORMATMDP;
					$er++;
				}
			} else {
				$message = _ERREUR_MDPVIDE;
				$er++;
			}
		/* TEST DESCRIPTION
			if (!empty($description) && isset($description)) {
				$description = secureVar($description);

			} else {
				$message = _ERREUR_DESCRIPTION;
				$er++;
			}
		*/
		/* TEST AVATAR */ //test2
			if (!empty($_FILES['avatar']['size'])) {
				$maxsize = 50024; // poids octets
				$maxwidth = 100;
				$maxheight = 100;
				$ext_valides = array('bmp', 'jpg', 'jpeg', 'gif', 'png');

				if ($_FILES['avatar']['error'] > 0) {
					$message =  _ERREUR_AVATARTRANSFERT;
					$er++;
				}
				if ($_FILES['avatar']['size'] > $maxsize) {
					$message =  _ERREUR_FICHIERLOURD;
					$er++;
				}
				// Récuperer les dimensions de l'image :
				$img_sizes = getimagesize($_FILES['avatar']['tmp_name']);
					// = tableau : [0]=width et [1]=height

				if ($img_sizes[0] > $maxwidth || $img_sizes[1] > $maxheight) {
					$message = _ERREUR_TAILLEIMG;
					$er++;
				}
				// Récupérer extension fichier :
				$ext_upload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));

				if (!in_array($ext_upload,$ext_valides)) {
					$message = _ERREUR_EXTENSION +$ext_valides;
					$er++;
				}
			}

		/* TEST LIEN SITE 
			if (!empty($lien) && isset($lien)) {
				// test url
			} // ne retourne pas d'er car pas obligatoire
		*/

		// S'il n'y a aucune erreur :
		$queryinsert = "INSERT INTO utilisateurs (name,email,password) VALUES (:username, :email, :password)";
		if ($er == 0) {
			$requete=$bdd->prepare($queryinsert);
			$requete->bindParam(':username', $username);
			$requete->bindParam(':email', $email);
			$requete->bindParam(':password', $password);
			//$requete->bindParam(':description', $description);
			// $requete->bindParam(':date_inscription', $date_inscription);
			$requete->execute();

			$requete->closeCursor();
			// Redirection page d'accueil
			header('Location:../vues/index.php');
		} 
	}

// if ($er!=0) erreur(ERR_IS_CO);
?>