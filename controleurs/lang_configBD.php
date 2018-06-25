<?php
// Langue par défaut Français :
	if (empty($_GET['lang'])) {
		$_SESSION['lang'] = "fr";
	} else{
	    switch($_GET['lang']){
	        case "fr":
	        	$_SESSION['lang'] = "fr";
	        break;
	        case "en":
	        	$_SESSION['lang'] = "en";
	        break;
	        default :
	        	// Pour si quelqu'un entre une langue non prise en compte :
	        	$_SESSION['lang'] = "fr";
	        break;
	    }
	}
	switch($_SESSION['lang']){
        case "fr":
        	$lang_inc = "../../modeles/lang/fr.inc";
        break;
        case "en":
        	$lang_inc = "../../modeles/lang/en.inc";
        break;
	}
	include($lang_inc);
?>