<?php

	include ('fonctions.php');
	 // Par défaut non inscrit :
	$inscription =  false ;

	// Vérifications :
	if (isset($_POST['submit']) && $_POST['submit'] == "inscription") {
		verifPseudo();
		verifMail();
		verifPassword();
		# etc...
	}
?>