<button type="button" class="bouton_connexion" data-toggle="modal" data-target="#login-modal"><?php echo _CONNEXION ;?></button>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">
        <h2 class="modal-title" id="myModalLabel"><?php echo _CONNEXION ;?></h2>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">      
        <form method="post" action="../controles/connexion_config.php">
          <input type="text" name="user" placeholder="Pseudo">
          <input type="password" name="pass" placeholder="<?php echo _MOTDEPASSE ;?>">
          <input type="submit" name="login" class="login modal-submit" value="<?php echo _CONNEXION ;?>">
        </form>
      </div>

      <div class="modal-footer">
        <a href="inscription.php"><?php echo _INSCRIPTION ;?></a>
        <a href="oublimdp.php"><?php echo _OUBLI_MDP ;?></a>
      </div>

    </div>
  </div>
</div>