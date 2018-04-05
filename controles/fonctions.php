<?php

function verifPseudo() {
	$username = $_POST['username'];
	if (!empty($username) && isset($username)) {
		// Supprime balises :
		$username = strip_tags($username);
		// Pseudo entre 2 et 36 caractères alphanumériques + underscore + dot
		if (preg_match('`^([a-zA-Z0-9-_.]{2,36})$`', $username)) {
			include ("../modeles/connexion_bdd.php");
			$response = $bdd->query('SELECT name FROM utilisateurs');
			while ($utilisateurs = $response->fetch()) {
				// Si le nom d'utilisateur est déjà présent dans la base
				if ($username == $utilisateurs['name']) {
					echo "Ce Pseudo est déjà prit";
				} else {
					return true;
				}
			}
		} else {
			echo "Format du pseudo invalide";
		}
	} else {
		echo "Merci de saisir un pseudo";
	}
}

function verifMail() {
	$email = $_POST['email'];
	if (!empty($email) && isset($email)) {
		if (preg_match(" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ", $email)) {
			include ("../modeles/connexion_bdd.php");
			$response = $bdd->query('SELECT email FROM utilisateurs');
			while ($utilisateurs = $response->fetch()) {
				if ($email == $utilisateurs['email']) {
					echo "Un compte est déjà associé à ce email";
				} else {
					return true;
				}
			}
		} else {
			echo "Format email invalide";
		}
	} else {
		echo "Merci de saisir un email";
	}
}

function verifPassword() {
	$password = $_POST['password'];
	if (!empty($password) && isset($password)) {
		// Mot de passe sécurisé
		if (preg_match("#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}$#", $password)) {
			# Crypter mot de passe
		} else {
			echo "Format mot de passe invalide";
		}
	} else {
		echo "Merci de saisir un mot de passe";
	}
}
?>