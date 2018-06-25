<?php
	include 'includes/general_includes.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo _PROFIL ;?></title>
	<?php include 'includes/head.html' ;?>
</head>
<body>
	<div id="main">
	<!-- Menu -->
	<div id="menu">
		<?php include'includes/menu.php';?>
	</div>

	<div id="container" class="profil">
		<?php 
			if(isset($_SESSION['id'])) {
				include '../controleurs/profil.php';
		?>
		<section class="details">
			<article class="avatar">
				<img src="<?php echo $avatar;?>" width=100%>
			</article>
			<article class="info">
					<h3><?php echo $user;?></h3>
					<p>
						<?php echo _CREE_LE ;?>
						<span class="date_creation">
							<?php echo $date_inscription ;?>
						</span>
						<br>
						<?php if ($participations > 0) { ?>
							<span class="nb_participation">
								<?php echo $participations;?>
							</span>
							<?php echo _PARTICIPATIONS_BD ;?>
							<br>
						<?php } ?>
						<?php if ($bd_cree > 0) { ?>
							<span class="nb_creees">
								<?php echo $bd_cree;?>
							</span>
							<?php echo _CREATIONS_BD ;?>
							<br>
						<?php } ?>
						<?php if ($case_cree > 0 ) { ?>
							<span class="nb_case">
								<?php echo $case_cree;?>
							</span>
							<?php echo _CASES_REALISEES ;?>
							<span class="description"></span>
						<?php } ?>
					</p>
			</article>
		</section>
		<section class="notifications">
			<p><a href="notifications.php">Notifications</a></p>
		</section>
		
		<section class="participations">
			<h2><?php echo _PARTICIPATIONSBD ;?></h2>
			<div class="listeBD">
				<?php include '../controleurs/listeBD.php';; ?>
			</div>
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
	
	<?php  } ?>
	</div>

	<!-- Pied de page -->
	<div id="footer">
		<?php include 'includes/footer.php';?>
	</div>
	</div>
</body>
<html>