<?php
include '../bddconnect.php';
include '../functions.php';

$term = secureVar($_GET['term']);
$sql = "
	SELECT name, avatar, case_cree
	FROM utilisateurs
	WHERE name LIKE :term
	LIMIT 10";

$requete = $bdd->prepare($sql);
$requete->execute(array('term' => '%'.$term.'%')); 

$liste = array();

while($data = $requete->fetch()) {
	// formatage de l'affichage des données de la liste 
	array_push($liste, $data['name']);
}
echo json_encode($liste);
?>
