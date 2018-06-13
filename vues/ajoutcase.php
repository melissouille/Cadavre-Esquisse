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
			<div id="template_select">
				<img class="apercu"/>
			</div>
			<div class="icones">
				<div class="alignleft">
					<span id="choix_formes">
						<?php include 'modals/choixformes.php';?>
					</span>
					<a id="telecharger_template">
						<img class="icone" src="../img/telecharger-template.png" alt="Télécharger template" title="Télécharger" width="40px" />
					</a>
					<label id="ajouter_case">
						<img class="icone" src="../img/ajouter-case.png" alt="Ajouter la case" title="Ajouter" width="40px" />
						<input type="file" class="hidden">
					</label>
				</div>
				<div class="alignright">
					<button id="valider_case">
						<img class="icone" src="../img/valider-case.png" alt="Validation" title="Valider" width="40px" />
					</button>
					<button id="annulation">
						<img class="icone" src="../img/annulation.png" alt="Annulation" title="Annuler" width="40px" />
					</button>
				</div>

			</div>
		</div>
		
		
	</div>

		<!-- Pied de page -->
	<div id="footer">
		<?php include ("includes/footer.php");?>
	</div>

	</div>
</body>
</html>
