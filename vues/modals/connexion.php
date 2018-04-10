<?php
	// Connexion à la base de données :
	//include ("../../modeles/connexion_bdd.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Se connecter</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Bootstrap -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
  <div class="boutons" id="bouton_connexion">
    <a href="#" data-toggle="modal" data-target="#login-modal">Connexion</a>
  </div>

<div class="modal" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="loginmodal-container">
      <h1>Connexion</h1><br>
      <form>
        <input type="text" name="user" placeholder="Pseudo">
        <input type="password" name="pass" placeholder="Mot de passe">
        <input type="submit" name="login" class="login loginmodal-submit" value="Connexion">
      </form>

      <div class="login-help">
        <a href="inscription.php">Inscription</a> - <a href="#">Mot de passe oublié</a>
      </div>
    </div>
      </div>
      </div>

</body>
<html>