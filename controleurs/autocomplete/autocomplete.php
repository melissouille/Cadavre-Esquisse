<?php
include '../bddconnect.php';
include '../functions.php';

$term = secureVar($_GET['term']);
$sql = "
	SELECT title, 'bandesdessinees' as source
	FROM bandesdessinees 
	WHERE title LIKE :term
	UNION ALL
	SELECT name, 'utilisateurs' as source
	FROM utilisateurs
	WHERE name LIKE :term
	LIMIT 15";

$requete = $bdd->prepare($sql);
$requete->execute(array('term' => '%'.$term.'%')); 

$liste = array();

while($data = $requete->fetch()) {
	// formatage de l'affichage des données de la liste 
	array_push($liste, $data['title']);
}
echo json_encode($liste); 
?>
