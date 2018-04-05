<?php
  session_start();
  
  // Par défaut non connecter :
  $connexion = false ;

  // Vérifications :
  if (isset($_POST['submit']) && $_POST['submit'] =='connecter') {
    if (!empty($_POST['username']) && isset($_POST['username'])) {
      $_SESSION['username'] = $_POST['username'];

      if (!empty($_POST['password']) && isset($_POST['password'])) {
        $_SESSION['password'] = $_POST['password'];
        $connexion = true;
      } else {
        echo "Merci de saisir votre mot de passe";
      }
    } else {
      echo "Merci de saisir votre pseudo";
    }
  }

  if ($connexion == true) {
    /*TEST*/echo "Saisie correcte = " .$_SESSION['username'];
    include ("../modeles/connexion_bdd.php");
    // Récupération données table utilisateurs
    $requete = $bdd->prepare('SELECT * FROM utilisateurs WHERE name=? AND password=?');
    $requete->execute(array($_POST['username'], $_POST['password']));
    while ($utilisateurs = $requete->fetch())
    {

    }
  }
/*  
    // Comparaison :
    if ($utilisateurs['name'] == $username) {
      // HASHAGE //
      if ($utilisateurs['password'] == $password) {
        $connexion = true ;
      } else {
        echo "Mot de passe incorrect";
      }
    } else {
      echo "Nom d'utilisateur incorrect";
    }
  }
*/
?>