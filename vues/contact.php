<?php
	include 'includes/general_includes.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" charset="utf-8">
  </head>
	<title><?php echo _CONTACT ;?></title>
	<?php include 'includes/head.html' ;?>
</head>
<body>
	<div id="main">
	<!-- Menu -->
	<div id="menu">
		<?php include'includes/menu.php';?>
	</div>

	<div id="container" class="contact">
		<fieldset class="alignleft">
			<legend><?php echo _CONTACT ;?></legend>
			<form method="POST" action="../controleurs/contact.php" form="contactForm">
				<label>
					<?php echo _NOM ;?>
					<br>
					<input type="text" name="username" placeholder="Frédéric Lambda">
				</label>
				<br>
				<label>
					<?php echo _MAIL ;?>
					<br>
					<input type="text" name="email" placeholder="exemple@mail.com">
				</label>
				<br>
				<label>
					<?php echo _OBJET;?>
					<br>
					<input type="text" name="objet" placeholder="Objet du message">
				</label>
				<br>
				<label>
					<?php echo _BLA ;?>
					<br>
					<textarea name="message" rows="10" cols="50" placeholder="Que peut-on faire pour vous ?"></textarea>
				</label>
				<br>
				<button class="boutons" type="submit" name="envoyer" value="envoyer">
					<?php echo _ENVOYER;?>
				</button>
			</form>
		</fieldset>
	</div>
	
	<!-- Pied de page -->
	<div id="footer">
		<?php include 'includes/footer.php';?>
	</div>
	</div>
</body>
<html>