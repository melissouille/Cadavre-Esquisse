<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
	<nav>
		<ul>
			<li><a href="index.php">Accueil</a></li>
			<li><a href="liste_bd.php">Bédés</a></li>
			<li><a href="principe.php">Le principe</a></li>
			<li><a href="#">Participer à une BD</a></li>
			<li><a href="creation_bd.php">Créer une BD</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li id="modal_login"><a href="modals/connexion.php">Connexion / Inscription</a></li>
			<ul id="dropdown_profil" class="nav navbar-nav">
			<li class="dropdown" hidden>
				<a href="../profil.php" class="dropdown-toggle" data-toggle="dropdown">PSEUDO
					<span class="glyphicon glyphicon-user pull-right"></span>
				</a>
			    <ul class="dropdown-menu">
			    	<li>
			    		<a href="../user/notifications.php">Notifications (vue user) <span class="badge pull-right"> 5</span>
			    		</a>
			    	</li>
			    	<li class="divider"></li>
			    	<li>
			    		<a href="../user/bandedessinees.php">Les BD
			    		<span class="glyphicon glyphicon-stats pull-right"></span>
			    		</a>
			    	</li>
			    	<li class="divider"></li>
			    	<li>
			    		<a href="../user/cases.php">Les Cases
			    		<span class="glyphicon glyphicon-cog pull-right"></span>
			    		</a>
			    	</li>
			    	<li class="divider"></li>
			    	<li>
			    		<a href="../user/paremetre_user.php">Paramètres (vue user)
			    		<span class="glyphicon glyphicon-heart pull-right"></span>
			    		</a>
			    	</li>
			    	<li class="divider"></li>
			    	<li>
			    		<a href="#">Déconnection
			    		<span class="glyphicon glyphicon-log-out pull-right"></span></a>
			    	</li>
			    </ul>
			</li>
			</ul>
		</ul>
	</nav>
</body>
</html>
