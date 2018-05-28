<?php
include 'bddconnect.php';
include 'functions.php';

$term = secureVar($_GET['term']);
$sql = "
SELECT title
FROM bandesdessinees 
WHERE title LIKE :term
LIMIT 10";

$req = $bdd->prepare($sql);
$req->execute(array('term' => '%'.$term.'%')); 

$liste = array();

while($data = $req->fetch()) {
	// formatage de l'affichage des données de la liste 
	array_push($liste, $data['title']);
}
echo json_encode($liste); 
?>
