<?php
include '../modeles/query.php';

$user= $_SESSION['user'];
$id= $_SESSION['id'];

$requete=$bdd->prepare($sqlSelectUser);
$requete->bindParam(':user', $user);
$requete->execute();
while ($data=$requete->fetch()) {
	$avatar=$data['avatar'];
	$date_inscription=$data['date_inscription'];
	$participations=$data['bdjoin'];
	$bd_cree=$data['bd_cree'];
	$case_cree=$data['case_cree'];
}
$requete->closeCursor();
?>
