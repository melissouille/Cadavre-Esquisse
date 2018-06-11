<?php
  session_start();
  include 'functions.php';
  include 'lang_config.php';
  include 'bddconnect.php';
  
  $message = "";

  if (empty($_POST['user']) || empty($_POST['pass'])) {
      $message= _ERREUR_CHAMPSVIDE;
  } else {

    
    $sql = "SELECT password, id, role, name FROM utilisateurs WHERE name =:user AND password =:pwd";

    $user = secureVar($_POST['user']);
    $pwd = secureVar($_POST['pass']);

    $req=$bdd->prepare($sql);
    $req->bindParam(':user', $user);
    $req->bindParam(':pwd', $pwd);
    $req->execute();
    $data=$req->fetch();

    if ($data['password'] == $pwd) {
      $_SESSION['user'] = $data['name'];
      $_SESSION['id'] = $data['id'];
      $_SESSION['role'] = $data['role'];
    } else {
      $message = _ERREUR_SAISIEINCORRECTE;
    }
    $req->closeCursor();
    // Redirection page précédente
    header ("Location: $_SERVER[HTTP_REFERER]" );
  }
  echo $message;
?>