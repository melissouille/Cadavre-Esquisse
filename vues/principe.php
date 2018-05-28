<?php
	include 'includes/general_includes.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo _LEPRINCIPE ;?></title>
	<?php include 'includes/head.html' ;?>
</head>
<body>
	<div id="main">
	<!-- Menu -->
	<div id="menu">
		<?php include 'includes/menu.php';?>
	</div>

	<div id="container" class="principes">
		<section class="principe">
			<h2><?php echo _T_PRINCIPE ;?></h2>
			<p><?php echo _P_PRINCIPE ;?></p>
		</section>

		<section class="comment">
			<h2><?php echo _COMMENT ;?></h2>
			<div class="img_left">
				<img src="../img/principe-1.png" class="left" width="100">
				<p class="right"><?php echo _P_ICONE1 ;?></p>
			</div>
			<div class="img_right">
				<img src="../img/principe-2.png" class="right" width="100">
				<p class="left"><?php echo _P_ICONE2 ;?></p>
			</div>
			<div class="img_left">
				<img src="../img/principe-3.png" class="left" width="100">
				<p class="right"><?php echo _P_ICONE3 ;?></p>
			</div>
			<div class="img_right">
				<img src="../img/principe-4.png" class="right" width="100">
				<p class="left"><?php echo _P_ICONE4 ;?></p>
			</div>
		</section>

		<section class="regles">
			<h2><?php echo _REGLES ;?></h2>
			<ul>
				<li>- <?php echo _P_REGLE1 ;?></li>
				<li>- <?php echo _P_REGLE2 ;?></li>
				<li>- <?php echo _P_REGLE3 ;?></li>
				<li>- <?php echo _P_REGLE4 ;?></li>
				<li>- <?php echo _P_REGLE5 ;?></li>
				<li>- <?php echo _P_REGLE6 ;?></li>
				<li>- <?php echo _P_REGLE7 ;?></li>
			</ul>
		</section>
	</div>

	<!-- Pied de page -->
	<div id="footer">
		<?php include ("includes/footer.php");?>
	</div>
	
	</div>
</body>
</html>