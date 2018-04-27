<?php
include 'bddconnect.php';
include 'functions.php';

$term = secureVar($_GET['term']);
$query = "
SELECT title, 'bandesdessinees' as source
FROM bandesdessinees 
WHERE title LIKE :term
UNION ALL
SELECT name, 'utilisateurs' as source
FROM utilisateurs
WHERE name LIKE :term
LIMIT 15";

$requete = $bdd->prepare($query);
$requete->execute(array('term' => '%'.$term.'%')); 

$liste = array();

while($donnees = $requete->fetch()) {
	// formatage de l'affichage des données de la liste 
	array_push($liste, $donnees['title']);
}
echo json_encode($liste); 
?>
