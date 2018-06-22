<?php 
// Pour 50 Ko
$maxsize = 50024;
// Largueur 100px ; Hauteur 100px
$maxwidth = 100; $maxheight = 100;
// Format de l'image :
$ext_valides = array('bmp', 'jpg', 'jpeg', 'gif', 'png');

if ($_FILES['avatar']['error'] > 0) {
	$message =  _ERREUR_AVATARTRANSFERT;
	$er++;
} else {
	// Si l'image est trop lourde :
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
if ($er < 0) {
	echo $message;
}
elseif ($er == 0) {
	// Stocker image
	$tmp_name = $_FILES['avatar']['tmp_name'];
	$chemin = "localhost/cadavre_esquisse/img/{md5(uniqid(rand(), true))}.{$ext_upload}";
	$transfert = move_uploaded_file($tmp_name, $chemin)
	if ($transfert) {
		echo "Transfert réussi vers ".$chemin;
	}
}
?>