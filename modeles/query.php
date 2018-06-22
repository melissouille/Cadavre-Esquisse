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

?>