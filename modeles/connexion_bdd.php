<?php
	try { 
		$bdd = new PDO('mysql:host=localhost;dbname=cadavre_esquisse;charset=utf8', 'root', '');
	}
	catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}
?>