<div class="dropdown">
   <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <?php echo $_SESSION['user']; ?>
    
    </button>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="profil.php"><?php echo _PROFIL; ?></a>
      <a class="dropdown-item" href="notifications.php"><?php echo _NOTIFICATION; ?></a>
      <a class="dropdown-item" href="bandedessinees.php"><?php echo _BANDES_DESSINEES; ?></a>
      <a class="dropdown-item" href="cases.php"><?php echo _CASES; ?></a>
      <a class="dropdown-item" href="parametre_user.php"><?php echo _PARAMETRES; ?></a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="../controleurs/deconnexion.php"><?php echo _DECONNEXION; ?></a>
    </div>
</div>