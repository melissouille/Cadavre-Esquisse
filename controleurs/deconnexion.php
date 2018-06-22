<?php
	session_start();
	// Destruction des variables de session :
	session_unset();
	// Destruction de la session :
	session_destroy();
	// Redirection page d'accueil :
	header('location: ../vues/index.php');
?>