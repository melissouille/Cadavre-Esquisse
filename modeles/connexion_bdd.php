<?php
	// Sous WAMP (Windows)
	$bdd = new PDO('mysql:host=localhost;dbname=cadavre-esquisse;charset=utf8', 'root', '');

	// Sous MAMP (Mac)
	$bdd = new PDO('mysql:host=localhost;dbname=cadavre-esquisse;charset=utf8', 'root', 'root');

	try { $bdd = new PDO('mysql:host=localhost;dbname=cadavre-esquisse;charset=utf8', 'root', ''); }
	catch (Exception $e) { die('Erreur : ' . $e->getMessage()); }
?>