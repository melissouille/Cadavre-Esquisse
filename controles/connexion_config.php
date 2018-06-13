<?php
ini_set('display_errors',1); 
error_reporting(E_ALL);
  session_start();
  include 'functions.php';
  include 'lang_config.php';
  include 'bddconnect.php';
  
  $message = "";
  $er = 0;


  $user = secureVar($_POST['user']);
  $pwd = secureVar($_POST['pass']);

  if (empty($user) || empty($pwd)) {
      $message= _ERREUR_CHAMPSVIDE;
      $er++;
  } else {
    $sql = "SELECT id, name, password, role FROM utilisateurs WHERE name =:user";

    $req = $bdd->prepare($sql);
    $req->bindParam(':user', $user);
    $req->execute();
    while ($data = $req->fetch()) {
      $name = $data['name'];

      if ($user == $name) {
        $hash = $data['password'];
        $validPassword = password_verify($pwd, $hash);
        echo $validPassword;
        if ($validPassword || $pwd == $hash) {
          $_SESSION['user'] = $data['name'];
          $_SESSION['id'] = $data['id'];
          $_SESSION['role'] = $data['role'];
          $message = "Mot de passe valide";
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
  }  else {
    // Redirection page précédente
    header ("Location: $_SERVER[HTTP_REFERER]" );
  }
?>