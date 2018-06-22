<?php
	include 'functions.php';

	if (isset($_POST['envoyer'])) {
		$nom= secureVar($_POST['username']); 
	  $email= secureVar($_POST['email']);
	  $objet= secureVar($_POST['objet']);
	  $message= secureVar($_POST['message']);

	  $destinataire= 'melissa.latouille.tic@gmail.com';	   
	  $contenu = '<html><head><title>'.$objet.'</title></head><body>';
	  $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
	  $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
	  $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
	  $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
	  // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
	  $headers = 'MIME-Version: 1.0'."\r\n";
	  $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

	  mail($destinataire, $objet, $contenu, $headers);
	  echo '<h2>Message envoyé!</h2>';
	}
?>