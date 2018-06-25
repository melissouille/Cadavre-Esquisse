<nav class="menu-nav">
	<ul class="menu-bandeau">
		<li><a href="../index.php">
			<?php echo _ACCUEIL ;?>
		</a></li>
		<li><a href="../principe.php">
			<?php echo _LEPRINCIPE ;?>
		</a></li>
		<li><a href="../explorer.php">
			<?php echo _EXPLORER ;?>
		</a></li>
		<li><a href="../participerBD.php">
			<?php echo _PARTICIPERBD ;?>
		</a></li>
		<li><a href="../creationBD.php">
			<?php echo _CREERBD ;?>
		</a></li>
		<li><a href="../contact.php">
			<?php echo _CONTACT ;?>
		</a></li>
		<li>
			<?php
				if (isset($_SESSION['id'])) {
					include ('../modals/dropdown_profil.php');
				} else {
					include ('../modals/connexion.php');
				}
			?>
		</li>
	</ul>
</nav>