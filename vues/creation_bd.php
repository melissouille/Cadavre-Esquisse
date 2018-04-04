<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Création d'une BD</title>
	<script src="controles/script.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- Menu -->
	<?php include("includes/menu.php");?>

	<div class="content">
		<fieldset>
			<form>
				<div id="choix_titre">
					<h2>Vous êtes en train de créer une bd</h2><br>
					<input type="text" id="titre_bd" name="titre" value="Titre" /><br>
					<span>vous pouvez le modifier à tout moment</span>
				</div>
				<div id="choix_etat">
					<p class="consignes">Vous devez choisir l'état de votre bd</p>
					<div class="choix">
						<label for="potes">
							<h4>Entre potes</h4>
							<p>Vous seul pouvez choisir qui participera à votre Bd. Idéal pour un délire entre amis.<br>
								<span class="visibilite">Visible par tous !</span>
							</p>
						</label>
						<input type="radio" name="etat" value="entre-potes" id="potes" />
					</div>
					<div class="choix">
						<label for="tous">
							<h4>Ouverte à tous</h4>
							<p>
								Tout le monde peut participer à votre bd. N'essayez pas d'avoir le contrôle et laissez vous surprendre.<br>
								<span class="visibilite">Visible par tous !</span>
							</p>
						</label>
						<input type="radio" name="etat" value="ouverte-tous" id="tous" />
					</div>
					<div class="choix">
						<label for="privee">
							<h4>Privées</h4>
							<p>
								Seulement vous et vos amis pouvez accéder à votre bd. Pour laisser notre par d'ombre s'exprimer.
								<span class="visibilite">Visible uniquement pour les participants !</span>
							</p>
						</label>
						<input type="radio" name="etat" value="privee" id="privee" />
					</div>
				</div>
				<!-- DIV CHOIX_POTES ne s'affiche que si le radio entre-potes est sélectionné -->
				<div id="choix_potes">
					<p class="consignes"> Vous avez choisis la bd entre potes,<br>
					Veuillez saisir le nom des participants un par un :</p>
					<!-- Recherche dans BDD les noms = -->
					<input type="text" name="potes" id="" value="Nom" /><br>
					<!-- Ajoute div class checkbox avec input et label avec valeurs à partir de la BDD pour chaque résultat trouvé -->
					<div class="checkbox">
						<input type="checkbox" name="potes" value="">
						<label>
							<span class="avatar"></span>
							<span class="nom"></span>
							<span class="cases"></span>
						</label>
					</div>
					<p>Nombre de participants : </p><span class="nbr_participants_select"></span>
					<!-- Compte le nombre de checkbox coché -->
				</div>
				<div class="temps">
					<p class="consignes">Temps de réalisation d'une case</p>
					<p class="indications">Là, c'est à vous de voir ! Entre la spontanéité ou le travail soigné. Ceci s'applique à l'ensemble des participants de la bd.</p>
					<select name="temps">
						<!-- Affichage du nombre d'option en fonction de l'état de partage -->
						<!-- Pour la Slidebar, utilisation potentiel de jQuery ou autre framework -->
						<!-- Heures -->
						<option value="1h">1h</option>
						<option value="2h">2h</option>
						<option value="3h">3h</option>
						<option value="4h">4h</option>
						<option value="6h">6h</option>
						<option value="8h">8h</option>
						<option value="12h">12h</option>
						<!-- Jours -->
						<option value="1j">1 jour</option>
						<option value="2j">2 jours</option>
						<option value="3j">3 jours</option>
						<option value="4j">4 jours</option>
						<option value="5j">5 jours</option>
						<option value="6j">6 jours</option>
						<option value="1s">1 semaine</option>
					</select>
				</div>
				<div class="nb_pages">
					<p class="consignes">Nombre de page de la bd</p>
					<p class="indications">Définissez le nombre de page de votre PROJEEEEET	!!!</p>
					<select name="nb_pages">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
					<!-- Affichage du nombre d'option en fonction de l'état de partage -->
					<!-- Pour la Slidebar, utilisation potentiel de jQuery ou autre framework -->
				</div>
				<div class="valider">
					<h2>Comme c'est vous qui créé la bd, c'est à vous de commencer</h2><br>
					<input type="button" name="valider" id="valide_crea" value="Valider et commencer" />
				</div>
			</form>
		</fieldset>
	</div>	
	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>
</body>
<html>