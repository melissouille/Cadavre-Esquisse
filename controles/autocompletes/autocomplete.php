<?php
include 'bddconnect.php';
include 'functions.php';

$term = secureVar($_POST['term']);
$sql = "
SELECT title, 'bandesdessinees' as source
FROM bandesdessinees 
WHERE title LIKE :term
UNION ALL
SELECT name, 'utilisateurs' as source
FROM utilisateurs
WHERE name LIKE :term
LIMIT 15";

$req = $bdd->prepare($sql);
$req->execute(array('term' => '%'.$term.'%')); 

$liste = array();

while($data = $req->fetch()) {
	// formatage de l'affichage des données de la liste 
	array_push($liste, $data['title']);
}
echo json_encode($liste); 
?>
