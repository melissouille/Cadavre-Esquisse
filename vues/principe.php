<?php
	// Connexion à la base de données :
	include ("../modeles/connexion_bdd.php");
	include ("../controles/lang_config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo _LEPRINCIPE ;?></title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<!-- Less -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.0.0/less.min.js" ></script>
		<link rel="stylesheet/less" type="text/css" href="/styles/style.less">
	<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- Menu -->
	<div id="menu">
		<?php include("includes/menu.php");?>
	</div>

	<div class="content">
		<section class="principe">
			<h2><?php echo _T_PRINCIPE ;?></h2>
			<p><?php echo _P_PRINCIPE ;?></p>
		</section>

		<section class="comment">
			<h2><?php echo _COMMENT ;?></h2>
			<div class="img_left">
				<img src="" class="left">
				<p><?php echo _P_ICONE1 ;?></p>
			</div>
			<div class="img_right">
				<img src="" class="right">
				<p><?php echo _P_ICONE2 ;?></p>
			</div>
			<div class="img_left">
				<img src="" class="left">
				<p><?php echo _P_ICONE3 ;?></p>
			</div>
			<div class="img_right">
				<img src="" class="right">
				<p><?php echo _P_ICONE4 ;?></p>
			</div>
		</section>

		<section class="regles">
			<h2><?php echo _REGLES ;?></h2>
			<ul>
				<li><?php echo _P_REGLE1 ;?></li>
				<li><?php echo _P_REGLE2 ;?></li>
				<li><?php echo _P_REGLE3 ;?></li>
				<li><?php echo _P_REGLE4 ;?></li>
				<li><?php echo _P_REGLE5 ;?></li>
				<li><?php echo _P_REGLE6 ;?></li>
				<li><?php echo _P_REGLE7 ;?></li>
			</ul>
		</section>
	</div>

	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>
</body>
</html>