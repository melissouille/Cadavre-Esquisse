<?php
	$host = "localhost";
	$database = "cadavre_esquisse";
	$user = "root";
	$pwd = "";
	try { 
		$bdd = new PDO('mysql:host='.$host.';dbname='.$database.';charset=utf8',$user, $pwd);
	}
	catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}
?>