<?php
	// Connexion à la base de données :
	include ("../modeles/connexion_bdd.php");
	// Configuration langues :
	include ("../controles/lang_config.php");
	// Affichage information lié à l'id
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo _PROFIL ;?></title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<!-- Less -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.0.0/less.min.js" ></script>
	<link rel="stylesheet/less" type="text/css" href="/styles/style.less"></head>
<body>
	<!-- Menu -->
	<div id="menu">
		<?php include("includes/menu.php");?>
	</div>

	<div class="content">
		<div class="invitations">
			<h3><?php echo _ATTENTE_INVIT ;?> :</h3>
			<div class="avatar"></div>
			<p class="msg invitations">
				<span class="pseudo"><i>pseudo</i></span>
				<?php echo _MSG_ATTENTE_INVIT ;?> : 
				<span class="titre"><i>titre</i></span>
			</p>
			<p class="msg invitAccepter">
				<span class="pseudo"><i>pseudo</i></span>
				<?php echo _MSG_ACCEPTER ;?>
			</p>
			<p class="msg invitRefuser">
				<span class="pseudo"><i>pseudo</i></span>
				<?php echo _MSG_REFUSER ;?>
			</p>
			<p class="msg bdterminee">
				<span class="pseudo"><i>pseudo</i></span>
				<?php echo _MSG_FIN_BD ;?>
				<span class="titre"><i>titre</i></span>
			</p>
			<p class="msg casedispo">
				<?php echo _MSG_CASEDISPO ;?>
				<span class="titre"><i>titre</i></span>
			</p>
			<p class="msg expiration">
				<?php echo _MSG_EXPIRATION1 ;?>
				<span class="titre"><i>titre</i></span>
				<?php echo _MSG_EXPIRATION2 ;?>
			</p>
			<p class="msg changementEtat">
				<?php echo _LABD ;?>
				<span class="titre"><i>titre</i></span>
				<?php echo _EST_MAINTENANT ;?>
				<span class="etat"><i>etat</i></span>
			</p>
			<p class="msg_nouveauParticipant">
				<span class="pseudo"><i>pseudo</i></span>
				<?php echo _MSG_NOUV_PARTICIPANT ;?>
				<span class="titre"><i>titre</i></span>
			</p>

			<button type="button" class="accepter" value="accepter">
				<?php echo _ACCEPTER ;?>
			</button>
			<button type="button" class="refuser" value="refuser">
				<?php echo _REFUSER ;?>
			</button>
		</div>
	</div>
	<!-- Pied de page -->
	<?php include ("includes/footer.php");?>
</body>
</html>