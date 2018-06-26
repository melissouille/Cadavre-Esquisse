<?php
//MINIATURES
$sqlBDminiatures = "
	SELECT id, title, droits, participants, couverture, url, etat
	FROM bandesdessinees 
	WHERE etat=:etatBD AND droits!='privee'
	LIMIT 6";
$sqlCase = "
	SELECT etatC 
	FROM cases 
	WHERE id_bd =:id_bd";

//RECHERCHE.PHP
$sqlBDexplorer = "
	SELECT id, etat, droits 
	FROM bandesdessinees 
	WHERE title LIKE :term AND droits!='privee' 
	GROUP BY id";
$sqlBDcheckbox = "
	SELECT DISTINCT id, title, droits, participants, couverture, url, etat 
	FROM bandesdessinees 
	WHERE etat=:checkbox OR droits=:checkbox 
	GROUP BY id 
	HAVING id=:id_bd";
$sqlUserExplorer = "
	SELECT * 
	FROM utilisateurs 
	WHERE name LIKE :term";
$sqlBDnoCheckbox = "
	SELECT DISTINCT id, title, droits, participants, couverture, url, etat 
	FROM bandesdessinees 
	WHERE id=:id_bd AND droits!='privee' 
	GROUP BY id";

//PARTICIPER.PHP
$sqlSelect = "
	SELECT id
	FROM bandesdessinees
	WHERE title LIKE :term
		/* seulement les bd ouverte à tous*/
		AND droits='tous'
		/*seulement les bd encours*/
		AND etat='encours'
		/*ne prend pas en compte les bd crée par l'utilisateur*/
		AND id_user!=:id_login
	GROUP BY id";
$sqlBDparticiper = "
	SELECT DISTINCT id, title, droits, participants, couverture, url, etat 
	FROM bandesdessinees 
	WHERE id=:id_bd 
		AND droits='tous'
		AND etat='encours'
	GROUP BY id";

//CREATION BD
$sqlCreationBD = "
	INSERT INTO bandesdessinees (id, title, droits, id_user, url, couverture, etat, date_creation, pages, temps_real, participants)
	VALUES (:id_bd, :titre, :droits, :id_user, :url, :couverture, :etat, :date_creation, :pages, :temps, :participant)";
$sqluser = "
	SELECT id, bd_cree 
	FROM utilisateurs 
	WHERE id = :id_user";
$sqlupdate = "
	UPDATE utilisateurs 
	SET bd_cree = :bd_cree 
	WHERE id = :id_user";
$sqlassoc = "
	INSERT INTO assoc_bd_user(id_bd,id_user) 
	VALUES (:id_bd, :id_user)";
// INSCRIPTION
$sqlInsertInscription = "
	INSERT INTO utilisateurs (name, email, password, date_inscription, url, description, website) 
	VALUES (:username, :email, :password, :date_inscription, :url, :description, :lien)";
//CONNEXION
$sqlConnexion = "
	SELECT id, name, password, role 
	FROM utilisateurs 
	WHERE name =:user";
//PARTICIPANTS
$sqlparticipant = "
	SELECT id, name, avatar 
	FROM utilisateurs 
	WHERE name = :value";
$sqlParticipantBD = "
	SELECT id, title 
	FROM bandesdessinees 
	WHERE title = :titre";

$sqlBD = "
	SELECT * FROM bandesdessinees
	WHERE id = :id_bd";
$sqlSelectIdBD ="
	SELECT id
	FROM bandesdessinees
	WHERE title=:titre";
$sqlSelectAssoc = "
	SELECT id_bd FROM assoc_bd_user 
	WHERE id_user=:id_user";
	
$sqlSelectUser = "
	SELECT *
	FROM utilisateurs
	WHERE name=:user";

$sqlSelectCase ="
	SELECT *
	FROM cases
	WHERE id_user=:id_user";
$SelectCountCase ="
	SELECT COUNT(*) AS nbr 
	FROM cases 
	WHERE id_bd=:id_bd";
$SelectMaxCase ="
	SELECT MAX(numero) as numax 
	FROM cases 
	WHERE id_bd=:id_bd";
$InsertCase ="
	INSERT INTO cases (id_bd, id_user, url, etatC, image, format, numero) 
	VALUES :id_bd, :id_user, :url, :etat, :image, :format, :numero";
?>