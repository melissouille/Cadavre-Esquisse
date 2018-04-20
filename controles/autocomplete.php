<?php
// Connexion à la base de données
include ("../modeles/connexion_bdd.php");

$requete = $bdd->prepare('SELECT * FROM bandesdessinees WHERE title LIKE :term');
$requete->execute(array('term' => '%'.$_GET['term'].'%')); 
$liste = array();
while($donnees = $requete->fetch()) { 
	$a = count($liste); 
	// formatage de l'affichage des données de la liste 
	$liste[$a] = $donnees['title']; 
} 
echo json_encode($liste);     
?>
