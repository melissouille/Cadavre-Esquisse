<?php
$sqlUser = "SELECT COUNT(*) AS nbr FROM utilisateurs WHERE name =:username";
// Pseudo entre 2 et 36 caractères alphanumériques + underscore + dot
if (preg_match('`^([a-zA-Z0-9-_.]{2,36})$`', $username)) {
	
	$requete = $bdd->prepare($sqlUser);
	$requete->bindParam(':username',$username);
	$requete->execute();
	$pseudo_libre=($requete->fetchColumn()==0)?1:0;
	$requete->closeCursor();
	// Si le nom d'utilisateur est déjà présent dans la base
	if (!$pseudo_libre) {
		$message = _ERREUR_PSEUDOPRIT;
		$er++;
	}
} else {
	$message = _ERREUR_FORMATPSEUDO;
	$er++;
}