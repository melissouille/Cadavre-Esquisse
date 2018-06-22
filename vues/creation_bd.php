<?php
	include 'includes/general_includes.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Création d'une BD</title>
	<?php include 'includes/head.html' ;?>
</head>
<body>
	<div id="main">
	<!-- Menu -->
	<div id="menu">
		<?php include'includes/menu.php';?>
	</div>

	<div id="container" class="creation_bd">

		<?php 
		if (isset($_SESSION['id'])) { ?>
			
			<form method="POST" id="createForm">

				<div id="choixtitre">
					<h2><?php echo _T_CREATION ;?></h2>
					<label for="titre">
						<input type="text" name="titre" id="titre" placeholder="<?php echo _CHAMP_TITRE; ?>"/>
						<br>
						<span class="consignes"><?php echo _SPAN_TITRE ;?></span>
					</label>
				</div>

				<div id="choixdroit">
					<h3 class="consignes"><span class="numero">1</span><?php echo _LABEL_DROIT ;?></h3>
					<div id="includechoix">
						<?php include 'includes/choix_etat.php'; ?>
					</div>
				</div>

				<div id="choixtemps">
					<label for="temps">
						<h3><span class="numero">2</span><?php echo _LABEL_TEMPS ;?></h3>

						<p class="consignes">
							<?php echo _SPAN_TEMPS ;?>
						</p>
						<div class="dropdownlist">
							<select id="temps" name="temps">
								<option class="duree" value="1" selected>1 heure</option>
								<option class="duree" value="3">3 heures</option>
								<option class="duree" value="6">6 heures</option>
								<option class="duree" value="12">12 heures</option>
								<option class="duree" value="24">1 jours</option>
								<option class="duree" value="48">2 jours</option>
								<option class="duree" value="72">3 jours</option>
								<option class="duree" value="96">4 jours</option>
								<option class="duree" value="120">5 jours</option>
								<option class="duree" value="144">6 jours</option>
								<option class="duree" value="168">7 jours</option>
							</select>

						</div>
						
					</label>
				</div>

				<div id="choixpage">
					<label for="nb_pages">
						<h3><span class="numero">3</span><?php echo _LABEL_PAGE ;?></h3>
						<span class="consignes">
							<?php echo _SPAN_PAGE ;?> 
						</span>
						
						<div class="slidecontainer">
							<span id="unepage">1</span>
							<input type='range' min="1" max="10" name="nb_pages" value="1" class="slider" id="rangepage" onchange="updateTextInput(this.value);">
							<input type="text" id="textInput" value="">
							<span id="dixpage">10</span>
						</div>
					</label>
				</div>

				<div class="valider">
					<h2 class="titres"><?php echo _LABEL_VALIDER ;?></h2>
					<button type="submit" name="valider" formaction="../controleurs/creationBD.php" form="createForm">
						<?php echo _VALIDER_ET_COMMENCER ;?>
					</button>
				</div>
			</form>
			<?php
				} else {
					include 'includes/noconnect.php';
				}
			?>
	</div>	
	
	<!-- Pied de page -->
	<div id="footer">
		<?php include 'includes/footer.php';?>
	</div>
	</div>
</body>
<html>