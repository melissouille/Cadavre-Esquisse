<?php
include 'bddconnect.php';
include 'functions.php';

$term = secureVar($_GET['term']);
$query = "
SELECT name, avatar, case_cree
FROM utilisateurs
WHERE name LIKE :term
LIMIT 10";

$requete = $bdd->prepare($query);
$requete->execute(array('term' => '%'.$term.'%')); 

$liste = array();

while($donnees = $requete->fetch()) {
	// formatage de l'affichage des données de la liste 
	array_push($liste, $donnees['name']);
}
echo json_encode($liste);
?>
