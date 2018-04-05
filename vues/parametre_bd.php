<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Paramètre Auteur</title>
	<script src="controles/script.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- Menu -->
	<?php include("includes/menu.php");?>

	<div class="content">
		<h2>Paramètre BD</h2>
		<div class="details">
			<ul>
				<li>Créé le <span class="date_creation"></span></li>
				<li>Participants : <span class="nb_participant"></span></li>
				<li><span class="nb_page"></span> pages</li>
				<li><span class="etat"></span></li>
			</ul>
		</div>
		<div class="titre">
			<h3>Titre :</h3>
			<input type="text" name="titre" value="titre" class="titre_bd"/>
		</div>
		<div class="participants">
			<h3>Ajouter ou supprimer des participants :</h3>
			<input type="text" name="participants" class="participants"/>
			<!-- Dialogue BDD + fonction affichage // ?? type de sélection ??-->
		</div>
		
		<div class="etat">
			<h3>Choisisser l'état de votre BD :</h3>
			<?php include ("includes/choix_etat.php"); ?>
		</div>

		<div class="moins18">
			<img src="">
			<h3>AVERTISSEMENT (-18) :</h3>
			<p>"Cadavre Esquisse" sert potentiellement d'exutoire à un tas d'auteurs et dessinateurs à l'humour noir.<br>
				Le conteny peut s'avérer violent, offensant, pornographique ou tout à la fois.<br>
				(Les dessinateurs aiment dessiner des zizis et tout le monde le sait).vt</p>
			<h3>Voulez vous avertir du contenu explicite de votre bande dessinée ?</h3>
			<select>
				<option value="non">Non</option>
				<option value="oui">Oui</option>
			</select>
		</div>

		<button type="button" name="valider" value="valider">Valider</button>
		<!-- modifier BDD quand bouton cliqué -->
	</div>

	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>
</body>
<html>