<?php
// Mot de passe sécurisé
if (preg_match("#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}$#", $password)) {
	// Crypter mot de passe
	$password = password_hash($password, PASSWORD_DEFAULT);
} else {
	$message = ""._ERREUR_FORMATMDP."";
	$er++;
}
?>