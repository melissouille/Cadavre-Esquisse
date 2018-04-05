<?php
	// Connexion à la base de données :
	include ("../modeles/connexion_bdd.php");

	// Affichage information lié à l'id
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profil</title>
	<script src="controles/script.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<!-- Menu -->
	<?php include("includes/menu.php");?>

	<div class="content">
		<section>
			<article class="profil">
				<div class="avatar"></div>
				<div class="info">
					<h3>Pseudo</h3>
					<p>
						Créé le <span class="date_creation"></span><br>
						<span class="nbr_participation"></span> participations à une bd <br>
						<span class="nbr_case"></span> cases réalisées
					</p>
				</div>
			</article>
			<article class="invitation">
				<h3>Invitation en attente :</h3>
				<div class="avatar"></div>
				<p>
					<span class="pseudo"></span> vous invite cordialement à participer à sa Bd :<br>
					<span class="titre"></span>
				</p>
				<button type="button" class="accepter" value="accepter">Accepter</button>
				<button type="button" class="refuser" value="refuser">Refuser</button>
			</article>
		</section>
		<section class="participations">
			<h2>Participation Bd</h2>
			<article>
				<h4>Titre de la bd</h4>
				<div class="image">
					<span class="statut"></span>
					<img src="">
				</div>
				<div class="description">
					<ul>
						<li>Etats</li>
						<li>Date de création</li>
						<li>Nombre de participants</li>
						<li>Note</li>
					</ul>
				</div>
			</article>
			<article>
				<h4>Titre de la bd</h4>
				<div class="image">
					<span class="statut"></span>
					<img src="">
				</div>
				<div class="description">
					<ul>
						<li>Etats</li>
						<li>Date de création</li>
						<li>Nombre de participants</li>
						<li>Note</li>
					</ul>
				</div>
			</article>
			<article>
				<h4>Titre de la bd</h4>
				<div class="image">
					<span class="statut"></span>
					<img src="">
				</div>
				<div class="description">
					<ul>
						<li>Etats</li>
						<li>Date de création</li>
						<li>Nombre de participants</li>
						<li>Note</li>
					</ul>
				</div>
			</article>
		</section>

		<section class="cases">
			<h2>Cases réalisées</h2>
			<div class="case">
				<span class="date_case"></span>
				<a href="#">Aller à la case</a> <!-- Bouton -->
				<a href="#">Voir la bd en entier</a> <!-- Bouton -->
			</div>
		</section>
	</div>

	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>
</body>
<html>