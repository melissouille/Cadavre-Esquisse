<?php
	include 'includes/general_includes.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter case</title>
	<?php include 'includes/head.html';?>
</head>
<body>
	<div id="main">
	<!-- Menu -->
	<div id="menu">
		<?php include("includes/menu.php");?>
	</div>

	<div id="container" class="ajoutcase">
		<div class="titre">
			<h2><?echo $_SESSION['titre'];?>Titre</h2>
		</div>

		<div class="template" id="templatevide">
			<span class="fleche" id="flechegauche"></span>
			<span class="fleche" id="flechedroite"></span>
			<img class="icone" src="../img/ajouter-case.png" alt="Ajouter la case" title="Ajouter" width="40px" />
			<img class="icone" src="../img/annulation.png" alt="Annulation" title="Annuler" width="40px" />
			<img class="icone" src="../img/choix-formes.png" alt="Choix formes" title="Choisir formes" width="40px" />
			<img class="icone" src="../img/telecharger-template.png" alt="Télécharger template" title="Télécharger" width="40px" />
			<img class="icone" src="../img/valider-case.png" alt="Validation" title="Valider" width="40px" />
		</div>
		
	</div>

		<!-- Pied de page -->
	<div id="footer">
		<?php include ("includes/footer.php");?>
	</div>

	</div>
</body>
</html>
