<?php
include '../modeles/query.php';
include 'bddconnect.php';

$id_user = $_SESSION['id'];
$requete=$bdd->($sqlSelectCase);
$requete->bindParam(':id_user', $id_user);
$requete->execute();
	while ($data=$requete->fetch()) {
		$id_bd=$data['id_bd'];
		$etatC=$data['etatC'];
		$image=$data['image'];
		$creation=$data['time_creation'];
		$date_real=$data['date_real'];
		$date_resa=$data['date_resa'];
		$duree=$data['duree'];
		$url=$data['url'];
	}
$requete->closeCursor();
?>