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

		<div id="templatevide">
			<span class="fleche" id="flechegauche">
				&#8249
			</span>
			<span class="fleche" id="flechedroite">
				&#8250
			</span>
		</div>
		<div class="icones">
			<span id="choix_formes">
				<?php include 'modals/choixformes.php';?>
			</span>
			<span id="ajouter_case">
				<img class="icone" src="../img/ajouter-case.png" alt="Ajouter la case" title="Ajouter" width="40px" />
			</span>
			<span id="annulation">
				<img class="icone" src="../img/annulation.png" alt="Annulation" title="Annuler" width="40px" />
			</span>
			<span id="telecharger_template"> 
				<img class="icone" src="../img/telecharger-template.png" alt="Télécharger template" title="Télécharger" width="40px" />
			</span>
			<span id="valider_case">
				<img class="icone" src="../img/valider-case.png" alt="Validation" title="Valider" width="40px" />
			</span>
		</div>
		
	</div>

		<!-- Pied de page -->
	<div id="footer">
		<?php include ("includes/footer.php");?>
	</div>

	</div>
</body>
</html>
