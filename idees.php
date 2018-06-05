<?php		
		
// Création page de la bande dessinée //
// page en fichier //
$pagebd = fopen("../vues/bandesdessinees/".$titre."", "w");
		if($pagebd == false)
			die("La création du fichier a échoué");
	