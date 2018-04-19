<div class="dropdown">
   <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <?php echo $_SESSION['user']; ?>
    
    </button>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="notifications.php">Notifications</a>
      <a class="dropdown-item" href="bandedessinees.php">Bande Dessinées</a>
      <a class="dropdown-item" href="cases.php">Cases</a>
      <a class="dropdown-item" href="parametre_user.php">Paramètres</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="../controles/deconnexion.php">Déconnexion</a>
    </div>
</div>