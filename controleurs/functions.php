<?php
/* GESTION DES ERREURS 
function erreur($err='')
{
   $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
   exit('<p>'.$mess.'</p>
   <p>Cliquez <a href="./index.php">ici</a> pour revenir à la page d\'accueil</p></div></body></html>');
}
// if ($er!=0) erreur(ERR_IS_CO);

//constants.php :
define('ERR_IS_CO','Vous ne pouvez pas accéder à cette page si vous n\'êtes pas connecté');
*/

function secureVar($string) {
	if (!empty($string)) {
		$string = $string = addcslashes($string, '%_');
		$string = strip_tags($string);
	}
	return $string;
}

$pageaccueil = "localhost/cadavre_esquisse/vues/index.php";
?>
