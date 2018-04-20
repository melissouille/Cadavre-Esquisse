<?php
include ("../modeles/connexion_bdd.php");

if (isset($_POST['submit'])) {
	$recherche = strip_tags($_POST['recherche']);

	$requete = $bdd->query('SELECT * FROM bandesdessinees, utilisateurs WHERE title, name LIKE :recherche');

	
?>