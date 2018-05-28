<?php
  session_start();
  include 'functions.php';
  include 'lang_config.php';
  
  $er=0;
  $message = "";

  if (empty($_POST['user']) || empty($_POST['pass'])) {
      $message= _ERREUR_CHAMPSVIDE;
      $er++;
  } else {

    include 'bddconnect.php';
    $sqlName = "SELECT password, id, role, name FROM utilisateurs WHERE name =:user";

    $user = secureVar($_POST['user']);
    $pwd = secureVar($_POST['pass']);

    $req=$bdd->prepare($sqlName);
    $req->bindParam(':user', $user);
    $req->execute();
    $data=$req->fetch();

    // Récupérer le hash
    $password = $data['password'];
    if (password_verify($pwd, $password)) {
      $_SESSION['user'] = $data['name'];
      $_SESSION['id'] = $data['id'];
      $_SESSION['role'] = $data['role'];

      // Redirection page précédente
      header ("Location: $_SERVER[HTTP_REFERER]" );
    } else {
      $message = _ERREUR_SAISIEINCORRECTE;
      $er++;
    }
    $req->closeCursor();
  }
  if ($er > 0) {
    echo $message;
  }
?>