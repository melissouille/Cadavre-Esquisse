<?php
  session_start();
  include 'functions.php';
  include 'lang_config.php';
  include 'bddconnect.php';
  include '../modeles/query.php';
  
  $message = "";
  $er = 0;

  $user = secureVar($_POST['user']);
  $pwd = secureVar($_POST['pass']);

  if (empty($user) || empty($pwd)) {
      $message= _ERREUR_CHAMPSVIDE;
      $er++;
  } else {
    $req = $bdd->prepare($sqlConnexion);
    $req->bindParam(':user', $user);
    $req->execute();
    while ($data = $req->fetch()) {
      $name = $data['name'];
      if ($user == $name) {
        $hash = $data['password'];
        $validPassword = password_verify($pwd, $hash);
        if ($validPassword || $pwd == $hash) {
          $_SESSION['user'] = $data['name'];
          $_SESSION['id'] = $data['id'];
          $_SESSION['role'] = $data['role'];
        } else {
          $message = "Mot de passe invalide";
          $er++;
        }
      } else {
        $message = "Nom utilisateur incorrect";
        $er++;
      }
    }
    $req->closeCursor();
  }
  if ($er != 0) {
    echo $message;
  }  elseif ($er == 0) {
    // Redirection page précédente
    header ("Location: $_SERVER[HTTP_REFERER]" );
  } 
    
  
?>