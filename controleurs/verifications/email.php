<?php 
$sqlMail = "SELECT COUNT(*) AS nbr FROM utilisateurs WHERE email =:email";
if (preg_match(" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ", $email)) {
	$requete = $bdd->prepare($sqlMail);
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
?>