<?php
	include '../controles/bddconnect.php';
	include ("../controles/lang_config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo _PROFIL ;?></title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<?php include 'includes/head.html' ;?>
</head>
<body>
	
	<!-- Menu -->
	<div id="menu">
		<?php include("includes/menu.php");?>
	</div>

	<div class="content">
		<p><a href="notifications.php">Notifications</a></p>
		<section>
			<article class="profil">
				<div class="avatar"></div>
				<div class="info">
					<h3><i>Pseudo</i></h3>
					<p>
						<?php echo _CREE_LE ;?>
						<span class="date_creation"><i>date</i></span>
						<br>
						<span class="nb_participation"><i>NB</i></span>
						<?php echo _PARTICIPATIONS_BD ;?>
						<br>
						<span class="nb_creees">
							<i>NB</i>
						</span>
						<?php echo _CREATIONS_BD ;?>
						<br>
						<span class="nb_case">
							<i>NB</i>
						</span>
						<?php echo _CASES_REALISEES ;?>
						<span class="description"></span>				
					</p>
				</div>
			</article>
			
		</section>
		<section class="participations">
			<h2><?php echo _PARTICIPATIONSBD ;?></h2>
			<?php include ("includes/miniatureBD.php"); ?>

			<div class="boutons">
				<a href="#" id="voir_terminees">
					<?php echo _TOUTVOIR ;?>
				</a>
			</div>
		</section>

		<section class="cases">
			<h2><?php echo _CASES_REALISEES ;?></h2>
			<div class="case">
				<div class="boutons">
					<a href="#" id="voir_terminees">
						<?php echo _TOUTVOIR ;?>
					</a>
				</div>
			</div>
		</section>
	</div>

	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>
</body>
<html>