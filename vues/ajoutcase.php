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
		<?php include'includes/menu.php';?>
	</div>

	<div id="container" class="ajoutcase">
		<form action="../controles/ajoutcase.php">
			<div class="titre">
				<h2><?php echo $_SESSION['titre'];?></h2>
			</div>

			<div id="templatevide">
				<label id="template_select">
					<img class="apercu" name='apercu'/>
					<input type="hidden" name="apercu"/>
				</label>
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
							<input type="file" class="hidden" name="ajoutercase" id="ajouter" onchange="preview(this.value);">
						</label>
					</div>
					<div class="alignright">
						<button type="submit" id="valider_case">
							<img class="icone" src="../img/valider-case.png" alt="Validation" title="Valider" width="40px" />
						</button>
						<button type="reset" id="annulation" onclick="delpreview()">
							<img class="icone" src="../img/annulation.png" alt="Annulation" title="Annuler" width="40px" />
						</button>
					</div>
				</div>
			</div>
		</form>
	</div>

		<!-- Pied de page -->
	<div id="footer">
		<?php include 'includes/footer.php';?>
	</div>
	</div>
	<script>
		function preview(filename) {
			document.getElementById('template_select').innerHTML='<img class="preview" name="apercu" src="'+filename+'" width="100%" height="100%"/>';
		};
		function delpreview() {
			var div = document.getElementById('template_select');
			div.removeChild(div.childNodes[0]);
		}
		$(function(){
			$('#annulation').click(function() {
				$(".apercu").attr({
					src: '',
					id: '',
					alt: '',
					class: '',
					name: ''
				});
			});
		});
	</script>
</body>
</html>
