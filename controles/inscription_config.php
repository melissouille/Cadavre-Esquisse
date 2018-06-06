<?php
	include 'lang_config.php';
	include 'functions.php';
	//Stocker nombre d'erreur :
	$er = 0;
	$message = "";

	// Vérifications :
	if (isset($_POST['submit'])) {

		include 'bddconnect.php';

		$username = secureVar($_POST['username']);
		$email = secureVar($_POST['email']);
		$password = secureVar($_POST['password']);
		$description = secureVar($_POST['description']);
		// Date du jour automatique
		$date_inscription = date('Y-m-d');
		$url = "http://localhost/cadavre_esquisse/vues/".$username;
		$lien = $_POST['website'];

		/* TEST PSEUDO */
			if (!empty($username) && isset($username)) {
				include 'verifications/user.php';
			} else {
				$message = _ERREUR_PSEUDOVIDE;
				$er++;
			}
		/* TEST EMAIL */
			if (!empty($email) && isset($email)) {
				include 'verifications/email.php';
			} else {
				$message = _ERREUR_MAILVIDE;
				$er++;
			}
		/* TEST MOT DE PASSE */
			if (!empty($password) && isset($password)) {
				include 'verifications/mdp.php';
			} else {
				$message = _ERREUR_MDPVIDE;
				$er++;
			}
		/* TEST DESCRIPTION */
			if (!empty($description) && isset($description)) {
				$description = secureVar($description);
			} else {
				$message = _ERREUR_DESCRIPTION;
				$er++;
			}
		/* TEST LIEN SITE */
			if (!empty($lien) && isset($lien)) {
				require 'verifications/lien.php';
			} // ne retourne pas d'er car pas obligatoire

		if ($er == 0) {
			$sqlInsert = "
			INSERT INTO utilisateurs (name, email, password, date_inscription, url, description, website)
			VALUES (:username, :email, :password, :date_inscription, :url, :description, :lien)";
			$req=$bdd->prepare($sqlInsert);
			$req->bindParam(':username', $username);
			$req->bindParam(':email', $email);
			$req->bindParam(':password', $password);
			$req->bindParam(':date_inscription', $date_inscription);
			$req->bindParam(':url', $url);
			$req->bindParam(':description', $description);
			$req->bindParam(':lien', $lien);
			$req->execute();
			$req->closeCursor();
			// Redirection page d'accueil
			header('Location:../vues/index.php');
		}
		echo 'Il y a '.$er.' erreurs <br>';
		echo $message; 
	}
// if ($er!=0) erreur(ERR_IS_CO);
?>