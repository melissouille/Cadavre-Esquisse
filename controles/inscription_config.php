<?php
include ("../modeles/connexion_bdd.php");

	//Stocker nombre d'erreur :
	$er =0;
	 // Par défaut non inscrit :
	$inscription =  0 ;

	// Vérifications :
	if (isset($_POST['submit'])) {
		/* VARIABLES */
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$description = $_POST['description'];
		$date_inscription=date('Y-m-d');// Date du jour automatique

			/* A DEFINIR */
			$role = "";
			$url = "";//url du profil

		$lien = $_POST['website'];

		/* TEST PSEUDO */
			if (!empty($username) && isset($username)) {
				// Supprime balises :
				$username = strip_tags($username);
				
				// Pseudo entre 2 et 36 caractères alphanumériques + underscore + dot
				if (preg_match('`^([a-zA-Z0-9-_.]{2,36})$`', $username)) {
					
					$requete = $bdd->prepare('SELECT COUNT(*) AS nbr FROM utilisateurs WHERE name =:username');
					$requete->bindValue(':username',$username, PDO::PARAM_STR);
					$requete->execute();
					$pseudo_libre=($requete->fetchColumn()==0)?1:0;
					$requete->closeCursor();
					// Si le nom d'utilisateur est déjà présent dans la base
					if (!$pseudo_libre) {
						echo "Ce Pseudo est déjà prit <br>";
						$er++;
					} else {
						echo $username. " OK <br>";
					}
				}
				else {
					echo "Format du pseudo invalide <br>";
					$er++;
				}
			} else {
				echo "Merci de saisir un pseudo <br>";
				$er++;
			}
		/* TEST EMAIL */
			if (!empty($email) && isset($email)) {

				if (preg_match(" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ", $email)) {

					$requete = $bdd->prepare('SELECT COUNT(*) AS nbr FROM utilisateurs WHERE email =:email');
					$requete->bindValue(':email',$email, PDO::PARAM_STR);
					$requete->execute();
					$mail_libre=($requete->fetchColumn()==0)?1:0;
					$requete->closeCursor();
					if (!$mail_libre) {
						echo "Il existe déjà un compte avec cet email";
						$er++;
					}
				} else {
					echo "Format email invalide <br>";
					$er++;
				}
			} else {
				echo "Merci de saisir un email <br>";
				$er++;
			}
		/* TEST MOT DE PASSE */
			if (!empty($password) && isset($password)) {
					
				// Mot de passe sécurisé
				if (preg_match("#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}$#", $password)) {
					// Crypter mot de passe
					echo "MOT DE PASSE OK";
				} else {
					echo "Format mot de passe invalide <br>";
					$er++;
				}
			} else {
				echo "Merci de saisir un mot de passe <br>";
				$er++;
			}
		/* TEST DESCRIPTION
			if (!empty($description) && isset($description)) {
				// Enleve balises :
				$description = strip_tags($description);

			} else {
				echo "Merci de saisir une description <br>";
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
					echo "Erreur transfert avatar";
					$er++;
				}
				if ($_FILES['avatar']['size'] > $maxsize) {
					echo "Fichier trop lourd";
					$er++;
				}
				// Récuperer les dimensions de l'image :
				$img_sizes = getimagesize($_FILES['avatar']['tmp_name']);
					// = tableau : [0]=width et [1]=height

				if ($img_sizes[0] > $maxwidth || $img_sizes[1] > $maxheight) {
					echo "Taille image trop grande";
					$er++;
				}
				// Récupérer extension fichier :
				$ext_upload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));

				if (!in_array($ext_upload,$ext_valides)) {
					echo "Extension doit être : " .$ext_valides;
					$er++;
				}
			}

		/* TEST LIEN SITE 
			if (!empty($lien) && isset($lien)) {
				// test url
			} // ne retourne pas d'er car pas obligatoire
		*/

		// S'il n'y a aucune erreur :
		if ($er == 0) {
			$requete=$bdd->prepare('INSERT INTO utilisateurs (name,email,password) VALUES (:username, :email, :password)');
			$requete->bindValue(':username', $username, PDO::PARAM_STR);
			$requete->bindValue(':email', $email, PDO::PARAM_STR);
			$requete->bindValue(':password', $password, PDO::PARAM_STR);
			//$requete->bindValue(':description', $description, PDO::PARAM_STR);
			// $requete->bindValue(':date_inscription', $date_inscription, PDO::PARAM_STR);
			$requete->execute();
			// Définition des variables de SESSION :

			$requete->closeCursor();
			header('Location:../vues/index.php');
		} 
	}


/* Ajout d'une entrée dans la table utilisateurs
$requete = $bdd->exec('INSERT INTO utilisateurs(name, email, password) VALUES (:name, :email, :password)');
Affectation variables 
$requete->execute(array(
	'name' => $username,
	'email' => $email,
	'password' => $password
));*/

// if ($er!=0) erreur(ERR_IS_CO);
?>