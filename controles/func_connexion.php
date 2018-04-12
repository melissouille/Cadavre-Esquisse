<?php
  // Connexion à la base de données :
  include ("../modeles/connexion_bdd.php");
  session_start();
  $message ="";

  if (empty($_POST['user']) || empty($_POST['pass'])) {
      $message= _ERREUR_CHAMPSVIDE;
  } else {
    $requete=$bdd->prepare('SELECT password, id, role, name FROM utilisateurs WHERE name =:user');
    $requete->bindValue(':user', $_POST['user'], PDO::PARAM_STR);
    $requete->execute();
    $donnees=$requete->fetch();

    if ($donnees['password'] == $_POST['pass']) {
      $_SESSION['user'] = $donnees['name'];
      $_SESSION['id'] = $donnees['id'];
      $_SESSION['role'] = $donnees['role'];
    } else {
      $message = "Saisie incorrecte";
    }
    $requete->closeCursor();
  }
  echo $message;
?>