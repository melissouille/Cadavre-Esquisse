<?php
	// Connexion à la base de données :
	include ("../../modeles/connexion_bdd.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Se connecter</title>
	<script src="controles/script.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Bootstrap -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	 <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
<!-- BOUTON CLOSE NE FONCTIONNE PAS -->
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Connexion sur Cadavre Esquisse</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                          <form id="loginForm" method="POST" action="../../controles/func_connexion.php" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="username" class="control-label">Pseudo / Mail</label>
                                  <input type="text" class="form-control" id="username" name="username" value="" title="Entrer un pseudo" placeholder="" required>

                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Mot de Passe</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" title="Entrer un mot de passe" placeholder="" required>
                                  <span class="help-block"></span>
                              </div>
                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" id="remember"> Remember login
                                  </label>
                                  <p class="help-block">(seulement s'il s'agit d'une connexion privée)</p>
                              </div>
                              <button type="submit" name="submit" value="connecter" class="btn btn-success btn-block">Se connecter</button>
                              <a href="/forgot/" class="btn btn-default btn-block">Mot de passe oublié ?</a>
                          </form>
                      </div>
                  </div>

                  <div class="col-xs-6">
                      <p class="lead">S'inscrire gratuitement<span class="text-success"></span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> See all your orders</li>
                          <li><span class="fa fa-check text-success"></span> Fast re-order</li>
                          <li><span class="fa fa-check text-success"></span> Save your favorites</li>
                          <li><span class="fa fa-check text-success"></span> Fast checkout</li>
                          <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new customers)</small></li>
                          <li><a href="/read-more/"><u>Read more</u></a></li>
                      </ul>
                      <p><a href="../inscription.php" class="btn btn-info btn-block">Oui, je veux m'inscrire !</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</body>
<html>