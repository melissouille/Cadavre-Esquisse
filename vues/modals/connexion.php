<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo _CONNEXION ;?></title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Bootstrap -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
  <div class="boutons">
    <a href="#" data-toggle="modal" data-target="#login-modal"><?php echo _CONNEXION ;?></a>
  </div>

<div class="modal" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="loginmodal-container">
      <h1><?php echo _CONNEXION ;?></h1><br>
      <form method="post" action="../controles/func_connexion.php">
        <input type="text" name="user" placeholder="Pseudo">
        <input type="text" name="pass" placeholder="<?php echo _MOTDEPASSE ;?>">
        <input type="submit" name="login" class="login loginmodal-submit" value="<?php echo _CONNEXION ;?>">
      </form>

      <div class="login-help">
        <a href="inscription.php"><?php echo _INSCRIPTION ;?></a> - 
        <a href="#"><?php echo _OUBLI_MDP ;?></a>
      </div>
    </div>
      </div>
      </div>

</body>
<html>