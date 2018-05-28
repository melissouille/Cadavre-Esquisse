<?php
if (preg_match('#^http://[w-]+[w.-]+.[a-zA-Z]{2,6}#i', $lien)) {
	// Vérif si existe, ouvre en lecture seule:
	$f = @fopen($lien, "r");
	// Si la fenêtre a pu s'ouvrir
	if ($f) {
		// on ferme la fenêtre
		fclose($f);
		// $f retourne vrai
		return true;
	} else {
		echo "lien n'exsite pas";
		$lien = "";
	}
} else {
	echo "format url invalide";
	$lien = "";
}
?>