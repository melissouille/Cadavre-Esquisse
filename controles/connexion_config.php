<?php
  session_start();
  include 'functions.php';
  
  $message = "";

  if (empty($_POST['user']) || empty($_POST['pass'])) {
      $message= _ERREUR_CHAMPSVIDE;
  } else {

    include 'bddconnect.php';
    $query = "SELECT password, id, role, name FROM utilisateurs WHERE name =:user AND password =:pwd";

    $user = secureVar($_POST['user']);
    $pwd = secureVar($_POST['pass']);

    $requete=$bdd->prepare($query);
    $requete->bindParam(':user', $user);
    $requete->bindParam(':pwd', $pwd);
    $requete->execute();
    $donnees=$requete->fetch();

    if ($donnees['password'] == $pwd) {
      $_SESSION['user'] = $donnees['name'];
      $_SESSION['id'] = $donnees['id'];
      $_SESSION['role'] = $donnees['role'];
    } else {
      $message = _ERREUR_SAISIEINCORRECTE;
    }
    $requete->closeCursor();
    // Redirection page précédente
    header ("Location: $_SERVER[HTTP_REFERER]" );
  }
  echo $message;
?>